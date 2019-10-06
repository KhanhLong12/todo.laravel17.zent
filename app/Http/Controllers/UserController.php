<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = User::latest()->get();
        return view('user.user')->with('list',$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nhận dữ liệu từ $request
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
        // dump($name);
        // dump($email);
        // dump($password);
        // dd();
        // lưu dữ liệu vào đối tượng user
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = md5($password);
        $user->save();
        // chuyển hướng về trang index
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = User::find($id);
        return view('user.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::find($id);
        return view('user.edit')->with('item',$item);
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
        // nhận dữ liệu từ $request
        $name = $request->get('name');
        $email = $request->get('email');
        //tìm todo tương ứng với $id
        $user = User::find($id);
        // cập nhật dữ liệu mới
        $user->name = $name;
        $user->email = $email;
        $user->save();
        // chuyển về trang index
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
