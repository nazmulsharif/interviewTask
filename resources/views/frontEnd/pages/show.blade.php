@extends('frontEnd.layouts.master')
@section('content')
<div class="col-md-9 m-auto text-center">
	@if(!is_null($video))
		@foreach($video as $video)
			<h2>{{ $video->title}}</h2>
			<iframe width="650" height="300" src="{{ $video->link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<p>{{ $video->brief}}</p>
			<p class="lead">{{ $video->desc}}</p>
		@endforeach
	@endif
	@if(!is_null($post))
		@foreach($post as $post)
			<h2>{{ $post->title}}</h2>
			<img src="{{ asset('images/posts/'.$post->image) }}" alt="" width="650px; height:250px">
			<p>{{ $post->brief}}</p>
			<p class="lead">{{ $post->desc}}</p>
		@endforeach
	@endif
	<span class="mt-4">Share With</span><div class="addthis_inline_share_toolbox"></div>
</div>

   <!-- Go to www.addthis.com/dashboard to customize your tools -->
    
            
@endsection