<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signinController extends Controller
{
    public function signin(){
        return view('signin');
    }
}
