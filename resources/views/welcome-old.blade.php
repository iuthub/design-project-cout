@extends('layouts.master')

@section('title')
    Social Networking
@endsection


@section('content')
    @include('includes.message-block')
    <div class="row mt-5">
        <div class="col-md-6">
            <h2 class="title pb-3">Sign Up</h2>
            <form action="{{route('baby')}}" method="post">
                <div class="form-group">
                    <input class="form-control has-error" value="{{Request::old('first_name')}}" type="text" placeholder="Name" name="first_name" />
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <input class="form-control" value="{{Request::old('email')}}" type="email" placeholder="Email" name="email" />
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{Request::old('password')}}" type="password" placeholder="password" name="password" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="form-control">Sign Up</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2 class="title pb-3">Sign In</h2>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group has-error">
                    <input class="form-control" type="email" placeholder="Email" name="email" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" placeholder="password" name="password" />
                </div>
                <div class="form-group">
                    <a href="#">Forgot your password?</a>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="form-control">Sign In</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </div>
            </form>
        </div>

    </div>
@endsection