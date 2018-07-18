<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // $guarded is the inverse of fillable
   protected  $guarded = [];
     
   public function comments()
   {
                    
   	return $this->hasMany(Comments::class);//gave the path of a speicific class
   }  
   

    public function user()
    {

    	return $this->belongsTo(User::class);
    }
}
