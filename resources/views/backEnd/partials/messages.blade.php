@if($errors->any())
	@foreach($errors->all() as $error)
		<h6 class="alert alert-danger">{{ $error }}</h6>
	@endforeach
@endif
@if(Session::has('success'))
	<h4 class="alert alert-success">{{ Session::get('success')}}</h4>
@endif
@if(Session::has('error'))
	<h4 class="alert alert-danger">{{ Session::get('error')}}</h4>
@endif