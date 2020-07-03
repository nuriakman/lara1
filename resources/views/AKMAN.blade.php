<script src="js/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8" async defer></script>

<h1>Şehir / İlçe Seçimi </h1>

<script>
	function IlceleriGoster(id) {
		console.log(id);

		// Şehir seçilmemiş
		if(id == 0) {
		    var i;
		    for(i = IlceID.options.length - 1 ; i > 0 ; i--)
		    {
		        IlceID.remove(i);
		    }
		    return;
		}

//
// SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!
// SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!
// SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!
//

		// Şehir seçilmiş
		$.ajax({
			url: "{{ route('ajaxRequestPost') }}",
			type: 'POST',
			dataType: 'json',
			data: {
					"_token": "{{ csrf_token() }}",
					"sehirID": id
				  },
    
		    success: function (ajaxCevap) { 
		    	// console.log(ajaxCevap)

		        var select = $('#IlceID').empty();

		        $.each(ajaxCevap, function(i,item) {

		            select.append( '<option value="'
		                                 + item.id
		                                 + '">'
		                                 + item.ilce_adi
		                                 + '</option>' ); 
		        });

		    }

		});		

	}
</script>

<form method='POST' action='/kitapedit' autocomplete="off">
	@csrf

	<p>ŞEHİR: 
		<select name="SehirID" id="SehirID" onchange="IlceleriGoster(this.value)">
			<option value="0">** Seçiniz **</option>
			@foreach($Sehirler as $Sehir)
			<option value="{{ $Sehir->id }}">{{ $Sehir->sehir_adi }}</option>
			@endforeach
		</select>
	</p>

	<p>İLÇE: 
		<select name="IlceID" id="IlceID">
			<option value="0">** Seçiniz **</option>
			
			@if( !empty($Ilceler) )
				@foreach($Ilceler as $Ilce)
				<option value="{{ $Ilce->id }}">{{ $Ilce->ilce_adi }}</option>
				@endforeach
			@endif

		</select>
	</p>

	<input type="submit" value="Kaydet">
</form>

<p>
	<a href='../'>Ana Sayfaya Dön</a>
</p>

<h2>SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!</h2>