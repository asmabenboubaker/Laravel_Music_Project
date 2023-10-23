@extends('template')

@section('content')
<body>
    <main id="songs-one">


        
        <div class="cursor scale"></div>
        <div class="cursor-two scale"></div>

       
        <div id="preloader">
            <div class="p">
                <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" alt="headphone">
                <img src="{{ asset('images/' . $blog->image) }}" alt="Blog Image">



            </div>
            <div class="p">Use Headphone For Better Experience.</div>
        </div>

<!-- CONTENT -->
        <div id="songs-one-content">



   <!-- NAVIGATION -->
   <div class="navigation">
    <div class="logo hover ">
       <a href="index-two.html" class="text">ARLO BROWN</a>
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
   Events
    </div>
</div>

<!-- HEADING -->




<!-- SONGS CONTAINER -->


<div class="center">
<div id="songs-container">



    <!-- SONG -->
<div class="song fade-up">

    <div class="song-img">
        <img src="{{Vite::asset('resources/assets/images/album-thumbnail-one.jpg')}}" alt="song">
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">Blinding Lights</div>
        <div class="artist-name">Arlo Brown Ft. Sza</div>
        </div>
        <div class="music-player">
         
            <div class="play-song mouse">
                <img src="{{Vite::asset('resources/assets/images/play.png')}}" alt="play" data-song="blindinglights">
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="blindinglights">
                    <source src="music/The-Weeknd-Blinding-Lights-_Lyrics_.ogg" type="audio/ogg">
                    <source src="music/The%20Weeknd%20-%20Blinding%20Lights%20(Lyrics).html" type="audio/mp3">
                    </audio> 
            </div>
            <div class="download-song mouse">
                <a href="music/The%20Weeknd%20-%20Blinding%20Lights%20(Lyrics).html"  download="Blinding Lights - Arlo Brown">4.1K<img src="{{Vite::asset('resources/assets/images/download.png')}}" alt="download"></a>
            </div>
        </div>
    </div>
</div>
    <!-- SONG -->




        <!-- SONG -->
<div class="song fade-up">
    <div class="song-img">
        <img src="{{Vite::asset('resources/assets/images/album-thumbnail-two.jpg')}}" alt="song">
    </div>
    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">KillMonger</div>
        <div class="artist-name">Arlo Brown Ft. Madhw</div>
        </div>
        <div class="music-player"> 
            <div class="play-song mouse">
                <!-- DATA-SONG AND DATA-AUDIO SHOULD EXACTLY BE SAME -->
                <img src="{{Vite::asset('resources/assets/images/play.png')}}" alt="play" data-song="killmonger">
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="killmonger">
                    <source src="{{Vite::asset('resources/assets/music/killmonger.ogg')}}" type="audio/ogg">
                    <source src="{{Vite::asset('resources/assets/music/killmonger.html')}}" type="audio/mp3">
                    </audio> 
            </div>
            <div class="download-song">
                <a href="{{Vite::asset('resources/assets/music/killmonger.html')}}"  download="KillMonger - Arlo Brown">10.2K<img src="{{Vite::asset('resources/assets/images/download.png')}}" alt="download"></a>
            </div>
        </div>
    </div>
</div>


<div class="song fade-up">
    <div class="song-img">
        <img src="{{Vite::asset('resources/assets/images/album-thumbnail-two.jpg')}}" alt="song">
    </div>
    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">KillMonger</div>
        <div class="artist-name">Arlo Brown Ft. Madhw</div>
        </div>
        <div class="music-player"> 
            <div class="play-song mouse">
                <!-- DATA-SONG AND DATA-AUDIO SHOULD EXACTLY BE SAME -->
                <img src="{{Vite::asset('resources/assets/images/play.png')}}" alt="play" data-song="killmonger">
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="killmonger">
                    <source src="{{Vite::asset('resources/assets/music/killmonger.ogg')}}" type="audio/ogg">
                    <source src="{{Vite::asset('resources/assets/music/killmonger.html')}}" type="audio/mp3">
                    </audio> 
            </div>
            <div class="download-song">
                <a href="{{Vite::asset('resources/assets/music/killmonger.html')}}"  download="KillMonger - Arlo Brown">10.2K<img src="{{Vite::asset('resources/assets/images/download.png')}}" alt="download"></a>
            </div>
        </div>
    </div>
</div>




<div class="song fade-up">
    <div class="song-img">
        <img src="{{Vite::asset('resources/assets/images/album-thumbnail-two.jpg')}}" alt="song">
    </div>
    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">KillMonger</div>
        <div class="artist-name">Arlo Brown Ft. Madhw</div>
        </div>
        <div class="music-player"> 
            <div class="play-song mouse">
                <!-- DATA-SONG AND DATA-AUDIO SHOULD EXACTLY BE SAME -->
                <img src="{{Vite::asset('resources/assets/images/play.png')}}" alt="play" data-song="killmonger">
                <!--   DATA-SONG AND DATA-AUDIO VALUE SHOULD MATCH   -->
                <audio data-audio="killmonger">
                    <source src="{{Vite::asset('resources/assets/music/killmonger.ogg')}}" type="audio/ogg">
                    <source src="{{Vite::asset('resources/assets/music/killmonger.html')}}" type="audio/mp3">
                    </audio> 
            </div>
            <div class="download-song">
                <a href="{{Vite::asset('resources/assets/music/killmonger.html')}}"  download="KillMonger - Arlo Brown">10.2K<img src="{{Vite::asset('resources/assets/images/download.png')}}" alt="download"></a>
            </div>
        </div>
    </div>
</div>
    <!-- SONG -->


 
    <!-- SONG -->

 



        <!-- SONG -->
 





</div>
</div>

<!-- SONGS CONTAINER -->



 <!-- HEADPHONE IMG -->
 <div class="headphone img text">
    <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
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
            <li><a href="index-one.html" data-text="Home" data-img="images/bg-image-three.jpg">Home</a></li>
            <li><a href="about-one.html"  data-text="About"  data-img="images/about-img.jpg">About</a></li>
            <li><a href="songs-one.html" data-text="Songs"  data-img="images/album-thumbnail-nine.jpg">Songs</a></li>
            <li><a href="blog-one.html"  data-text="Blogs" data-img="images/main-bg-three.jpg">Blogs</a></li>
            <li><a href="contact-one.html"  data-text="Contact" data-img="images/album-thumbnail-four.jpg">Contact</a></li>
        </ul>
        <div class="navigation-close hover about-close opacity">
            <div class="navigation-close-line"></div>
            <div class="navigation-close-line"></div>
          </div>
    
            <div class="project-preview"></div>
    
            
     <!-- HEADPHONE IMG -->
     <div class="headphone-navigation opacity">
        <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
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