<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestEloquentController extends Controller
{
    public function index()
    {
        dd('hai');
        //get users form Model
        $users = User::latest()->get();

        //passing user to view
        return view('users', compact('users'));
    }
}
