<h1>Yazar Ekleme Formu</h1>

<form method="POST" action="{{ route('yazarStore') }}">
	@csrf
	<p>
		<b>Yazar Adı:</b> 
		<input type="text" name="yazarAdi" value="" placehoplder="Yazar Adı">
	</p>

	<p>
		<b>Yazar ePosta:</b> 
		<input type="text" name="yazarEposta" value="" placehoplder="Yazar Adı">
	</p>

	<p>
		<input type="submit" value="Yazar Ekle">
	</p>

</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>