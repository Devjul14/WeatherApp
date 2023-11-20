<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Role;
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
        $posts = Post::get();
        // dd($post->comments[0]);
        foreach ($posts as $post ) {
            dd($post->comments[1]->comment);
        }
    }

    public function manytomany(){
        $roles = Role::get();
// dd($roles);
        foreach ($roles as $role) {
            // dd($role->users[0]->name);
        }

        $users = User::get();
// dd($users);
        foreach ($users as $user) {
            dd($user->roles);
        }
    }
}
