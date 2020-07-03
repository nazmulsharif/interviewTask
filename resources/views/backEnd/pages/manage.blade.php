@extends('backEnd.layouts.master')
@section('content')
<div class="container">
	<div class="col-md-8 m-auto">
		<table class="table">
			<tr>
				<th>Sl</th>
				<th>Type</th>
				<th>Position</th>
				<th>View</th>
				<th>Action</th>
			</tr>
			@php
				$index=1
			@endphp
			@foreach($contents as $content)
			<tr>
				<td>{{ $index++ }}</td>
				<td>{{ $content->type==1? 'Video': 'Post' }}</td>
				<td>{{ $content->position==1? 'Section 1': 'Section 2' }}</td>
				<td>
					<a href=""data-toggle="modal" data-target="#view{{$content->id}}"><i class="fa fa-eye"></i></a>
					<!-- Modal -->
					<div class="modal fade" id="view{{$content->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">View content</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	
						        <table class="table">
						        	@if($content->type==1)
						        	<tr>
						        		<th>Title</th>
						        		<th>Description</th>
						        		<th>link</th>
						        	</tr>
						        	@foreach(App\Video::where('content_id',$content->id)->get() as $video)
						        	<tr>
						        		<td>{{ $video->title}}</td>
						        		<td><p class="">{{ $video->desc}}</p></td>
						        		<td><p style="font-size:10px;">{{ $video->link}}</p></td>
						        	</tr>
						        	@endforeach
						        	@endif
						        	@if($content->type==2)
						        	<tr>
						        		<th>Title</th>
						        		<th>Description</th>
						        		<th>Image</th>
						        	</tr>
						        	@foreach(App\Post::where('content_id',$content->id)->get() as $post)
						        	<tr>
						        		<td>{{ $post->title}}</td>
						        		<td>{{ $post->desc}}</td>
						        		<td>
						        			<img src="{{ asset('images/posts/'.$post->image)}}" alt="" width="80px" height="80px">
						        		</td>
						        	</tr>
						        	@endforeach
						        	@endif
						        </table>

						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  
						      </div>
						    </div>
						  </div>
						</div>
				</td>
				<td>

					@if($content->action == true)
							<a href="{{ route('content.update',$content->id) }}" class="btn btn-success">published</a>
					@else
							<a href="{{ route('content.update', $content->id) }}" class="btn btn-danger">unpublished</a>
					@endif
				</td>
				
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection