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
                    <h4>Sign Up</h4>
                    <div class="card">
                        <form action="{{route('signup')}}" method="post">
                            <div class="row">
                                <div class="col-lg-6 form-group p-l-0">
                                        <input type="text" name="first-name" class="form-control"  placeholder="First Name" value="{{Request::old('first-name')}}">
                                </div>
                                <div class="col-lg-6 form-group p0">
                                    <input type="text" name="last-name" class="form-control"  placeholder="Last Name" value="{{Request::old('last-name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{Request::old('email')}}">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" value="{{Request::old('birthday')}}" name="birthday" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>
                                    By clicking sign up you are agree our terms and data policy.
                                </p>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 p0">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                    <input type="hidden" name="_token" value="{{Session::token()}}">
                                </div>

                                <div class="col-lg-6 p0">
                                    <a class="link" href="{{route('login')}}">You have an account?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
