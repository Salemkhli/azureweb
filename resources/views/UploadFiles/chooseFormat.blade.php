@extends('layout.uploudpage')
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

{{--
                    <div class="row mar_ned">
                        <div class="col-md-4 col-xs-3">
                            <p align="right"><stong>Save file to</stong></p>
                        </div>
                        <div class="col-md-8 col-xs-9">
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1"> A
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2"> B
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> C
                            </label>
                        </div>
                    </div>
--}}

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
