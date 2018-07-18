<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

      
	public function index(){


		$posts = Post::latest()->get();

		return view('Post.index' ,compact('posts'));

	}
    

    public function show(Post $post){  //(Task $task)
   
          //return $task
     
    //		$post = $post->id;
      		return view('Post.show' ,compact('post'));
        
        

    }

	public function create(){

            
  		return view('Post.create');

	}
 
 
   public function store(){
       
       /* 
       $post = new \App\Post;  
       $post->owner = request('owner');
       $post->body = request('body');

       $post->save(); 
       */
       $this->validate( request(),
             [
            'title' => 'required' ,
             'body'  => 'required'
       	]);
  
       Post::create([
             'title' => request('title'),
             'body'  => request('body'),
             'user_id' => auth()->user()->id
        ]);
       
     return redirect('/');
   }



 }
