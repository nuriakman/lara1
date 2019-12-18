<h1>Kitaplar Listesi</h1>

<table border=1 cellspacing=0 cellpadding=5>
	<tr>
		<td>ID</td>
		<td>Kitap Adı</td>
		<td>Yazarı</td>
		<td>Yayın Yılı</td>
		<td>Göster</td>
		<td>Düzenle</td>
	</tr>
@foreach ($Kitaplar as $Kitap)
	<tr>
		<td>{{ $Kitap->id }}</td>
		<td>{{ $Kitap->kitapAdi }}</td>
		<td>{{ $Kitap->kitapYazari }}</td>
		<td>{{ $Kitap->yayinYili }}</td>
		<td><a href="{{ route('kitapShow', $Kitap->id) }}">Göster</a></td>
		<td><a href="{{ route('kitapEdit', $Kitap->id) }}">Düzenle</a></td>
	</tr>
@endforeach
</table>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>