@extends('template')

@section('content')
<body>
    <main id="songs-two">


        
        <div class="cursor scale"></div>
        <div class="cursor-two scale"></div>


        <div id="preloader">
            <div class="p">
                <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" alt="headphone">
            </div>
            <div class="p">Use Headphone For Better Experience.</div>
        </div>

<!-- CONTENT -->
        <div id="songs-two-content">



   <!-- NAVIGATION -->
   <div class="navigation">
    <div class="logo hover ">
       <a href="{{ url('/types/') }}" href="index-two.html" class="text">
        <i  class="gg-arrow-right"></i>
      </a>
    </div>

    <div class="menu-bar hover ">
        <div class="menu-bar-name text">
            Menu
        </div>
        <div class="menu-bar-lines text">
            <div class="menu-bar-line"></div>
            <div class="menu-bar-line"></div>
        </div>
    </div>
</div>
<!-- NAVIGATION -->






<!-- HEADING -->
<div class="heading">
    <div class="text">
      Ctegory : {{ $type->name }}
    </div>
</div>

<!-- HEADING -->




<!-- SONGS CONTAINER -->


<div class="center">
<div id="songs-container">





    

    
    
    

    
            <!-- SONG -->
            @foreach($musics as $item)

    <div class="song fade-up">
    
    
        <div class="song-img">
            <img src="{{Vite::asset('resources/assets/images/album-thumbnail-nine.jpg')}}" alt="song">
        </div>
    
        <div class="song-details">
            <div class="song-details-content">

                <div class="song-name">title :{{ $item->title }}</div>


                <div class="artist-name">artist : {{ $item->artist }}</div>
                <div class="artist-name">type : {{ $item->type->name }}</div>
                <div class="artist-name">album :{{ $item->album }}</div>



                				


                <td></td>


            </div>
         

            {{-- <div class="music-player">

                <div class="play-song mouse">

                    <img src="{{ Vite::asset('resources/assets/images/play.png') }}" alt="play" data-song="blindinglights">
                    <img src="{{ Vite::asset('resources/assets/images/pause.png') }}" alt="play" data-song="blindinglights">

                    <!-- DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH -->
                    <audio data-audio="blindinglights" >
                        <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                    </audio>
                </div>
                
                <div class="download-song">
                    <a href="{{ asset($item->audio) }}" download="mon music">{{ $item->size }} k
                        <img src="{{ Vite::asset('resources/assets/images/download.png') }}" alt="download">
                    </a>
                </div>
            </div> --}}

            <div class="music-player">
                <div class="play-song mouse">
                    <img class="play-image" src="{{ Vite::asset('resources/assets/images/play.png') }}" alt="play" data-song="blindinglights">
                   
                    <audio data-audio="blindinglights">
                        <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                    </audio>
                </div>
                
           
                <div class="download-song">
                    <a href="{{ asset($item->audio) }}" download="mon music">{{ rand(50, 300) }}  k
                        <img src="{{ Vite::asset('resources/assets/images/download.png') }}" alt="download">
                    </a>
                </div>
                
            </div>
            
            
        </div>
        
    </div>

    @endforeach

        <!-- SONG -->

        



</div>
</div>

<!-- SONGS CONTAINER -->



 <!-- HEADPHONE IMG -->
 <div class="headphone img text">
    <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" title="headphone zone" class="text" alt="headphone">
  </div>
   <!-- HEADPHONE IMG -->
  
               
   
 <!-- MUSIC INDICATOR -->
 <div class="music-indicator">
    <span style="--i:1;" class="music-indicator-span"></span>
    <span style="--i:2;" class="music-indicator-span "></span>
    <span style="--i:3;" class="music-indicator-span "></span>
    <span style="--i:4;" class="music-indicator-span "></span>
  </div>
   <!-- MUSIC INDICATOR -->
  
               


<!-- progress-bar -->
<div class="progress-bar-container fade-in">
    <div class="progressbar"></div>
</div>
<!-- progress-bar -->






        </div>
<!-- CONTENT -->


      
    <!-- NAVIGATION CONTENT -->

    <div class="navigation-content">
        <div class="navigation-logo hover opacity">
            <a href="#" class="text">ARLO BROWN</a>
         </div>
        <ul class="navigation-ul"> 
            <li><a href="index-two.html" data-text="Home" data-img="{{Vite::asset('resources/assets/images/bg-image-three.jpg')}}">Home</a></li>
            <li><a href="about-one.html"  data-text="About"  data-img="{{Vite::asset('resources/assets/images/about-img.jpg')}}">About</a></li>
            <li><a href="songs-one.html" data-text="Songs"  data-img="{{Vite::asset('resources/assets/images/album-thumbnail-nine.jpg')}}">Songs</a></li>
            <li><a href="blog-one.html"  data-text="Blogs" data-img="{{Vite::asset('resources/assets/images/main-bg-three.jpg')}}">Blogs</a></li>
            <li><a href="contact-one.html"  data-text="Contact" data-img="{{Vite::asset('resources/assets/images/album-thumbnail-four.jpg')}}">Contact</a></li>
        </ul>
        <div class="navigation-close hover about-close opacity">
            <div class="navigation-close-line"></div>
            <div class="navigation-close-line"></div>
          </div>
    
            <div class="project-preview"></div>
    
            
     <!-- HEADPHONE IMG -->
     <div class="headphone-navigation opacity">
        <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" title="headphone zone" class="text" alt="headphone">
      </div>
       <!-- HEADPHONE IMG -->
    
    
        <!-- SOCIAL MEDIA LINKS -->
        <div class="social-media-links-navigation">
            <ul>
                <li ><a href="#"  class="text hover opacity">YT</a></li>
                <li ><a href="#"  class="text hover opacity">FB</a></li>
                <li ><a href="#"  class="text hover opacity">IG</a></li>
            </ul>
        </div>
          <!-- SOCIAL MEDIA LINKS -->
    
    </div>
    
    <!-- NAVIGATION CONTENT -->
      






    </main>

    

 
</body>



@endsection


