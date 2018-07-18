
    <div class="col-sm-8 blog-main">
             
         @foreach($posts as $post)
            
            <div style="background-color: yellow; padding: 20px;  " class="blog-post">
              
              <a href="/posts/{{$post->id}}">
            
                  <h2 class="blog-post-title">{{$post->title}}</h2>
            
              </a>

              <p class="blog-post-meta">

                <strong>{{$post->user->name}}</strong> On {{$post->created_at}} 
              
              </p>
                
                <strong> 
                  <p>{{$post->body}}</p>
                 </strong>    
                 
                     
               </div><!-- /.blog-post -->
         @endforeach
             

      </div>   