@extends('template')

@section('content')

<body>
    <main id="contact-one">

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


        <div id="contact-one-content">

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
                    update Blog
                </div>
            </div>

            <!-- HEADING -->


            <div id="flex-row">

                <!-- CONTACT FORM -->

                <div id="contact-form">


                    <div id="form" class="opacity-contact">
                    <form action="{{ url('blog/' .$blog->id) }}" method="post"> 
                    {!! csrf_field() !!}
        @method("PATCH")
        <label>Nom</label></br>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}"></br>
        <label>Description</label></br>
        <textarea type="text" name="content" id="content" class="textarea"  > {{ old('content', $blog->content) }}</textarea>

        </br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>


                    </div>
                </div>

                <!-- CONTACT FORM -->



                <!-- ENQUIRY MAIL -->

                <div id="collaboration-mail" class="opacity-contact">

                    <div class="circular-text">
                        <span id="rotated"> FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; </span>
                    </div>
                    <div class="mail">
                        <a href="mailto:info@gmail.com">INFO@CONTACT.COM</a>
                    </div>
                </div>

                <!-- ENQUIRY MAIL -->

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
                <li><a href="index-one.html" data-text="Home" data-img="{{Vite::asset('resources/assets/images/bg-image-three.jpg')}}">Home</a></li>
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