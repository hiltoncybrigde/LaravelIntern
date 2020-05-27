<?php

namespace App\Http\Controllers;
use App\User
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($user)
  {
    $user = User::findOrFail($user);
      return view('profile.profile',[
        'user' => $user,
      ]);
  }

  public function edit(\App\User $user)
  {
  
    return view('profile.edit', compact('user'));
  }

  public function update(\App\User $user)
  {
    $data = request()->validate([
      'title' =>'',
      'des' => '',
      'url' => 'url',
    ]);


    $user->title = request('title');
        $user->des = request('des');
        $user->url = request('url');
        $user->save();



    return redirect("/profile/{$user ->id}");
  }
}
