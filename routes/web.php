<?php

//go home page
Route::get('/', function () {                                                                         //0
    return view('layout.waleed');
});
//get started to upload images
Route::get('start', function () {                                                                         //0
    return view('UploadFiles.typeup');
});
Route::post('start/type','azurecontroller@typeUpload');
//type of uploading file
Route::post('start/type/uploadazure','azurecontroller@uploadFromWebToHDFS');
Route::post('/start/type/uploadzip','azurecontroller@uploadZipFile');
//choose the type image
Route::get('start/type/uploadazure/imagetypeform','azurecontroller@chooseImagesTypeForm');
//integrate with hadoop
Route::post('/start/type/uploadazure/imagetypeform/convert','mapredcontroller@submitJobToCluster');
//get progress by job Id
Route::get('/start/type/uploadazure/imagetypeform/progress','mapredcontroller@getProgress');
Route::get('/start/type/uploadazure/imagetypeform/progress/ack','mapredcontroller@Acknewledge');
//show the download page of files as zip or file by file
Route::get('/start/type/uploadazure/imagetypeform/download', 'azurecontroller@getListBlobsOfSubdirectoryToDownload');           //5
Route::get('/start/type/uploadazure/imagetypeform/downloadzip','azurecontroller@downloadFilesAsZipFile');
//send email to user when the images are converted
Route::get('send','emailcontroller@defaultSend');
Route::get('about',function (){
   return view('UploadFiles.about');
});
Route::get('contact',function (){
    return view('UploadFiles.contact');
});