<?php

namespace App\Http\Controllers;

use App\Http\Controllers\azurecontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;

class mapredcontroller extends Controller
{

    public function submitJobToCluster(Request $request)
    {
        $formatChosen = $_POST['formatname'];//$_POST['formatname'];

        $newDirectory = session()->get('id');

        $arg1 = '/' . $newDirectory;
        $arg2 = '/' . $newDirectory . 'out';
        //invoke the submitting
         $job_ID=$this->executeCurl($formatChosen, $arg1, $arg2);
          session()->put('jobID',$job_ID);
        return redirect('uploadazure/imagetypeform/progress');
    }

    public function executeCurl($format, $arg1, $arg2)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://convertimage.azurehdinsight.net/templeton/v1/mapreduce/jar");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user.name=sshuser&jar=/ams/imageconverter.jar&class=experiments.ConvertImage&define=format=" . $format . "&arg=" . $arg1 . "&arg=" . $arg2);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_USERPWD, "admin" . ":" . "ibrahimTALEB123#");

        $headers = array();
        $headers[] = "Content-Type: application/x-www-form-urlencoded";//JSON
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $jsonData=json_decode($result, true);

         return $job_id=$jsonData['id'];

    }

    public function getProgress()
    {

        $job_id=session()->get('jobID');

        $ch = curl_init();
        $url = "https://convertimage.azurehdinsight.net/templeton/v1/jobs/" .$job_id. "?user.name=sshuser";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, "admin" . ":" . "ibrahimTALEB123#");

        $headers = array();
        $headers[] = "Content-Type: application/x-www-form-urlencoded";//JSON
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $jsonData = json_decode($result, true);
        $pr = $jsonData['percentComplete'];
        $pr = (int)substr($pr, 3, 6);  //progress by 100%


       return view('UploadFiles.showprogress',['pr'=>$pr]);

        /*finally {
            $r=new azurecontroller();
            $r->deleteTheUploadedDirectory();
            return redirect('/list');
        }*/

    }
    //Delete uploaded files the directory in the storage after converted

}
