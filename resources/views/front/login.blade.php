@extends('layouts.master')
@section('title')
Login - Upoint
@endsection
@section('content')
<section class="section-sign" data-aos="fade-up">
    <div class="container-fluid">
        <div class="col-lg-6 mx-auto">

            @include('includes.message-block')
            <div class="widget">
                <h4>Sign In</h4>
                <div class="card">
                    <form action="{{route('signin')}}" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 p0">
                                <button type="submit" class="btn btn-primary">Log In</button>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </div>
                            <div class="col-lg-6 p0">
                                <a class="link" href="#">Forget password?</a>
                                <a class="link" href="{{route('register')}}">Don't have an account?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
