@extends('layout.uploudpage')
@section('upload')
    <meta http-equiv="refresh" content="3" >

@if($pr<100)
    <div id="bar" class="container">
            <div  id = "pbarmain" style="display: none" class="progress progress-striped active">
                <div id = "pbar" class="progress-bar"></div>
            </div>
            <button type="submit" onClick="makeProgress({{$pr}})" class="btn btn-default" id="myButtonId" ></button>

    </div>
@else
    <script type="text/javascript">
     window.location.href = "/start/type/uploadazure/imagetypeform/download";//here double curly bracket
    </script>
@endif

@endsection


