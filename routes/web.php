<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('hello');
});
Route::get('/test1', function () {
	return view('');
});
Route::redirect('/form1','/form');//chuyển hướng từ form1 -> form
// Route::get('/form', function(){
// 	return view('form');
// });
Route::view('/form','form');//view form vào uri /form ko cần hàm trả về
Route::post('/form',function(){
	echo "vao form";
})->name('post.form');//đặt tên ứng với cả uri 
Route::get('user/{id}/{username}/', function($id = null) {
	if ($id == null) {
		return 'list users';
	}else{
		return 'User ' . $id;
	}
})->name('user');
Route::get('post/{id}/comment/{comment?}', function($id = null, $idComment = null) {
    return "Post $id with comment $idComment";
});
Route::group([
	'prefix' => 'admin',
	'name'   => 'admin.'
], function(){
	Route::prefix('users')->name('users.')->group(function(){
		Route::get('/',function(){
		echo "users home";
		})->name('home');
		Route::get('/list',function(){
		echo "list";
		})->name('list');
		Route::get('/friends',function(){
		echo "friends";
		})->name('friends');
	});
	Route::prefix('lession')->group(function(){//nhóm cái thuộc tính có đường dẫn chung là lession
		Route::prefix('video')->group(function(){
			Route::get('',function(){
				echo "video";
			});
			Route::get('/3',function(){
				echo "3";
			});
		});
		Route::get('/edit',function(){
			echo "edit";
		});
		Route::get('/test',function(){
			echo "test";
		});
		Route::get('1',function(){
			echo "1";
		});
	});
});

// bai 1
Route::prefix('admin')->group(function(){
	Route::prefix('/category')->group(function(){
		Route::get('',function(){
			echo "category";
		});
		Route::prefix('/13')->group(function(){
			Route::get('/',function(){
				echo "13";
			});
			Route::prefix('/post')->group(function(){
				Route::get('',function(){
					echo "post";
				});
				Route::get('/45',function(){
					echo "45";
				});
			});
		});
	});
	Route::prefix('/post')->group(function(){
		Route::get('',function(){
			echo "post";
		});
		Route::get('/22',function(){
			echo "22";
		});
		Route::prefix('/edit')->group(function(){
			Route::get('',function(){
				echo "edit";
			});
			Route::get('/3',function(){
				echo "3";
			});
		});
	});
});
///////////////////////////////////
Route::get('/test2',function(){
	$name = 'Nguyễn Long khánh';
	// return view('greeting',
	// 	[
	// 		'name' => 'Nguyễn Khánh Long',
	// 		'age' => '16'
	// ]);
		$data = [
			'name' => $name,
			'age' => '15'
		];
	return view('greeting')->with($data);
});
Route::get('/setting',function(){
	return view('admin.setting');
});
Route::get('/child',function(){
	return view('child');
});

// Route::resource('todo','TodoController');
// Route::get('/todo',function(){
// 	$list = ['html','php','laravel'];
// 	return view('todo')->with('list', $list);
// 	// ->with('list' => $list); truyền theo mảng
// });
Route::get('/add',function(){
	return view('add');
})->name('todo.add');
////////////////////////////////////
Route::prefix('home')->group(function(){
	Route::get('/','HomeController@index');
	Route::get('/{page?}','HomeController@page');
});

// Route::get('/admin/setting','Admin\SettingController@index');
// Route::get('/admin/show/{id?}','Admin\SettingController@show');
// Route::get('/admin/user','Admin\UserController@index');

Route::prefix('/admin')->namespace('Admin')->group(function(){
	Route::get('setting','SettingController@index');
	Route::get('show/{id?}','SettingController@show');
	Route::get('user','UserController@index');
});

// Route::group([
// 	'prefix' => 'admin',
// 	'namespace' => 'Admin'
// ],function(){
// 	Route::get('setting','SettingController@index');
// 	Route::get('show/{id?}','SettingController@show');
// 	Route::get('user','UserController@index');
// });

Route::resource('todos', 'TodoController');

Route::resource('users', 'UserController');