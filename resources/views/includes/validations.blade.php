
@if( session()->has('success') )
	<h3 style="color: green;">{{ session()->get('success') }}</h3>
@endif


@if( $errors->any() )
	<ul style="color: red;">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif

