
     <h1>Welcome to first upload page</h1>
     <ul>
        @foreach($u=$return['blobs'] as $value)
             <p><a href="{{print_r($value['url'])}}" download="">{{print_r($value['url'])}}</a></p>
            <br>

           <br>
            @endforeach
     </ul>

