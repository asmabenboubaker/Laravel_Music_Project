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
<div id="header1">



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

 
    <!-- HEADPHONE IMG -->


  <!-- MAIN CONTENT -->
  
  <div class="chat" class="chatasma">

<!-- Header -->
<div class="top">
  <div class="d-flex">
    <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="Avatar">
    <div class="overflow-hidden ms-3">
      <a class="text-dark mb-0 h6 d-block text-truncate" href="/page-chat">
      {{ $userName }}
      </a>
      <small class="text-muted">
        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i> Online
      </small>
    </div>
  </div>
</div>
<!-- End Header -->

<!-- Chat -->
<div class="messages">
  @include('left', ['message' => "Hey! What's up!  👋"])
  @include('left', ['message' => "Ask a friend to open this link and you can chat with them!"])
</div>
<!-- End Chat -->

<!-- Footer -->
<div class="bottom">
  <form>
    <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off" style="opacity: 1.2 !important;">
    <button type="submit"></button>
  </form>
</div>
<!-- End Footer -->
<div id="app" data-pusher-key="{{ config('broadcasting.connections.pusher.key') }}"></div>

</div>
          <!-- SOCIAL MEDIA LINKS -->
    
    </div>
    
    <!-- NAVIGATION CONTENT -->
   
    <!-- NEW RELEASE -->


</div>
<!-- HEADER -->


    <!-- NAVIGATION CONTENT -->

    <div class="navigation-content">
        <div class="navigation-logo hover opacity">
            <a href="#" class="text">ARLO BROWN</a>
         </div>
        <ul class="navigation-ul">
        <li><a href="{{ route('home') }}" data-text="Home" data-img="images/bg-image-three.jpg">Home</a></li>

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
    
            
          

    </main>
  


</body>

<script>
  const pusherKey = document.getElementById('app').getAttribute('data-pusher-key');
console.log('Pusher Key:', pusherKey);
const pusher = new Pusher(pusherKey, { cluster: 'mt1' });
// ... the rest of your Pusher configuration code ...
 const channel = pusher.subscribe('public');

  // Receive messages
  channel.bind('chat', function (data) {
    $.post("/message", {
      _token: '{{csrf_token()}}',
      message: data.message,
    })
    .done(function (res) {
      console.log(res);
      $(".messages > .message").last().after(res);
      $(document).scrollTop($(document).height());
    });
  });

  // Send messages
  $("form").submit(function (event) {
    event.preventDefault();

    $.ajax({
      url: "/",
      method: 'POST',
      headers: {
        'X-Socket-Id': pusher.connection.socket_id
      },
      data: {
        _token: '{{csrf_token()}}',
        message: $("form #message").val(),
      }
    }).done(function (res) {
      $(".messages > .message").last().after(res);
      $("form #message").val('');
      $(document).scrollTop($(document).height());
    });
  });
</script>
@endsection