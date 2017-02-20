@extends('layouts.master')

@section('content')

	<h1>Sign in</h1>

	<div class="col-sm-8 blog-main">

		<hr/>

		<form method="POST" action="/login">

		  {{ csrf_field() }}

		  <div class="form-group">
		    <label for="name">Email</label>
		    <input type="email" class="form-control" id="email" name="email" required>
		  </div>

		  <div class="form-group">
		    <label for="password">Password</label>
		    <input id="password" name="password" class="form-control" required></input>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-primary">Sign in</button>
		  </div>

		  @include ('layouts.errors')

		</form>
	</div>

@endsection