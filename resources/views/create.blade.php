@extends('master')
@section('content')
	<div class="container">
    <form action="#" method="POST" class="" role="form">
        @csrf
        <div class="form-group">
            <legend>Add todo</legend>
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Todo:</label>
            <input name="todo" type="text" class="form-control" id="todo" placeholder="Enter todo">
        </div>
        <div class="form-group">
            <label class="control-label" for="todo">Mô tả:</label>
            <textarea name="todo" class="form-control"></textarea>
        </div>


        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<footer class="footer" style="background-color: #f7f7f7; height: 100px; padding-top: 30px">

    <!-- Copyright -->
    <div class="text-center">© 2019 Copyright:
        <a href="#"> Nguyen Cong Hoan</a>
    </div>
    <!-- Copyright -->
@endsection