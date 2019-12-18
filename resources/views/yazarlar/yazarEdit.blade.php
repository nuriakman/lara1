<h1>Yazar Bilgileri</h1>

<h2 style="color:red;">{{ $Yazar->yazarAdi }}</h2>

<form method="POST" action="{{ route('yazarUpdate', $Yazar->id) }}">
	@csrf
	<input type="text" name="yazarAdi"    value="{{ $Kitap->yazarAdi }}"    placeholder="Kitap Adı"><br>
	<input type="text" name="yazarEposta" value="{{ $Kitap->yazarEposta }}" placeholder="Kitap Yazarı"><br>
	<b>Bu kaydı silmek için SİL yazınız:</b> <input type="text" name="silonay" value=""><br>

	<input type="submit" value="Kaydet">
</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>