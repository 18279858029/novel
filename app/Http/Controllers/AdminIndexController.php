<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use remember_token;
use Auth;
class AdminIndexController extends Controller
{
	 public function __construct()
    {
       if (!Auth::check()){
       	 return redirect('adminlogin');
       }
    }
	//首页
    public function home()
    {
    	return view('index.home');
    }
}
