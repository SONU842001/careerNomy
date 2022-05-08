<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegister(){
        return view('pages.userRegister');
    }
    public function userLogin(){
          return view('pages.userLogin');
    }
}
