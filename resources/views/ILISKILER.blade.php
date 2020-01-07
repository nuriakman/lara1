<h1>ORM İLİŞKİLERİ</h1>

@if( !empty($SONUC) )


	<h1>ASIL:</h1>
	{{ $SONUC->id }},  {{ $SONUC->adisoyadi }} <br>


	<h1>TEK:</h1>
	{{ $SONUC->tekDetay->telefonu }},
	{{ $SONUC->tekDetay->adresi }},
	{{ $SONUC->tekDetay->postakodu }}	 <br>

	<h1>COK:</h1>
	@foreach($SONUC->cokDetay as $cokDetay )

		{{ $cokDetay->satisTarihi }},
		{{ $cokDetay->satilanUrunAdi }}<br>

	@endforeach


@endif

<p>
	<a href='#'>Ana Sayfaya Dön</a>
</p>
