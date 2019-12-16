<h1>Kitap Düzenle: </h1>
<h2 style='color:red;'>{{ $Kitap->kitapAdi }}</h2>

<form method='POST' action='{{ route("DUZENLEMEYIKAYDET", $Kitap->id) }}'>
	@csrf
	<input type="text" name="kitapAdi"    value="{{ $Kitap->kitapAdi }}" placeholder="Kitap Adı"><br>
	<input type="text" name="kitapYazari" value="{{ $Kitap->kitapYazari }}" placeholder="Kitap Yazarı"><br>
	<input type="text" name="yayinYili"   value="{{ $Kitap->yayinYili }}" placeholder="yayın Yılı"><br>
	<input type="text" name="ozeti"       value="{{ $Kitap->ozeti }}" placeholder="Kitap Özeti"><br>
	<input type="submit" value="Kaydet">
</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>