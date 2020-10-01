<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function home(Request $req){
        return view('public/home');
    }

    public function add(Request $req){
        return view("public/add_post");
    }
}
