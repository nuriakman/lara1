@extends('sablon.sayfa')

@section('SayfaTITLE')
	Yazar: Ekle
@endsection


@section('SayfaCONTENT')


	<h1>Yazar Ekleme Formu</h1>

	@include("includes.validations")

	<form method='POST' action='{{ route("YAZAR.store") }}' autocomplete="off">
		@csrf

		<table class="table table-dark col-md-6">
		    <tr>
		      <th>Yazar Adı</th>
		      <td><input type="text" name="yazarAdi"    value="{{ old('yazarAdi')    }}" placeholder="Yazar Adı"></td>
		    </tr>

		    <tr>
		      <th>Yazar ePosta</th>
		      <td><input type="text" name="yazarEposta" value="{{ old('yazarEposta') }}" placeholder="Yazar ePosta"></td>
		    </tr>
		</table>

		<input class="btn btn-success" type="submit" value="Yazar Ekle">

	</form>



@endsection