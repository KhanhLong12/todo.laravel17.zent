<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$list = \DB::table('todos')->get();
        // $list = Todo::get();
        $list = Todo::Latest()->get();
         // dd($list);
        // $list = ['php', 'laravel'];
        return view('todo.todo')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//$request lưu trữ toàn bộ dữ liệu bên client
    {
        // lấy tất cả dữ liệu:
        // $data = $request->all();
        // Nhận dữ liệu từ request:
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');
        // dd($status);

        //lưu dữ liệu vào đối tượng $todo
        $todo = new Todo();
        $todo->title = $title;
        $todo->content = $content;
        $todo->status = $status;
        $todo->user_id = rand(1,100);//random user_id từ 1-100
        $todo->save();
        //chuyển hướng về trang danh sách
        return redirect()->route('todos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Todo::find($id);
        return view('todo.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // dd($id);
        //lấy dữ liệu với $id:
         $item = Todo::find($id);
         // dd($item);
        return view('todo.edit')->with('item',$item);
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
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');
        // dump($title);
        // dump($content);
        // dump($status);
        // dd();
        // Tìm todo tương ứng với id
        $todo = Todo::find($id);
        // dd($todo);
        //Cập nhật dữ liệu mới
        $todo->title = $title;
        $todo->content = $content;
        $todo->status = $status;
        // Lưu dữ liệu
        $todo->save();
        //Chuyển hướng đến trang danh sách
        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::destroy($id);
        // dd($id);
        return redirect()->route('todos.index');
    }
}
