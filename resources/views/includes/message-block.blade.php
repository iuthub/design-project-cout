@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-12">
            <ul class="text-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(Session::has('message'))
    <div class="row">
        <div class="col-md-12">
            <p class="text-success">
                {{Session::get('message')}}
            </p>
        </div>
    </div>
@endif