<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('back.find-friends');
    }

    public function getNotificationsPage(){
        return view('back.notifications');
    }

    public function getProfilePage(){
        return view('back.profile');
    }
}
