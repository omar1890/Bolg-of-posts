@extends('layouts.master')


@section('content')



<form method="Post" action="/posts">
     {{csrf_field()}}
  

  <div class="form-group">
    <label for="title">Post Title:</label>
    <input type="text" name="title" class="form-control" id="title" >
  </div>

  <div class="form-group">
    <label for="body">Your Post :</label>
    <textarea type="text"  name="body" class="form-control" id="body"  ></textarea> 
    </div>
  

  <button type="submit" class="btn btn-Primary">Publish</button>
<br><br><br>

@include('layouts.errors')
</form>


@endsection
