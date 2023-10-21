@extends('template')

@section('content')

<body>


    <!-- MAIN CONTENT -->
    <main id="blog-one">

        <!-- CUSTOM CURSOR -->
        <div class="cursor scale"></div>
        <div class="cursor-two scale"></div>
        <!-- CUSTOM CURSOR -->


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="p">
                <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" alt="headphone">
            </div>
            <div class="p">Use Headphone For Better Experience.</div>
        </div>
        <!-- PRELOADER -->




        <div id="blog-one-content">

  
            <!-- HEADING -->

            <div class="heading">
               <span class="text"> 
                Category music
               </span> 
            </div>

            <!-- HEADING -->


            <!-- NAVIGATION -->
            <div class="navigation">
                <div class="logo hover ">
                   <a href="index-two.html" class="text">wiss</a>
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


<div class="center">

<!-- BLOG-CONTAINER -->

<div id="blogs-container">



    <!-- BLOG -->
    @foreach($types as $item)

    <div class="blog fade-up" style="height: 100px;width: 700px;">
        <div style="height: 90px;width: 650px;" class="blog-img">
            <img src="{{Vite::asset('resources/assets/images/album-thumbnail-five.jpg')}}" alt="blog-img">
        </div>
        <div  class="blog-text">
            <div  class="blog-heading">
                <a href="blog-single.html" title="Read More" >
                    <td>{{ $item->name }}</td>

                    {{-- <a  title="View types"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}

                    <div class="blog-read-more"  >
                        <a href="{{ url('/types/' . $item->id) }}" title="Read More" class="text">
                      

                         <i  class="gg-arrow-right"></i>
                        </a>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endforeach



    
  


</div>

<!-- BLOG-CONTAINER-->

</div>

   <!-- HEADPHONE IMG -->
    <div class="headphone img text"> 
     <img src="{{Vite::asset('resources/assets/images/headphone.png')}}" title="headphone zone" class="text" alt="headphone">
    </div>
   <!-- HEADPHONE IMG -->
  
   <!-- progress-bar -->
   <div class="progress-bar-container fade-in">
    <div class="progressbar"></div>
   </div>
<!-- progress-bar -->
        </div>



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