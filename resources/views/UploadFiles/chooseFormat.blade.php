@extends('layout.uploudpage')
@section('uploadicon')
    <div class="wizard-inner">
        <div class="connecting-line"></div>
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="disabled">
                <a href="/start" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
								<span class="round-tab">
									<i class="glyphicon glyphicon-folder-open"></i>
								</span>
                </a>
            </li>

            <li role="presentation" class="active">
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

    <div class="step2">
        <div class="step_21">
            <div class="row">

                <form action='imagetypeform/convert' method="post" enctype="multipart/form-data">
                    <div class="row mar_ned">
                        <div class="col-md-4 col-xs-3">
                            <p align="right"><stong>Image Formats</stong></p>
                        </div>
                        <div class="col-md-8 col-xs-9">
                            <select name="formatname" id="highest_qualification" class="dropselectsec" required>
                                <option value=""> Select the format you want to convert to</option>
                                <option value="bmp">BMP</option>
                                <option value="gif">GIF</option>
                                <option value="jpeg">JPEG</option>
                                <option value="jpg">JPG</option>
                                <option value="png">PNG</option>
                            </select>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </div>

                    <div class="row mar_ned">
                        <div class="col-md-4 col-xs-3 form-group row has-success">
                            <p align="right"><stong>Notify me when it is finished</stong></p>
                        </div>
                        <div class="col-md-8 col-xs-9">
                            <input type="Email" name="Emil" placeholder="Enter youe Email" class="Email" autocomplete="on">
                        </div>
                    </div>
                      <div class="container">
                        <div  id = "pbarmain" style="display: none" class="progress progress-striped active">
                            <div id = "pbar" class="progress-bar"></div>
                        </div>
                        <button type="submit"  class="btn btn-default" >Convert</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
