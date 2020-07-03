@extends('backEnd.layouts.master')
@section('content')
	<div class="container">
		<h2 class="text-center">Add new Content</h2>
		<div class="col-md-8 m-auto">
			@include('backEnd.partials.messages')
			<form action="{{ Route('content.store' )}}" method="post" enctype = "multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="">Content Type</label>
					<select name="type" id="" class="form-control">
						<option value="">----</option>
						<option value="1">Video</option>
						<option value="2">Post</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" class="form-control" name ="title">
				</div>
				<div class="form-group">
					<label for="">Image (For Post Content Only)</label>
					<input type="file" class="form-control" name ="image">
				</div>
				<div class="form-group">
					<label for="">Brief</label>
					<input type="text" class="form-control" name ="brief">
				</div>
				<div class="form-group">
					<label for="">Decription</label>
					<textarea name="desc" id="" cols="30" rows="5" class="form-control"></textarea>
				<div class="form-group">
					<label for="">Video Link (For Video Content Only)</label>
					<input type="text" class="form-control" name ="link">
				</div>
				<div class="form-group">
					<label for="">Position of New Content</label>
					<select name="position" id="" class="form-control">
						<option value="">----</option>
						<option value="1">Section 1</option>
						<option value="2">Section 2</option>
					</select>
				</div>
				<input type="submit" class="btn btn-success" value = "add content">
			</form>
		</div>
		
	</div>
@endsection