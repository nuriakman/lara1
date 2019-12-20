@extends('sablon.sayfa')

@section('SayfaTITLE')
	Yazar: {{ $Yazar->yazarAdi }}
@endsection


@section('SayfaCONTENT')


<div class="jumbotron">
  <h1 class="display-4">{{ $Yazar->yazarAdi }}</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">{{ $Yazar->yazarEposta }}</a>
</div>


@endsection