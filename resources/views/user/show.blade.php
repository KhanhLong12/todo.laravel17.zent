@extends('user.master')
@section('content')
	<div class="container">
		<a style="display: inline-block; width: 67px;" href="{{route('users.index')}}" class="btn btn-success">back</a>
		<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">Name</th>
			      <th scope="col">email</th>
			      <th scope="col">created_at</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>{{$item->name}}</td>
			      <td>{{$item->email}}</td>
			      <td>{{$item->created_at}}</td>
			    </tr>
			  </tbody>
		</table>
	</div>
@endsection