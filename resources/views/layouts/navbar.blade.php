
 <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link" href="{{route('homepage')}}">Home</a>
         
         @if(!auth()->check())
          <a class="nav-link" href="{{route('register')}}">Register</a>
          
          <a class="nav-link" href="{{route('login')}}">Log In</a>
             
         @endif
             
        @if(auth()->check())  

          <a class="nav-link" href="{{route('CreatePost')}}">Create a Post</a>

          <a class="nav-link" href="#">MyPosts</a>

          <a class="nav-link ml-auto" href="#"><strong>{{auth()->user()->name}} </strong></a>
       
          <a class="nav-link" href="{{route('logout')}}">Log Out</a>

       @endif 
        </nav>
      </div>
    </div>
