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
                    BLOGS
                </span>
            </div>

            <!-- HEADING -->


            <!-- NAVIGATION -->
            <div class="navigation">
                <div class="logo hover ">
                    <a href="{{ url('/addBlog' )}}" class="text">Add blog</a>
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

                    @foreach($blog as $item)
                    <!-- BLOG -->
                    <div class="blog fade-up">
                        <div class="blog-img">

                            @if($item->image)
                            <img src="{{ asset('images/' . $item->image) }}" alt="Blog Image">
                            @else
                            <p>No image for this blog post.</p>
                            @endif
                            <!-- <img src="{{Vite::asset('resources/assets/images/album-thumbnail-five.jpg')}}" alt="blog-img"> -->
                        </div>
                        <div class="blog-text">
                            <div class="blog-heading">{{ $item->title }}</div>
                            <div class="blog-description">{{ $item->content }}</div>
                            <div class="blog-info">
                                <div class="blog-duration"><img src="{{Vite::asset('resources/assets/images/clock.png')}}" alt="clock">&nbsp; 4 Min </div>
                                <div class="blog-type">Story/Experience</div>
                                <a href="{{ url('/blog/' . $item->id) }}" title="Read More">
                                    <div class="blog-read-more">
                                        <i class="gg-arrow-right"></i>
                                    </div>
                                </a>
                                
                            </div>
                            <div class="social-media-share">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/blog/' . $item->id) }}" target="_blank" title="Share on Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/share?url={{ url('/blog/' . $item->id) }}" target="_blank" title="Share on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div><br>
                        </div>
                        
                        <div class="blog-date">3 Aug,20</div>
                       
                        <form method="POST" action="{{ url('/blog' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-dark mx-1" title="Delete Event" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                        </form> <br>
                        <a href="{{ url('/blog/' . $item->id . '/edit') }}" title="Edit event" class="btn btn-dark mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a></br>
                        <!-- Social Media Share Buttons -->
                         
                    </div>
                  
                </div>

                @endforeach
                <!-- BLOG -->


                <!-- BLOG -->

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
                <a href="#" class="text">Add blog</a>
            </div>
            <ul class="navigation-ul">
                <li><a href="index-two.html" data-text="Home" data-img="{{Vite::asset('resources/assets/images/bg-image-three.jpg')}}">Home</a></li>
                <li><a href="about-one.html" data-text="About" data-img="{{Vite::asset('resources/assets/images/about-img.jpg')}}">About</a></li>
                <li><a href="songs-one.html" data-text="Songs" data-img="{{Vite::asset('resources/assets/images/album-thumbnail-nine.jpg')}}">Songs</a></li>
                <li><a href="blog-one.html" data-text="Blogs" data-img="{{Vite::asset('resources/assets/images/main-bg-three.jpg')}}">Blogs</a></li>
                <li><a href="contact-one.html" data-text="Contact" data-img="{{Vite::asset('resources/assets/images/album-thumbnail-four.jpg')}}">Contact</a></li>
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
                    <li><a href="#" class="text hover opacity">YT</a></li>
                    <li><a href="#" class="text hover opacity">FB</a></li>
                    <li><a href="#" class="text hover opacity">IG</a></li>
                </ul>
            </div>
            <!-- SOCIAL MEDIA LINKS -->

        </div>

        <!-- NAVIGATION CONTENT -->





    </main>


</body>

@endsection