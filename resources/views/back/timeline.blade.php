@extends('layouts.master')

@section('title')
    Timeline - Upoint
@endsection
@section('content')
<section class="head">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">

                    <div class="widget" data-aos="zoom-in">
                        <h4>Friend Suggestion</h4>
                        <div class="widget-content">
                            <ul class="widget-user">
                                <li class="row">
                                    <div class="col-3 m0 p0">
                                        <img src="https://scontent.fhrk1-1.fna.fbcdn.net/v/t1.0-1/p160x160/31936634_1822681521371609_5565529286284148736_n.jpg?_nc_cat=107&_nc_ht=scontent.fhrk1-1.fna&oh=5d025a3a5909bd92e32518314498f52b&oe=5D6F16A1">
                                    </div>
                                    <div class="col-6 m0 p0">
                                        <a href="#" class="friend-name">Bobobek Turdiyev</a>
                                    </div>
                                    <div class="col-3 m0 p0">
                                        <a class="btn btn-primary friend-request"><i class="fa fa-plus"></i></a>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-3 m0 p0">
                                        <img src="https://scontent.fhrk1-1.fna.fbcdn.net/v/t1.0-1/p160x160/31936634_1822681521371609_5565529286284148736_n.jpg?_nc_cat=107&_nc_ht=scontent.fhrk1-1.fna&oh=5d025a3a5909bd92e32518314498f52b&oe=5D6F16A1">
                                    </div>
                                    <div class="col-6 m0 p0">
                                        <a href="#" class="friend-name">Bobobek Turdiyev</a>
                                    </div>
                                    <div class="col-3 m0 p0">
                                        <a class="btn btn-primary friend-request"><i class="fa fa-plus"></i></a>
                                    </div>
                                </li>

                                <li class="row">
                                    <div class="col-3 m0 p0">
                                        <img src="https://scontent.fhrk1-1.fna.fbcdn.net/v/t1.0-1/p160x160/31936634_1822681521371609_5565529286284148736_n.jpg?_nc_cat=107&_nc_ht=scontent.fhrk1-1.fna&oh=5d025a3a5909bd92e32518314498f52b&oe=5D6F16A1">
                                    </div>
                                    <div class="col-6 m0 p0">
                                        <a href="#" class="friend-name">Bobobek Turdiyev</a>
                                    </div>
                                    <div class="col-3 m0 p0">
                                        <a class="btn btn-primary friend-request"><i class="fa fa-plus"></i></a>
                                    </div>
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
                        <form action="#" method="post" class="form-group">
                            <textarea rows="5" class="form-control" placeholder="What's in your mind?"></textarea>
                            <div class="post-footer">
                                <button class="btn btn-primary new-post-button">Post</button>
                            </div>
                        </form>
                    </div>

                    <div class="post" data-aos="fade-up">
                        <div class="post-header">
                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="post-author-img">
                            <div class="post-author-name">
                                <a href="#">Yorkinov Mukhammadjon</a>

                                <br> <span class="post-date">01 Jan</span>
                            </div>
                        </div>
                        <div class="post-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="post-footer">
                            <div class="post-buttons">
                                <ul class="buttons">
                                    <li class="item"><a href="#" id="like"><i class="fa fa-thumbs-up"></i> 1,589 likes</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-comment"></i> 2510 comments</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-share"></i> Share</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="post" data-aos="fade-up">
                        <div class="post-header">
                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="post-author-img">
                            <div class="post-author-name">
                                <a href="#">Yorkinov Mukhammadjon</a>

                                <br> <span class="post-date">01 Jan</span>
                            </div>
                        </div>
                        <div class="post-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="post-footer">
                            <div class="post-buttons">
                                <ul class="buttons">
                                    <li class="item"><a href="#" id="like"><i class="fa fa-thumbs-up"></i> 1,589 likes</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-comment"></i> 2510 comments</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-share"></i> Share</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="post" data-aos="fade-up">
                        <div class="post-header">
                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="post-author-img">
                            <div class="post-author-name">
                                <a href="#">Yorkinov Mukhammadjon</a>

                                <br> <span class="post-date">01 Jan</span>
                            </div>
                        </div>
                        <div class="post-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="post-footer">
                            <div class="post-buttons">
                                <ul class="buttons">
                                    <li class="item"><a href="#" id="like"><i class="fa fa-thumbs-up"></i> 1,589 likes</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-comment"></i> 2510 comments</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-share"></i> Share</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="post" data-aos="fade-up">
                        <div class="post-header">
                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="post-author-img">
                            <div class="post-author-name">
                                <a href="#">Yorkinov Mukhammadjon</a>

                                <br> <span class="post-date">01 Jan</span>
                            </div>
                        </div>
                        <div class="post-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="post-footer">
                            <div class="post-buttons">
                                <ul class="buttons">
                                    <li class="item"><a href="#" id="like"><i class="fa fa-thumbs-up"></i> 1,589 likes</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-comment"></i> 2510 comments</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-share"></i> Share</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="post" data-aos="fade-up">
                        <div class="post-header">
                            <img src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA" class="post-author-img">
                            <div class="post-author-name">
                                <a href="#">Yorkinov Mukhammadjon</a>

                                <br> <span class="post-date">01 Jan</span>
                            </div>
                        </div>
                        <div class="post-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="post-footer">
                            <div class="post-buttons">
                                <ul class="buttons">
                                    <li class="item"><a href="#" id="like"><i class="fa fa-thumbs-up"></i> 1,589 likes</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-comment"></i> 2510 comments</a></li>
                                    <li class="item"><a href="#" id="like"><i class="fa fa-share"></i> Share</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary load-more">
                        <i class="fa fa-spinner"></i> Load More
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection