
 @if(count($errors) )
  <div class="form-group-danger">
        
        <div class="alert alert-danger">

		        <ul>
		         @foreach($errors->all() as $error)
			          <li>
			          	{{$error}}
			          </li>	
			     @endforeach  
		        </ul>
        </div>
  </div>
   
 @endif 