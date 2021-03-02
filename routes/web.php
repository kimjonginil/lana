<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/post/create', function () {
    $post=new \App\Models\Post;
    $post->title = 'Title..';
    $post->body = 'Some text..';
    $post->save();
});

Route::get('/post', function () {
    $posts = \App\Models\Post::all();
    foreach ($posts as $post) {
        echo $post->title.' '.$post->body.'<br>';
    }
});