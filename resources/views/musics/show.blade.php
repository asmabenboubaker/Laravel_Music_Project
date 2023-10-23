@extends('index')  


@section('content')
 
 
<div class="card">
  <div class="card-header">music Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">title : {{ $music->title }}</h5>
        <p class="card-text">artist : {{ $music->artist }}</p>
        <p class="card-text">album : {{ $music->album }}</p>
  </div>
  
       
    
  
  </div>
</div>


@stop