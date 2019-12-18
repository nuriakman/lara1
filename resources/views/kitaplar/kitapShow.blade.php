
<h1 style='color:red;'>{{ $Kitap->kitapAdi }}</h1>

<p><b>Kitap Adı:</b> {{ $Kitap->kitapAdi }}</p>

<p><b>Yazarı:</b> {{ $Kitap->kitapYazari }}</p>

<p><b>Yayın Yılı:</b> {{ $Kitap->yayinYili }}</p>

<p><b>Özet:</b> </p>
{{ $Kitap->ozeti }}

<p>
	<a href='{{ route("ANASAYFA") }}'>Ana Sayfaya Dön</a>
</p>