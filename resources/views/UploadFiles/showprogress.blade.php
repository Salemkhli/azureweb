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


