<h1>Yazar Bilgileri</h1>

<h2 style="color:red;">{{ $Yazar->yazarAdi }}</h2>

<form method="POST" action="{{ route('yazarUpdate', $Yazar->id) }}">
	@csrf
	<p>
		<b>Yazar Adı:</b> 
		<input type="text" name="yazarAdi" value="{{ $Yazar->yazarAdi }}" placehoplder="Yazar Adı">
	</p>

	<p>
		<b>Yazar ePosta:</b> 
		<input type="text" name="yazarEposta" value="{{ $Yazar->yazarEposta }}" placehoplder="Yazar Adı">
	</p>

	<p>
		<input type="submit" value="Güncelle">
	</p>

</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>