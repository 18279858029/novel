<?php

namespace App\Http\Controllers\Admin\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    //登录
    public function create()
    {
    	return view('login.create');
    }
}
