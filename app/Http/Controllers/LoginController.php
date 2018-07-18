<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{



    public function create()
    {
       
       return view('Login.create');    	
    }

    public function store()
   {
    	if(!auth()->attempt( request( ['email' , 'password'] ) ) ){

    		return back();
    	}

    	return redirect('/');
    }

   public function destroy()
   {
     
      auth()->logout();

      return redirect('/');
   }
}
