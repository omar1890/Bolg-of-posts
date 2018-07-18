@extends('layouts.master')


@section('content')

<div> 

	<h1>SignIn</h1>


	<form method="Post" action="/login">
	    
	     {{csrf_field()}}


	  <div class="form-group">
	  	  
	    <label for="email">Email:</label>
	
	    <input type="email" name="email" class="form-control" id="email" required>
	
	  </div>

	  <div class="form-group">
	  
	    <label for="password">Password:</label>
	  
	    <input type="password"  name="password" class="form-control" id="password" required ></input> 
	  
	  </div>
        
        

      	  <button type="submit" class="btn btn-Primary">Login</button>
	  
	     <br><br><br><br>
	    @include('layouts.errors')
	</form>

</div>
@endsection