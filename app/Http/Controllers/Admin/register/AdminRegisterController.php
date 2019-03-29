<?php

namespace App\Http\Controllers\Admin\register;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRegisterController extends Controller
{
    //注册
    public function create()
    {
    	return view('register.create');
    }
}
