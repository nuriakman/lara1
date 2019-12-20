@extends('sablon.sayfa')

@section('SayfaTITLE', "Yazar/Liste")

@section('SayfaCONTENT')

	<h1>Yazarların Listesi</h1>

	@include("includes.validations")

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Yazar Adı</th>
			<th>Yazar ePosta</th>
			<th>Göster</th>
			<th>Düzenle</th>
			<th>Sil</th>
		</tr>
	@foreach($Yazarlar as $Yazar)
		<tr>
			<td>{{ $Yazar->id }}</td>
			<td>{{ $Yazar->yazarAdi }}</td>
			<td>{{ $Yazar->yazarEposta }}</td>
			<td><a class="btn btn-primary" href="{{ route('YAZAR.show', $Yazar->id) }}">Göster</a></td>
			<td><a class="btn btn-success" href="{{ route('YAZAR.edit', $Yazar->id) }}">Düzenle</a></td>
			<td>
				<form method="POST" action="{{ route('YAZAR.destroy', $Yazar->id) }}" autocomplete="off" style="display:inline;">
					@csrf
					@method('DELETE')
					<input class="btn btn-danger"  type="submit" value="Sil" style="background-color:red; color: white">
				</form>

			</td>
		</tr>
	@endforeach
	</table>

@endsection