<form action="{{ action('ArticleController@store') }}" method="POST">
	{{ csrf_field() }}
	<input type="text" name="title" placeholder="Judul di sini">
	<br>
	<textarea name="content" placeholder="konten" rows="5" cols="17"></textarea>
	<button type="submit">Submit</button>
</form>