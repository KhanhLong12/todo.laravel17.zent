@extends('todo.master')
@section('content')
	<div class="container">
		<a style="display: inline-block; width: 67px;" href="{{route('todos.index')}}" class="btn btn-success">back</a>
		<h3>Tiêu đề</h3>
	    <div>{{$item->title}}</div>
	    <hr>
	    <h3>Nội dung</h3>
	    <div>
	        {{$item->content}}
	    </div>
	</div>
@endsection