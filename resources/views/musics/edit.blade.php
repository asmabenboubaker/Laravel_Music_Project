@extends('index')  


@section('content')
 
<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Basic Form</h6>


      
      <form action="{{ url('musicindex/' .$musics->id) }}" method="post">
        {!! csrf_field() !!}



        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$musics->id}}" id="id" />
        
        <div class="mb-3">

        <label>title</label></br>
        <input type="text" name="title" id="title" value="{{$musics->title}}" class="form-control"></br>
        </div>

        <div class="mb-3">

        <label>artist</label></br>
        <input type="text" name="artist" id="artist" value="{{$musics->artist}}" class="form-control"></br>
        </div>

        <div class="mb-3">

        <label>album</label></br>
        <input type="text" name="album" id="album" value="{{$musics->album}}" class="form-control"></br>
        </div>

        <div class="mb-3">

        <label>genre</label></br>
        <input type="text" name="genre" id="genre" value="{{$musics->genre}}" class="form-control"></br>
        </div>
        <div class="mb-3">

        <label>year</label></br>
        <input type="text" name="year" id="year" value="{{$musics->year}}" class="form-control"></br>
        </div>

        <div class="mb-3">

        <label>image</label></br>
        </div>

        
        <input type="text" name="image" id="image" value="{{$musics->image}}" class="form-control"></br>
        
        {{-- <label>audio</label></br>
        <input type="text" name="audio" id="audio" value="{{$musics->audio}}" class="form-control"></br>
         --}}


        
        
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
</div>
</div>

 
@stop