@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

@if(Session::has('err'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('err')}}
    </div>
@endif

