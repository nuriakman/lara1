<h1>Yeni Kitap Ekle</h1>

@include("includes.validations")

<form method='POST' action='{{ route("kitapStore") }}' autocomplete="off">
	@csrf
	<input type="text" name="kitapAdi"    placeholder="Kitap Adı"><br>
	<input type="text" name="kitapYazari" placeholder="Kitap Yazarı"><br>
	<input type="text" name="yayinYili"   placeholder="yayın Yılı"><br>
	<input type="text" name="ozeti"       placeholder="Kitap Özeti"><br>
	<input type="submit" value="Kitap Ekle">
</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>