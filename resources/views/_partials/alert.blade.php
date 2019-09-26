@if(session('success'))
	<div class="alert has-background-primary" role="alert">
		{{ session('success') }}
	</div>
@endif

@if(session('warning'))
	<div class="alert has-background-danger" role="alert">
		{{ session('warning') }}
	</div>
@endif


