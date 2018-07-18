<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected  $guarded = [];
     

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


   public function posts()
   {
                    
    return $this->hasMany(Post::class);//gave the path of a speicific class
   }  
   

   public function comments()
   {
                    
    return $this->hasMany(Comments::class);//gave the path of a speicific class
   }  
   
}
