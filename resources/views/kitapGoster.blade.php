
<h1>{{ $Kitap->kitapAdi }}</h1>

<p><b>Kitaqp Adı:</b> {{ $Kitap->kitapAdi }}</p>

<p><b>Yazarı:</b> {{ $Kitap->kitapYazari }}</p>

<p><b>Yayın Yılı:</b> {{ $Kitap->yayinYili }}</p>

<p><b>Özet:</b> </p>
{{ $Kitap->ozeti }}

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>