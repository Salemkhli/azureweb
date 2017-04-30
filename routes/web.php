<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*Route::get('/', function () {
    return view('layout.waleed');
});*/

/*Route::get("start",function (){
    return view('layout.uploudpage');
});*/
Route::get('/', function () {                                                                         //0
    return view('layout.waleed');
});


Route::get('start', function () {                                                                         //0
    return view('UploadFiles.upload');
});

//Route::get('test','mapredcontroller@getProgress');


//Route::get('test2','azurecontroller@downlodFromHDFS');

//Route::post('start/uploadazure','azurecontroller@uploadFromWebToHDFS'); //1

Route::post('uploadazure','azurecontroller@uploadFromWebToHDFS');                            //1
Route::get('uploadazure/imagetypeform','azurecontroller@chooseImagesTypeForm');             //2

//Route::get('delete','azurecontroller@deleteTheUploadedDirectory');
Route::post('uploadazure/imagetypeform/convert','mapredcontroller@submitJobToCluster'); //3
Route::get('uploadazure/imagetypeform/progress','mapredcontroller@getProgress');       //4
Route::get('list', 'azurecontroller@getListBlobsOfSubdirectoryToDownload');           //5

//Route::post('uploadazure/imagetypeform/convert/progress','mapredcontroller@getProgress');//4

//Route::get('downloadazure','azurecontroller@downlodFromHDFS');
