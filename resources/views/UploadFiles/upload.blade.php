@extends('layout.uploudpage')
@section('upload')
    <div class="step1">
        <div class="row">
            <form action="type/uploadazure" method="post" enctype="multipart/form-data">
                <div class="col-md-6">

                    <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary next-step" name='submit_image' value="Upload"/>
                </div>
            </form>
        </div>
        <div class="row" id="image_preview"></div>
    </div>
@endsection