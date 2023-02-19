<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $tweet=Tweet::all();
        return view('welcome', ['tweets'=>$tweets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data=$request->all();
        Tweet::create($data);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tweet $tweet): Response
    {
        $tweet=Tweet::find($tweet->id);
        return view('tweets.show',['tweet' => $tweet]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tweet $tweet): Response
    {
        return view ('tweets.edit', ['tweet' => $tweet]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tweet $tweet): RedirectResponse
    {
        $data=$request->all();
        $tweet->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tweet $tweet): RedirectResponse
    {
      $tweet->delete();
      return redirect('/');
    }
}
