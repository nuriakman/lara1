<h1>Yazar Bilgileri</h1>

@include("includes.validations")

<h2 style="color:red;">{{ $Yazar->yazarAdi }}</h2>

<form method="POST" action="{{ route('yazarUpdate', $Yazar->id) }}" autocomplete="off">
	@csrf
	<input type="text" name="yazarAdi"    value="{{ old('yazarAdi',    $Yazar->yazarAdi)    }}" placeholder="Yazar Adı"><br>
	<input type="text" name="yazarEposta" value="{{ old('yazarEposta', $Yazar->yazarEposta) }}" placeholder="Yazar ePosta"><br>
	<b>Bu kaydı silmek için SİL yazınız:</b> <input type="text" name="silonay" value=""><br>

	<input type="submit" value="Kaydet">
</form>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>