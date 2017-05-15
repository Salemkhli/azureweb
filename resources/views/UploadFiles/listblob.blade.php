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

            <li role="presentation" class="active">
                <a href="/complete"  data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
								<span class="round-tab">
									<i class="glyphicon glyphicon-ok"></i>
								</span>
                </a>
            </li>
        </ul>
    </div>

        <ul>
            <b>Click here to download all images as zip</b>
            <br>
            <a href="/start/type/uploadazure/imagetypeform/downloadzip" download><button>Download All Files As Zip</button></a>
            <br>
            <br>

            <b>Click on the image's name to download</b>
            <br>
            @foreach($u=$return['blobs'] as $value)
                @if(basename($value['url'])!='_SUCCESS')
                   <p><a href="{{$value['url']}}" download>{{basename($value['url'])}}</a></p>
                <br>
               @endif

            @endforeach


        </ul>


    @endsection












