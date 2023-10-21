

@extends('index')  


@section('content')
 
{{-- <div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('musicindex') }}" method="post">
        {!! csrf_field() !!}

        <label>title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        
        <label>artist</label></br>
        <input type="text" name="artist" id="artist" class="form-control"></br>
       
       
        <label>album</label></br>
        <input type="text" name="album" id="album" class="form-control"></br>


        <label>genre</label></br>
        <input type="text" name="genre" id="genre" class="form-control"></br>
       
        <label>year</label></br>
        <input type="text" name="year" id="year" class="form-control"></br>
        
        <label>image</label></br>
        <input type="text" name="image" id="image" class="form-control"></br>
       
        <label>audio</label></br>
        <input type="text" name="audio" id="audio" class="form-control"></br>
        

        <label>duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        

        <label>size</label></br>
        <input type="text" name="size" id="size" class="form-control"></br>
        

        <label>lyrics</label></br>
        <input type="text" name="lyrics" id="lyrics" class="form-control"></br>
        




        <input type="submit" value="Save" class="btn btn-success"></br>


    </form>
   
  </div>
</div> --}}


{{-- **************************** --}}


<div class="col-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Basic Form</h6>


       
        <form action="{{ url('musicindex') }}" method="post">
            {!! csrf_field() !!}
            
            <div class="mb-3">
                <label>title</label></br>
                <input type="text" name="title" id="title" class="form-control"></br>
            </div>


            <div class="mb-3">
                <label>artist</label></br>
               <input type="text" name="artist" id="artist" class="form-control"></br> 
            </div>



        <div class="mb-3">
        <label>album</label></br>
        <input type="text" name="album" id="album" class="form-control"></br>
        </div>

        <div class="mb-3">
        <label>genre</label></br>
        <input type="text" name="genre" id="genre" class="form-control"></br>
        </div>

        <div class="mb-3">
        <label>year</label></br>
        <input type="text" name="year" id="year" class="form-control"></br>
        </div>

        
        <div class="mb-3">
        <label>image</label></br>
        <input type="text" name="image" id="image" class="form-control"></br>
        </div>
       
        <div class="mb-3">
        <label>audio</label></br>
        <input type="text" name="audio" id="audio" class="form-control"></br>
        </div>
        
        <div class="mb-3">
        <label>duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        </div>
        
        <div class="mb-3">
        <label>size</label></br>
        <input type="text" name="size" id="size" class="form-control"></br>
        </div>

        
        <div class="mb-3">
        <label>lyrics</label></br>
        <input type="text" name="lyrics" id="lyrics" class="form-control"></br>
        </div>



                <input type="submit" value="Save" class="btn btn-success"></br>




        </form>
    </div>
</div>










{{-- ****************************** --}}
 
@stop