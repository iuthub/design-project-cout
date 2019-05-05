<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getLoginPage(){
        return view('front.login');
    }

    public function getRegisterPage(){
        return view('front.register');
    }

    public function getOldPage(){
        return view('welcome-old');
    }

    public function getTimeline(){
        return view('back.timeline');
    }

    public function getFindFriendsPage(){
        $id = Auth::user()->id;
        $users = User::where('id', "!=", $id)->orderby('created_at', 'desc')->limit(10)->get();
        return view('back.find-friends', [
            'users' => $users
        ]);
    }

    public function getNotificationsPage(){
        return view('back.notifications');
    }

    public function getProfilePage(){
        $id = Auth::user()->id;
        $posts = Post::where('user_id', $id)->orderBy('created_at', 'desc')->get();

        return view('back.profile',[
            'posts' => $posts
        ]);
    }
}
