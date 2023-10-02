@extends('template')

@section('content')

<body>
    <!-- MAIN CONTENT -->
    <main id="index-one">


        
          <!-- CUSTOM CURSOR -->
          <div class="cursor scale"></div>
          <div class="cursor-two scale"></div>
          <!-- CUSTOM CURSOR -->

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="p">
                <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" alt="headphone">
                Use Headphone For Better Experience
            </div>
        </div>
        <!-- PRELOADER -->


<!-- HEADER -->
<div id="header">



    <!-- NAVIGATION -->
    <div class="navigation">
        <div class="logo hover ">
           <a href="#" class="text">ARLO BROWN</a>
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




    <!-- SOCIAL-MEDIA-LINKS -->
    <div class="social-media-links">
        <ul>
            <li ><a href="#" data-text="Youtube" class="text hover">YT</a></li>
            <li ><a href="#" data-text="Facebook" class="text hover">FB</a></li>
            <li ><a href="#" data-text="Instagram" class="text hover">IG</a></li>
        </ul>
    </div>
    <!-- SOCIAL-MEDIA-LINKS -->

    <!-- HEADPHONE IMG -->
    <div class="headphone img text">
        <img src="{{Vite::asset('resources/assets/images/headphone.png')}}"  class = "text" alt="headphone">
    </div>
    <!-- HEADPHONE IMG -->



    <!-- NEW RELEASE -->
<div class="new-release img text">


    <img src="{{Vite::asset('resources/assets/images/album-thumbnail-one.jpg')}}" alt="new-release">
<div class="song-details">
    <div class="song-name">Blinding Lights</div>
    <div class="singer-name">Arlo Brown Ft. Sza</div>
    <div class="music-player">
    <div class="play-song">
        <img src="{{Vite::asset('resources/assets/images/play.png')}}" alt="play" data-song="darkfire" class="hover" >
       
        <audio src="{{Vite::asset('resources/assets/music/The-Weeknd-Blinding-Lights-_Lyrics_.ogg')}}" data-audio="darkfire"></audio> <!--LINK AND NAME OF AUDIO YOU WANT TO PLAY-->
    </div>
    <div class="all-songs">
        <a href="songs-one.html" title="All Songs"><i class="gg-arrow-right"></i></a>
    </div>
    </div>
</div>

    
</div>
    <!-- NEW RELEASE -->


</div>
<!-- HEADER -->


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
    <!-- MAIN CONTENT -->
  

</body>

@endsection