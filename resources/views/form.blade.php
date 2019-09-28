<form action="{{ route('post.form',[], false) }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="name">
	<a href="{{ route('user', [
	'id' => 1,
	'username' => 'Long'
	], false)}}">user</a>
	<a href="/user/1"></a>
	<a href="{{ route('admin.users.home') }}">user list</a>
	<button type="submit">submit</button>
</form>