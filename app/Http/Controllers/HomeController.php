<?php

namespace App\Http\Controllers;

// use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // /**
    //  * Show the profile for the given user.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function show($id)
    // {
    //     return view('user.profile', ['user' => User::findOrFail($id)]);
    // }

    public function index() {
    	return view('home');
    }
}