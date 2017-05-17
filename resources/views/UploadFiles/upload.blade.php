@extends('layout.uploudpage')

@section('uploadicon')
    <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="/start" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
								<span class="round-tab">
									<i class="glyphicon glyphicon-folder-open"></i>
								</span>
                </a>
            </li>

            <li role="presentation" class="disabled">
                <a href="/" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
								<span class="round-tab">
									<i class="glyphicon glyphicon-pencil"></i>
								</span>
                </a>
            </li>
            <li role="presentation" class="disabled">
                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
								<span class="round-tab">
									<i class="glyphicon glyphicon-picture"></i>
								</span>
                </a>
            </li>

            <li role="presentation" class="disabled">
                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
								<span class="round-tab">
									<i class="glyphicon glyphicon-ok"></i>
								</span>
                </a>
            </li>
        </ul>
    </div>
@endsection

@section('upload')
    <div class="step1">
        <div class="row">
            <form  action="type/uploadazure" method="post" enctype="multipart/form-data" style="position: relative;left: 25% ">
                <div class="col-md-6">

                    <input type="file"  onsubmit="wait()" class="form-control" id="images" name="images[]" value="Click here to Upload" accept="image/*" multiple required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="col-md-6">
                    <input type="submit"  class="btn btn-primary" data-buttonText ="hhh"id="next-step" name='submit_image' value="Upload"/>
                </div>
                <div id="loading">
                        <img id="loading-image"/>
                </div>
            </form>
        </div>
        <div class="row" id="image_preview"></div>
    </div>

    <style> loading {

    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: fixed;
    display: block;
    opacity: 0.7;
    background-color: #fff;
    z-index: 99;
    text-align: center;
    }

    #loading-image {

    position: absolute;
    top: 100px;
    left: 240px;
    z-index: 100;
    }
   </style>
    <script language="javascript" type="text/javascript">

              function wait() {

         $("#loading").append("<img id='loading-image' style='position: absolute; top: 100px;left: 240px;z-index: 100;' src='/images/Preloader_8.gif'  />");



                 document.getElementById("loading-image").setAttribute("src",'/images/Preloader_8.gif'); }



    </script>
    @endsection

