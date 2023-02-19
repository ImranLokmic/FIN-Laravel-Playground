<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tweet;
use App\Http\Controllers\TweetController;

Route::get('/', function () {

    $tweets = Tweet::all();

    return view('welcome',['tweets' => $tweets]);
});


Route::resource('tweets', TweetController::class);