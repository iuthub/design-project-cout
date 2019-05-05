@extends('layouts.master')
@section('title')
    Find your friends - Upoint
@endsection
@section('content')
<section class="head">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" data-aos="fade-down">
                        <header>
                            <form action="#" method="post" class="input-group">
                                <input type="text" class="form-control search" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </header>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="widget" data-aos="zoom-in">
                        <h4>Search results</h4>
                        <div class="widget-content">
                            <ul class="widget-user">
                                <li class="row">
                                    <div class="col-2 col-lg-1 m0 p0">
                                        <img src="https://scontent.fhrk1-1.fna.fbcdn.net/v/t1.0-1/p160x160/31936634_1822681521371609_5565529286284148736_n.jpg?_nc_cat=107&_nc_ht=scontent.fhrk1-1.fna&oh=5d025a3a5909bd92e32518314498f52b&oe=5D6F16A1">
                                    </div>
                                    <div class="col-8 col-lg-9 m0 p0 ">
                                        <a href="#" class="friend-name">Bobobek Turdiyev</a>
                                    </div>
                                    <div class="col-2 m0 p0">
                                        <a class="btn btn-primary friend-request"><i class="fa fa-plus"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection