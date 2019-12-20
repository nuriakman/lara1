@extends('sablon.sayfa')

@section('SayfaTITLE')
	Yazar: {{ $Yazar->yazarAdi }}
@endsection


@section('SayfaCONTENT')


	@include("includes.validations")

	<h2>Yazar: {{ $Yazar->yazarAdi }}</h2>

	<form method="POST" action="{{ route('YAZAR.update', $Yazar->id) }}" autocomplete="off">
		@csrf
		@method('PUT')

		<table class="table table-dark col-md-6">
		    <tr>
		      <th>Yazar Adı</th>
		      <td><input type="text" name="yazarAdi"    value="{{ old('yazarAdi',    $Yazar->yazarAdi)    }}" placeholder="Yazar Adı"></td>
		    </tr>

		    <tr>
		      <th>Yazar ePosta</th>
		      <td><input type="text" name="yazarEposta" value="{{ old('yazarEposta', $Yazar->yazarEposta) }}" placeholder="Yazar ePosta"></td>
		    </tr>
		</table>

		<input class="btn btn-success" type="submit" value="Kaydet">

		
	</form>

@endsection

