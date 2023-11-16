<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class TestEloquentController extends Controller
{
    public function onetoone()
    {
        // dd('hai');
        //get users form Model
        $users = User::find(1);
        dd($users->phonee->phone);
        // foreach ($users as $user) {
        //     # code...
        //     dd($user->phone->phone);
        // }
        //passing user to view
        // return view('users', compact('users'));
    }

    public function onetomany(){
        $post = Post::find(1);
        dd($post->comments[0]);
    }
}
