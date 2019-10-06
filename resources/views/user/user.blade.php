@extends('user.master')
@section('content')
	<div class="container">
	    <a href="{{ route('users.create') }}" class="btn btn-success">create</a>
	    <div class="table-responsive">
	        <table class="table table-hover">
	            <thead>
	                @if(count($list) > 0)
	                <tr>
	                    <th>id</th>
	                    <th>name</th>
	                    <th>Email</th>
	                    <th>Created_at</th>
	                    <th>Updated_at</th>
	                    <th>Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                    @foreach($list as $item)
	                        <tr>
	                            <td>{{ $item->id }}</td>
	                            <td>{{ $item->name }}</td>
	                            <td>{{ $item->email }}</td>
	                            <td>{{ $item->created_at }}</td>
	                            <td>{{ $item->updated_at }}</td>
	                            <td>
	                                <a style="display: inline-block; width: 67px;" href="{{ route('users.edit',$item->id) }}" class="btn btn-warning">Edit</a>
	                                <a style="display: inline-block; width: 67px;" href="{{ route('users.show',$item->id) }}" class="btn btn-info">show</a>
	                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Delete</button>
	                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLongTitle" style="display: inline-block;">Announce</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										         <h4>Bạn chắc chắn muốn xóa?</h4>
										      </div>
										      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											        <form style="display: inline-block;" action="{{ route('users.destroy',$item->id) }}" method="post" accept-charset="utf-8">
					                                    @csrf
					                                    {{method_field('delete')}}
											        	<button type="submit" class="btn btn-primary">delete</button>
											        </form>
										      </div>
										    </div>
										  </div>
										</div>
	                            </td>
	                        </tr>
	                    @endforeach
	                @else
	                    <h1>khong co du lieu</h1>
	                @endif
	            </tbody>
	        </table>
	    </div>
	</div>
@endsection
