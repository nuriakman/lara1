
<h1>Satışını Yaptığımız Kitaplar:</h1>

<table border=1 cellpadding="5" cellspacing="0">
<tr>
	<td><b>Kitap Adı</b></td>
	<td>Yazarı</td>
	<td>Yayın Yılı</td>
</tr>

@foreach ($Kitaplar as $Kitap)
<tr>
	<td><b>{{ $Kitap->kitapAdi }}</b></td>
	<td>{{ $Kitap->kitapYazari }}</td>
	<td>{{ $Kitap->yayinYili }}</td>
</tr>

@endforeach

</table>