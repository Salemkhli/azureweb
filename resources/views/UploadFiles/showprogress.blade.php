@extends('layout.uploudpage')
@section('progress')
    <div class="container">
        <div  id = "pbarmain" style="display: none" class="progress progress-striped active">
            <div id = "pbar" class="progress-bar"></div>
        </div>
        <button type="button" onClick="makeProgress()" class="btn btn-default" >Convert</button>
    </div>

@endsection



<html>

<head>
    <title></title>

    <meta http-equiv="refresh" content="5">
</head>
<body>
<progress value={{$pr}} max="100"></progress>
</body>
</html>


