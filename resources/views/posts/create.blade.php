@extends('layouts.master')

@section('content')

	<h1>Publish a post</h1>

	<div class="col-sm-8 blog-main">

		<hr/>

		<form method="POST" action="/posts">

		  {{ csrf_field() }}

		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" name="title" >
		  </div>

		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea id="body" name="body" class="form-control" ></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Publish</button>
		  </div>

		  <div class="form-group">
			<div class="danger alert-danger">

				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				
			</div>
		</div>

		</form>
	</div>

@endsection