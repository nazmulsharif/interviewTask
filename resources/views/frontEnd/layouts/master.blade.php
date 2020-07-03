<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Content Management System</title>
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('custom/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body>
	<div class="">
		<div class="header">
			<h2 class="text-center bg-secondary text-light py-2">Content Management System</h2>
		</div>
		<div class="container">
			@if(Route::is('content.show'))
				@yield('content')
			@else
				<div class="row mt-5">
					<div class="col-md-7">
						@yield('section-1')
					</div>
					<div class="col-md-2">
						<div class="line"></div>
					</div>
					<div class="col-md-3">
						@yield('section-2')
					</div>
				</div>
			@endif
		</div>
	</div>
	 <script src = "{{ asset('bootstrap/js/jquery-3.2.1.min.js') }}"></script>
	<script src = "{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5efea945947e598d"></script>
</body>
</html>