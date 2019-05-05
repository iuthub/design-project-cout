<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::post('/signup', [
   'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);


Route::post('/signin', [
   'uses' => 'UserController@postSignIn',
   'as' => 'signin'
]);

Route::get('/user/verify/{token}', [
    'uses' => 'UserController@verifyUser',
    'as' => 'verifyUser'
]);

Route::post('/createpost',[
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create'
]);

Route::get('/deletepost/{post_id}', [ //post_id controllerniki bilan bir xil bo'lishi kerak nomlanishida
    'uses' =>  'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);


/************Begin Work/****************/

Route::get('/login',[
    'uses' => 'PageController@getLoginPage',
    'as' => 'login'
]);

Route::get('/register',[
    'uses' => 'PageController@getRegisterPage',
    'as' => 'register'
]);

Route::get('/old',[
    'uses' => 'PageController@getOldPage',
    'as' => 'old'
]);

Route::get('/timeline', [
    'uses' => 'PageController@getTimeline',
    'as' => 'timeline',
    'middleware' => 'auth'
]);

Route::get('/find-friends', [
    'uses' => 'PageController@getFindFriendsPage',
    'as' => 'find-friends',
    'middleware' => 'auth'
]);

Route::get('/notifications', [
    'uses' => 'PageController@getNotificationsPage',
    'as' => 'notifications',
    'middleware' => 'auth'
]);

Route::get('/profile', [
    'uses' => 'PageController@getProfilePage',
    'as' => 'profile',
    'middleware' => 'auth'
]);