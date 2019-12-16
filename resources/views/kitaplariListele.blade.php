
<h1>Satışını Yaptığımız Kitaplar:</h1>

<table border=1 cellpadding="5" cellspacing="0">
<tr>
	<td><b>Kitap Adı</b></td>
	<td>Yazarı</td>
	<td>Yayın Yılı</td>
	<td>Göster</td>
	<td>Düzenle</td>
</tr>

@foreach ($Kitaplar as $Kitap)
<tr>
	<td>{{ $Kitap->kitapAdi }}</td>
	<td>{{ $Kitap->kitapYazari }}</td>
	<td>{{ $Kitap->yayinYili }}</td>
	<td><a href="{{ route('GOSTER', $Kitap->id) }}">Göster</a></td>
	<td><a href="{{ route('DUZENLEMEFORMU', $Kitap->id) }}">Düzenle</a></td>
</tr>

@endforeach

</table>

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>