<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
    	return 'Setting admin';
    }
    public function show($id){
    	if ($id > 5) {
    		$result = 'lớn hơn 5';
    	}else {
    		$result = 'nhỏ hơn hoặc bằng 5';
    	}
    	return view('welcome')->with([
    		'result' => $result,
    		'id' => $id
    	]);
    	// ->with('result' , $result);//truyền 1 dữ liệu
    }
}
