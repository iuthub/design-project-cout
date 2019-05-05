@extends('layouts.master')
@section('title')
    Login - Upoint
@endsection
@section('content')
    <section class="section-sign" data-aos="fade-up">
        <div class="container-fluid">
            <div class="col-lg-6 mx-auto">
                <div class="widget">
                    <h4>Sign Up</h4>
                    <div class="card">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">You are agree our terms and conditions</label>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 p0">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                </div>
                                <div class="col-lg-6 p0">
                                    <a href="{{route('login')}}">You have an account?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
