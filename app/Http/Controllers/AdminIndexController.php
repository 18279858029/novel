<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
	//首页
    public function home()
    {
    	return view('index.home');
    }
}
