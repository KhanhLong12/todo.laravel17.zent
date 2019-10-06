@extends('user.master')
@section('content')
<div class="container">
    <a style="display: inline-block; width: 67px;" href="{{route('users.index')}}" class="btn btn-success">back</a>
	<form action="{{ route('users.store') }}" method="POST" class="" role="form">
            @csrf
            <div class="form-group">
                <legend>Add user</legend>
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Name</label>
                <input name="name" type="text" class="form-control" id="user" placeholder="Nhập tên">
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label class="control-label" for="user">Mật khẩu</label>
                <input type="password" class="form-control" name="password" placeholder="nhập mật khẩu">
            </div>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection