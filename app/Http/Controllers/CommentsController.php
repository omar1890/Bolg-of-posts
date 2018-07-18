<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comments;

class CommentsController extends Controller
{
   
   public function addcomment(Post $post)
   {
 
      
      Comments::create([
          
           'body' => request('comment') ,
           'post_id' =>  $post->id ,
           'user_id' => auth()->user()->id
      ]);

      return back();

   }


}
