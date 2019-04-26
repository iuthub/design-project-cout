@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
    @include('includes.message-block')
    <div class="container">
    <section class="row new-post">
        <div class="col-md-12 col-md-offset-3">
            <header><h3>What do you have to say</h3></header>
            <form action="{{route('post.create')}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" rows="10" name="body" id="new-post"></textarea>
                </div>
                <button class="btn btn-primary">
                    Create a post
                </button>
                <input type="hidden" value="{{Session::token()}}" name="_token" >
            </form>

        </div>
    </section>

    <section class="row posts">
        <div class="col-md-12 ">
            <header><h3>What other people say</h3></header>
            @foreach($posts as $post)
                <article class="post">
                    <p>{{ $post->body }}</p>
                    <div class="info">
                        Posted by {{$post->user->first_name}}
                    </div>
                    <div class="interaction">
                        <a href="#">Like</a>
                        <a href="#">Dislike</a>
                        @if(Auth::user() == $post->user)
                            |
                            <a href="#" class="edit">Edit</a>
                            <a href="{{route('post.delete', ['post_id' => $post->id])}}">Delete</a>
                        @endif

                    </div>
                </article>
            @endforeach
        </div>
    </section>

        <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="post-body" id="#post-body" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection