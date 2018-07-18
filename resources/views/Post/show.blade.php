@extends('layouts.master')

@section('content')
          <div>  
	            <p> <strong>Title :</strong> {{$post->title}}</p>
	     
	            
	            <p>{{$post->body}}</p>
             
               
                  <form method="Post" action="/posts/{{$post->id}}/comments">
                       {{csrf_field()}}
                    <div class="form-group">
                      
                      <input type="text" style="width: 230px; " name="comment" class="form-control" 
                      id="comment" placeholder="write your comment 
                      " required>
                     <br> 
                      <button type="submit" style="width: 150px; class="btn btn-Primary">Add a comment</button>


                    </div>

                   </form>

                     @if(count($post->comments))
                     <ul>
                      <hr> 
                          <h4>Comments:</h4> 
                        @foreach($post->comments as $comment)   
                          
                          
                           <div>
                              <li>
                                <strong> {{$comment->body}} </strong>                                         from <strong>{{$comment->user->name}}</strong>   
                              </li>
                           </div>
                        @endforeach
                    </ul>
                  @endif
           
            @include('layouts.errors')
         </div>

@endsection
