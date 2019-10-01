@extends('master') <!-- kế thừa -->
@section('content') <!-- thay thế vào  yield('content') -->
<div class="container">
    <a href="{{ route('todos.create') }}" class="btn btn-success">create</a>
    <div class="table-responsive">
        <table class="table table-hover">
            @php
                if (1>0) {
                    echo "Nguyễn Khánh Long";
                }
            @endphp
            <thead>
                @if(count($list) > 0)
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>content</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a style="display: inline-block; width: 67px;" href="" class="btn btn-warning">Edit</a>
                                <a style="display: inline-block; width: 67px;" href="" class="btn btn-info">show</a>
                                <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
                                    @csrf
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
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
