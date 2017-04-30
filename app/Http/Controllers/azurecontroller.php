<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

require_once "../vendor/autoload.php";
use MicrosoftAzure\Storage\Common\ServicesBuilder;
use MicrosoftAzure\Storage\Common\ServiceException;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;
use \ZipArchive as ZipArchive;

class azurecontroller extends Controller
{
public static $ssh;
public static $format_name;
public static $directory_name;

  // The connection to the azure blob
    public function getTheConnection()
    {
            $key = 'l2ntz4d/az5O2+mYv9R50rDNvCRKvUi9dw5yh2IczD2iPap91VFpN734OCAWTe2ZfPjvibUN2mZg3n7NpuuJRA==';
            if (base64_encode(base64_decode($key, true)) === $key) {
            $connectionString = 'DefaultEndpointsProtocol=https;AccountName=convertimage;
            AccountKey=l2ntz4d/az5O2+mYv9R50rDNvCRKvUi9dw5yh2IczD2iPap91VFpN734OCAWTe2ZfPjvibUN2mZg3n7NpuuJRA==';
                                                                   }
        return $connectionString;
    }

    //https://convertimage.blob.core.windows.net/convertimage-2017-03-29t08-13-29-590z/1492348688out/dd.jpg
     public function getListBlobsOfSubdirectoryToDownload(Request $request){
         $connectionString = $this->getTheConnection();
         $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
         azurecontroller::$directory_name = $request->session()->get('name');
         //set the / to subdirectory in container
         $listBlobsOptions=new ListBlobsOptions();
         $listBlobsOptions->setPrefix(azurecontroller::$directory_name."out");
        //always the second option parameter to aware of it you get the options in the Models
         $blobs=$blobRestProxy->listBlobs("convertimage-2017-03-29t08-13-29-590z",$listBlobsOptions);
         $return = [
             'blobs' => [],
         ];
        foreach ($blobs->getBlobs() as $k => $b) {
            $tmp = [];
            $tmp['name'] = $b->getName();
            $tmp['url'] = $b->getUrl();
            array_push($return['blobs'], $tmp);
        }
         return view('UploadFiles.listblob')->with(['return'=>$return]);
                                                                           }

     //unzip file and upload all files to Azure Storage
     public function uploadZipFile(Request $request){
         //set the session for first user
         $request->session()->flush();
         $this->setSession($request);
         //connect to azure
         $connectionString = $this->getTheConnection();
         $blobClient = ServicesBuilder::getInstance()->createBlobService($connectionString);
         //set the user directory
         $directory_name = session()->get('name');
         //Extract zip file to Azure Storage
         $zipfile = $request->file('images');
         $zip = zip_open($zipfile);
         if ($zip) {
      while ($zip_entry = zip_read($zip)) {
        //the Name is given with zip file name
        $blob_name=$directory_name.'/'.basename(zip_entry_name($zip_entry));
        if (zip_entry_open($zip, $zip_entry,'r')) {
        $contents = zip_entry_read($zip_entry,zip_entry_filesize($zip_entry));
        try {
           //Upload blob
        $blobClient->createBlockBlob("convertimage-2017-03-29t08-13-29-590z", $blob_name, $contents);
            } catch(ServiceException $e){
                 $code = $e->getCode();
                 $error_message = $e->getMessage();
                 echo $code.": ".$error_message.PHP_EOL;
                                            }
                           zip_entry_close($zip_entry);
                                                 }
                                                 }
             zip_close($zip);
         }
         //redirect to form convert page to choose format
         return redirect('/uploadazure/imagetypeform');
     }

  //Download couple of files AS Zip file
  public function downloadFilesAsZipFile(Request $request){
      //setting the connection to azure storage
      $connectionString = $this->getTheConnection();
      $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
      $directory_name = session()->get('id');

      //set the getting listing files option "Setting the prefixes is the point", session + "out"
      $listBlobsOptions=new ListBlobsOptions();
      $listBlobsOptions->setPrefix($directory_name."out");

      //Spesfi the Azure container and get the list options you have setting
      $blobs=$blobRestProxy->listBlobs("convertimage-2017-03-29t08-13-29-590z",$listBlobsOptions);

      //Start create the Zip file to upload files in it
      $zip=new ZipArchive();
      $zipName='images.zip';
      $zip->open($zipName,ZipArchive::CREATE);

      //To get the blob its self and create zip file to keep it in !!
      foreach ($blobs->getBlobs() as $k=>$blob){
          $url = str_replace(" ", "%20", $blob->getUrl());
          $zip->addFromString(basename($blob->getName()),file_get_contents($url));
      }
      $zip->close();
      try {
          // Set the header for downloading the zip file
          header('Content-Type: application/zip');
          header('Content-disposition: attachment; filename='.$zipName);
          header('Content-Length: ' . filesize($zipName));
          readfile($zipName);

      } catch (ServiceException $e) {
          $code = $e->getCode();
          $error_message = $e->getMessage();
          echo $code . ": " . $error_message . "<br />";
      }

  }

   //This function is uploading normal files
    public function uploadFromWebToHDFS(Request $request){
               //set the session for first user
               $request->session()->flush();
               session()->put('id',time());
               //connect to azure

               $connectionString = $this->getTheConnection();
               $blobClient = ServicesBuilder::getInstance()->createBlobService($connectionString);
               //set the user directory
                $directory_name = session()->get('id');
               //here start process of uploading files
                $files = $request->file('images');
                //process and pull all files from the stack
                foreach ($files as $file) {
                $blob_name = $directory_name . '/' . $file->getClientOriginalName();
                $content = file_get_contents($file);
                try {
                    //Upload blob
                    $blobClient->createBlockBlob("userfiles", $blob_name, $content);
                } catch (ServiceException $e) {
                    $code = $e->getCode();
                    $error_message = $e->getMessage();
                    echo $code . ": " . $error_message . PHP_EOL;
                }

            }
        //redirect to form convert page to choose format
    return redirect('uploadazure/imagetypeform');
    }


    //This function return the page of choosing convert format
    public function chooseImagesTypeForm(){
        //view the type of images to choose here
        return view('UploadFiles.chooseFormat');
    }


    public function deleteTheUploadedDirectory(){
        //setting the connection to azure storage
        $connectionString = $this->getTheConnection();
        $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);
        //azurecontroller::$directory_name = $request->session()->get('name');
        $directory_name = session()->get('id');
        //set the getting listing files option "Setting the prefixes is the point", session + "out"
        $listBlobsOptions=new ListBlobsOptions();
        $listBlobsOptions->setPrefix( $directory_name);

        //Spesfi the Azure container and get the list options you have setting
        $blobs=$blobRestProxy->listBlobs("convertimage-2017-03-29t08-13-29-590z",$listBlobsOptions);
         //To get the blob its self and delete every blob there by container name
        foreach ($blobs->getBlobs() as $blob){

            $blobRestProxy->deleteBlob("convertimage-2017-03-29t08-13-29-590z",$blob->getName());
        }

    }
}