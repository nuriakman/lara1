<h1>Yeni Kitap Ekle</h1>

<form method='POST' action="./kitapKaydet">
	@csrf
	<input type="text" name="kitapAdi"    placeholder="Kitap Adı"><br>
	<input type="text" name="kitapYazari" placeholder="Kitap Yazarı"><br>
	<input type="text" name="yayinYili"   placeholder="yayın Yılı"><br>
	<input type="text" name="ozeti"       placeholder="Kitap Özeti"><br>
	<input type="submit" value="Kaydet">
</form>

