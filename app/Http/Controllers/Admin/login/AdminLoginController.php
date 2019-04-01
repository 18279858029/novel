<?php

namespace App\Http\Controllers\Admin\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use remember_token;

class AdminLoginController extends Controller
{
	 public function __construct()
    {
       if (!Auth::check()){
       	 return redirect('adminlogin');
       }
    }
    //登录页面
    public function create()
    {
    	return view('login.create');
    }

    //登录逻辑
    public function login(Request $request)
    {
    	// echo "<pre>";
    	// var_dump($request);exit;
    		$this->validate($request,[
             'email' => 'required|email',
             'password' => 'required',
    		],[
    		 'email.required' => '请输入邮箱！',
    		 'email.email' => '邮箱格式不正确！',
    		 'password.required' => '请输入密码!',

    		]);
    		$email = $request->input('email');
    		$password = $request->input('password');
    	if (!Auth::attempt(['email'=>$email,'password'=>$password])) {
    		session()->flash('danger','登录失败！');
    		return back();
    	}
    	return redirect()->route('home');
    	
    }

    public function logout(Request $request)
    {
    	Auth::logout();
    	session()->flash('success','您已成功退出！');
    	return redirect('adminlogin');
    }
}
