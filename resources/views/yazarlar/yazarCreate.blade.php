<h1>Yazar Ekleme Formu</h1>

<form method='POST' action='{{ route("yazarStore") }}' autocomplete="off">
	@csrf
	<input type="text" name="yazarAdi"    placeholder="Yazar Adı"><br>
	<input type="text" name="yazarEposta" placeholder="Yazar Yazarı"><br>
	<input type="submit" value="Yazar Ekle">
</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>