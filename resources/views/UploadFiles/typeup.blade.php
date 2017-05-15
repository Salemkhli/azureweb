@extends('layout.uploudpage')
@section('upload')
    <form action='start/type' method="post"  name="myform" enctype="multipart/form-data">
        <div class="row mar_ned">
            <div class="col-md-4 col-xs-3">
                <p align="right"><stong>Files Types</stong></p>
            </div>
            <div class="col-md-8 col-xs-9">
                <select name="typename" id="highest_qualification"   class="dropselectsec" required>
                    <option  value=""> Select the type upload file</option>
                    <option value="zip">Zip</option>
                    <option value="files">Multiple Images</option>
                </select>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <p align="right"><button type="submit" class="btn btn-primary">Submit</button></p>
            <div class="row mar_ned"></div>
        </div>
    </form>

    @endsection
