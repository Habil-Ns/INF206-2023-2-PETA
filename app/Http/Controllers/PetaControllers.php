<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaControllers extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function peta(){
        return view('peta');
    }
}
