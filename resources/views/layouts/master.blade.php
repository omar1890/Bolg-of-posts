
<!doctype html>
<html lang="en">
  <head>
    <title>My Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
 
  </head>
  <body>


       @include('layouts.navbar')
    

      <div class="blog-header">
	      <div class="container">
	        <h1 class="blog-title">Omar's Blog</h1>
	        </div>
      </div>
      

    <div class="container">

      <div class="row">

       @yield('content')
         
    
       </div>

     </div>       


     @include('layouts.footer');  

     </body>
     </html>