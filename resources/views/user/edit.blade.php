@extends('user.master')
@section('content')
	<div class="container">
        <a style="display: inline-block; width: 67px;" href="{{route('users.index')}}" class="btn btn-success">back</a>
        <form action="{{ route('users.update', $item->id) }}" method="POST" class="" role="form">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                {{--{{ method_field('PUT') }}--}}
                <div class="form-group">
                    <legend>Update user</legend>
                </div>
                <div class="form-group">
                    <label class="control-label" for="todo">Name:</label>
                    <input name="name" type="text" value="{{ $item->name }}" class="form-control" id="user" placeholder="Enter User">
                </div>
                <div class="form-group">
                    <label class="control-label" for="user">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $item->email }}" placeholder="Nhập email">
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
@endsection