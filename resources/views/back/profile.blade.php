@extends('layouts.master')
@section('title')
    Profile - Upoint
@endsection
@section('content')
    <section class="head">
        <div class="container-fluid">
            <div class="col-lg-12">
                @include('includes.message-block')
                <a href="#">
                    <img class="cover" src="https://html.crumina.net/html-olympus/img/top-header1.jpg">
                </a>
                <div class="profile-menu">
                    <div class="row">
                        <div class="col-lg-5 p0 ">
                            <ul class="profile-menu-list">
                                <li class="pm-item">
                                    <a class="pm-link active" href="#">Timeline</a>
                                </li>
                                <li class="pm-item">
                                    <a class="pm-link" href="#">About</a>
                                </li>
                                <li class="pm-item">
                                    <a class="pm-link" href="#">Friends</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 "></div>
                        <div class="col-lg-5 p0">
                            <ul class="profile-menu-list">
                                <li class="pm-item">
                                    <a class="pm-link active" href="#">Timeline</a>
                                </li>
                                <li class="pm-item">
                                    <a class="pm-link" href="#">About</a>
                                </li>
                                <li class="pm-item">
                                    <a class="pm-link" href="#">Friends</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="profile-img-block">
                        <a href="#"><img class="profile-img" data-aos="flip-up" src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA"></a>
                        <p class="profile-name" data-aos="zoom-in">Mukhammadjon Yorkinov</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget" data-aos="zoom-in">
                            <h4>Intro</h4>
                            <div class="widget-content">
                                <ul class="list">
                                    <li class="item">
                                        <i class="fa fa-graduation-cap"></i> Studied at Inha University in Tashkent
                                    </li>
                                    <li class="item">
                                        <i class="fa fa-home"></i> Lives in Tashkent
                                    </li>
                                    <li class="item">
                                        <i class="fa fa-map-marker"></i> From Andijan
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget" data-aos="zoom-in">
                            <h4>Friends <span class="badge badge-light">251</span></h4>
                            <div class="widget-content">
                                <ul class="friend-list">
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="friend-img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget" data-aos="zoom-in">
                            <h4>Gallery</h4>
                            <div class="widget-content">
                                <ul class="gallery-widget">
                                    <li>
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-9/47580713_734191643619579_7895368286370529280_n.jpg?_nc_cat=104&_nc_ht=scontent.fhen1-1.fna&oh=4c594163de18212ac5dc3757b7243c93&oe=5D2EC0AC" class="gallery-widget">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="gallery-widget">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="gallery-widget">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="gallery-widget">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget" data-aos="zoom-in">
                            <h4>Advertisement</h4>
                            <div class="widget-content">
                                <a href="#">
                                    <img src="https://inha.uz/media/template_1_K9uAygX.png.720x290_q85_crop_wrpZVs7.png.400x176_q85_crop.png" class="ad">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card" data-aos="fade-down">
                            <header>
                                <i class="fa fa-edit"></i> Create post
                            </header>
                            <form action="{{route('post.create')}}" method="post" class="form-group">
                                <textarea rows="5" name="body" class="form-control" placeholder="What's in your mind?"></textarea>
                                <div class="post-footer">
                                    <button class="btn btn-primary new-post-button">Post</button>
                                    <input type="hidden" value="{{Session::token()}}" name="_token" >
                                </div>
                            </form>
                        </div>
                        @foreach($posts as $post)
                        <div class="post" data-aos="fade-up">
                            <div class="post-header">
                                <img src="img/user.png" class="post-author-img">
                                <div class="post-author-name">
                                    <a href="#">{{$post->user->first_name}} {{$post->user->last_name}}</a>
                                    <br> <span class="post-date">{{$post->created_at}}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                {{$post->body}}
                                <input type="hidden" value="{{$post->id}}" class="pid">
                            </div>
                            <div class="post-footer">
                                <div class="post-buttons">
                                    <ul class="buttons">
                                        <li class="item like-action"><a href="#" id="like"><i class="fa fa-thumbs-up"></i>  likes</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="post" data-aos="fade-up">
                            <div class="post-header">
                                <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="post-author-img">
                                <div class="post-author-name">
                                    <a href="#">{{$post->user->first_name}} {{$post->user->last_name}}</a>
                                </div>
                            </div>
                            <div class="post-content">
                                <h5><b>Born on {{Auth::user()->birthday}}</b></h5>
                            </div>
                            <div class="post-footer">
                                <div class="post-buttons">
                                    <ul class="buttons">
                                        <li class="item"><a href="#" id="like"><i class="fa fa-thumbs-up"></i> 1,589 likes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var _token = '{{Session::token()}}';
        var urlLike = '{{route('like')}}';
    </script>
@endsection