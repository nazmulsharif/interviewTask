@extends('frontEnd.layouts.master')
@section('section-1')
	
	 <div class="section">
	 	<div class="row">
		 	@foreach($section1 as $s1)
				@if($s1->type ==1 )
						@foreach($s1->videos as $video)
							<div class="col-md-4">
								<div class="s1">
									<a href="{{ Route('content.show', $s1->id )}}">
										<div class="video">
											<div class="icon">
												<i class="fa fa-play"></i>
											</div>	
										</div>
									</a>
									<div class="heading">
										<h6>{{ $video->title}}</h6>
										<p>{{ $video->brief}}</p>
									</div>
								</div>
							</div>
						@endforeach
				@endif

				@if($s1->type ==2 )
					@foreach($s1->posts as $post)
						<div class="col-md-4">
							<div class="s1">
								<a href="{{ Route('content.show', $s1->id )}}">
									<div class="post">
										<img src="{{ asset('images/posts/'.$post->image) }}" alt="">
									</div>
								</a>
								<div class="heading">
									<h6>{{ $post->title}}</h6>
										<p>{{ $post->brief}}</p>
								</div>								
							</div>
						</div>
					@endforeach
				@endif
			@endforeach	
		</div>			
		
	
		
	</div> 
	
@endsection



@section('section-2')
	
	 <div class="section">
	 	<div class="row">
		 	@foreach($section2 as $s2)
				@if($s2->type ==1 )
						@foreach($s2->videos as $video)
							<div class="col-md-6">
								<div class="s2">
									<a href="{{ Route('content.show', $s2->id )}}">
										<div class="video">
											<div class="icon">
												<i class="fa fa-play"></i>
											</div>	
										</div>
									</a>
								
									<div class="heading">
										<h6>{{ $video->title}}</h6>
										<p>{{ $video->brief}}</p>
									</div>
								</div>
							</div>
		</div>
						@endforeach
				@endif

				
				@if($s2->type ==2 )
					@foreach($s2->posts as $post)
						<div class="col-md-6">
							<div class="s2">
								<a href="{{ Route('content.show', $s2->id )}}">
									<div class="post">
										<img src="{{ asset('images/posts/'.$post->image) }}" alt="">
									</div>
								</a>
								<div class="heading">
									<h6>{{ $post->title}}</h6>
										<p>{{ $post->brief}}</p>
								</div>								
							</div>
						</div>
					@endforeach
				@endif
			@endforeach	
		</div>			
		
		
		
	</div> 

	
 	<!-- <div class="section">
 				<div class="col-md-12">
 					<div class="s1">
 						<div class="video post">
 							<div class="icon"></div>	
 						</div>
 						<div class="heading">
 							<h6>Title</h6>
 							<p>brief</p>
 						</div>
 					</div>
 					
 				</div>
 				<div class="col-md-12">
 					<div class="row">
 						<div class="col-md-6">
 							<div class="s1">
 								<div class="videoshow">
 									
 								</div>
 								<div class="heading">
 									<h6>Title</h6>
 								</div>
 							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="s1">
 								<div class="videoshow">
 									
 								</div>
 								<div class="heading">
 									<h6>Title</h6>
 								</div>
 							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="s1">
 								<div class="videoshow">
 									
 								</div>
 								<div class="heading">
 									<h6>Title</h6>
 								</div>
 							</div>
 						</div>
 						<div class="col-md-6">
 							<div class="s1">
 								<div class="videoshow postshow">
 									
 								</div>
 								<div class="heading">
 									<h6>Title</h6>
 								</div>
 							</div>
 						</div>
 					
 				</div>
 			</div>
 			
 			
 		</div> -->
@endsection