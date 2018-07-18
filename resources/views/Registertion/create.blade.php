@extends('layouts.master')


@section('content')

<div> 

	<h1>Register</h1>


	<form method="Post" action="/register">
	    
	     {{csrf_field()}}
	  
	  <div class="form-group">
	
	    <label for="name">Your name:</label>
	
	    <input type="name" name="name" class="form-control" id="name" required>
	
	  </div>

	  <div class="form-group">
	
	    <label for="email">Email:</label>
	
	    <input type="email" name="email" class="form-control" id="email" required>
	
	  </div>

	  <div class="form-group">
	  
	    <label for="password">Password:</label>
	  
	    <input type="password"  name="password" class="form-control" id="password" required ></input> 
	  
	  </div>
        
        <div class="form-group">
	  
	    <label for="password_confirmation">confirm Password:</label>
	  
	    <input type="password"  name="password_confirmation" class="form-control" id="password_confirmation" required ></input> 
	  
	  </div>
	  	  

	  <button type="submit" class="btn btn-Primary">Register</button>
	<br><br><br>

	@include('layouts.errors')
	</form>

</div>
@endsection