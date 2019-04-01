<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\User;
use remember_token;
use DB;
use Auth;
class AdminusersController extends Controller
{
    public function __construct()
    {
        if (!Auth::check()){
         return redirect('adminlogin');
       }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('adminuser')->paginate(5);
        return view('adminuser.users',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加管理员
    public function create()
    {

        return view('adminuser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //验证规则
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ],[
            'name.required' => '名称不能为空！',
            'name.max' => '名称最长不能超过30个字符',
            'email.required' => '邮箱不能为空！',  
            'email.email' => '邮箱格式不正确！',
            'password.required' => '密码不能为空！',
            'password.min' => '密码最少为6位！',
            'password.confirmed' => '两次密码不一致！',

        ]);
        //添加数据库
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            ]);
        // var_dump($user->remember_token);exit;
        session()->flash('success','添加成功');
        return redirect()->route('admin.index',[$user]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::table('adminuser')->where('id',$id)->first();
        return view('adminuser.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ],[
            'name.required' => '名称不能为空！',
            'name.max' => '最大长度为50',
            'email.required' => '邮箱不能为空！',
            'email.email' => '邮箱格式不正确！',
            'password.required' => '密码不能为空！',
            'password.confirmed' => '两次密码不一致！',

        ]);
        $data = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        if ($request->password){
            $data['password'] = bcrypt($request->password);
        }
        if ($request->status == null){
            $data['status'] = 1;
        } elseif($request->status == 1){
            $data['status'] = null;
        }
        $update = DB::table('adminuser')->where('id',$id)->update($data);
        // echo "<pre>";
        // var_dump($update);exit;
        if ($update = 1){
           session()->flash('success','更新成功');
           return redirect()->route('admin.index');
        } else {
            session()->flash('danger','更新失败');
            return redirect()->back();
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = DB::table('adminuser')->where('id',$id)->delete();
        session()->flash('success','删除成功');
        return redirect()->back();
    }
}
