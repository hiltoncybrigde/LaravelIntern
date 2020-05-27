<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function _construct()
    {
      $this->middleware('auth');
    }

    public function create()
    {
    return view('post.create');
    }
    public function store(){
      $data = request()->validate([
        'title' => 'required',
        'des' => 'required',
      ]);


      

      auth()->user()->posts()->create([
        'title' => $data['title'],
        'des' => $data['des'],

      ]);

      return redirect('/profile/' . auth()->user()->id);

    }
    public function show(\App\Post $post)
    {
      return view('post.show',[
        'post' => $post,
      ]);
    }
}
