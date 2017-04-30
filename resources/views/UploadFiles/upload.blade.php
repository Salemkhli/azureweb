@extends('layout.uploudpage')
@section('upload')
    <div class="step1">
        <div class="row">
            <form action="uploadazure/" method="post" enctype="multipart/form-data">
                <div class="col-md-6">

                    <input type="file" class="form-control" id="images" name="images[]" multiple/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" name='submit_image' value="Upload"/>
                </div>
            </form>
        </div>
        <div class="row" id="image_preview"></div>
    </div>
    <ul class="list-inline pull-right">
        <li><button type="button" class="btn btn-submit next-step">continue</button></li>
    </ul>
@endsection