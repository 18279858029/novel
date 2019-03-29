<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
	//添加管理员
    public function create()
    {
    	return view('adminuser.create');
    }

    //管理员列表
    public function index()
    {
    	return view('adminuser.users');
    }
}
