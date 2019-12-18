<h1>Yazarların Listesi</h1>

<table border=1 cellspacing=0 cellpadding=5>
	<tr>
		<th>ID</th>
		<th>Yazar Adı</th>
		<th>Yazar ePosta</th>
		<th>Göster</th>
		<th>Düzenle</th>
	</tr>
@foreach($Yazarlar as $Yazar)
	<tr>
		<td>{{ $Yazar->id }}</td>
		<td>{{ $Yazar->yazarAdi }}</td>
		<td>{{ $Yazar->yazarEposta }}</td>
		<td><a href="{{ route('yazarShow', $Yazar->id) }}">Göster</a></td>
		<td><a href="{{ route('yazarEdit', $Yazar->id) }}">Düzenle</a></td>
	</tr>
@endforeach
</table>

<p>
	<a href="{{ route('ANASAYFA') }}">Ana sayfaya dön...</a>
</p>