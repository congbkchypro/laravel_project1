<form action="{{ route('postForm') }}" method="post">
	<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
	{{ csrf_field() }}
	<input type="text" name="name1">
	<input type="email" name="email">
	<input type="submit">
</form>