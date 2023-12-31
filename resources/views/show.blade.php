@extends('template')

@section('content')

<head>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <main id="blog-single">


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


    <div id="blog-single-content">

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
          BLOG SINGLE
        </div>
      </div>

      <!-- HEADING -->

      <div class="center">


        <!-- BLOG IMG -->
        <div class="blog-img img">
          <img src="{{ asset('images/' . $blog->image) }}" alt="Blog Image">


        </div>
        <!-- BLOG IMG -->


        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->content }}</p>

        <!-- Comments section -->

        <!-- Header -->
        <!-- End Header -->

        <!-- Chat -->

        <div id="commentsList">
          @foreach($blog->comments as $comment)
          <div class="comment comment-container" data-comment-id="{{ $comment->id }}">
            <div class="comment-content">
              <div class="user-avatar">
                <!-- Include the user avatar here -->
               
                <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="User avatar">
              </div>
              <div class="comment-text">
                <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}</p>
              </div>
            </div>
            @if(Auth::check() && $comment->user_id == Auth::user()->id)
            <div class="comment-actions">
          
          
            <form method="POST" action="{{ url('/commentsDelete' . '/' . $comment->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="btn btn-dark mx-1" type="submit" class="btn btn-primary mx-1" title="Delete blog" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>

        </form>
             
            </div>
            @endif
          </div>
          @endforeach
        </div>



        <div class="comment-form">
          <h3>Add a Comment</h3>
          <form action="{{ route('comments.store', $blog->id) }}" method="post">
            @csrf
            <textarea name="content" required></textarea>
            <button type="submit">Add Comment</button>
          </form>
        </div>

        <div class="center-para">

          <!-- BLOG TEXT -->
          <div class="blog-text">


            <!-- BLOG INFO -->

            <div class="blog-info">
              <div class="blog-date text-scroll">August 3, 2020</div>
              <div class="blog-duration img-scroll text-scroll"><img src="{{Vite::asset('resources/assets/images/clock.png')}}" alt="clock">&nbsp; 4 Min </div>
            </div>

            <!-- BLOG INFO -->


            <!-- BLOG HEADING -->
            <div class="blog-heading text-scroll">
              New Album Release
            </div>

            <!-- BLOG HEADING -->


            <!-- PARAGRAPH -->
            <div class="para text-scroll">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque ipsa quo beatae placeat. Consequuntur quo ducimus mollitia voluptatem quos dolorum cum obcaecati nostrum, porro dignissimos consectetur aspernatur necessitatibus beatae odit?
            </div>
            <!-- PARAGRAPH -->


            <!-- PARAGRAPH -->
            <div class="para text-scroll">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime expedita ratione excepturi aspernatur! Doloribus dicta, sit autem est praesentium minima eos aperiam! Illo vel totam odio dicta accusantium cupiditate doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quam inventore laborum nulla voluptatibus possimus veniam expedita cupiditate hic facere id at quod officiis cum sint, aliquid quas corporis suscipit!
            </div>
            <!-- PARAGRAPH -->


            <!-- IMAGES -->
            <div class="blog-text-img">

              <div class="img-scroll">
                <img src="{{Vite::asset('resources/assets/images/album-thumbnail-four.jpg')}}" alt="img">
              </div>

              <div class="img-scroll">
                <img src="{{Vite::asset('resources/assets/images/album-thumbnail-five.jpg')}}" alt="img">
              </div>
            </div>
            <!-- IMAGES -->



            <!-- PARAGRAPH ITALIC-->
            <div class="para text-scroll italic ">
              <i>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda nisi, libero facere mollitia iure ex aspernatur corporis!"</i>
            </div>
            <!-- PARAGRAPH ITALIC -->


            <!-- PARAGRAPH -->
            <div class="para text-scroll">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime expedita ratione excepturi aspernatur! Doloribus dicta, sit autem est praesentium minima eos aperiam! Illo vel totam odio dicta accusantium cupiditate doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quam inventore laborum nulla voluptatibus possimus veniam expedita cupiditate hic facere id at quod officiis cum sint, aliquid quas corporis suscipit!
            </div>
            <!-- PARAGRAPH -->

            <!-- SHARE LINKS -->

            <div class="share-links para">
              <ul>
                <li class="text-scroll">Share:</li>
                <li><a href="#" class="text-scroll hover ">YT</a></li>
                <li><a href="#" class="text-scroll hover ">FB</a></li>
                <li><a href="#" class="text-scroll hover ">IG</a></li>
              </ul>
            </div>

            <!-- SHARE LINKS -->

            <div class="signature">
              <span class="text-scroll"> Arlo Brown.</span>
            </div>

          </div>

        </div>

        <!-- BLOG TEXT -->




      </div>








      <!-- HEADPHONE IMG -->
      <div class="headphone img text">
        <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
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
        <li><a href="index-one.html" data-text="Home" data-img="images/bg-image-three.jpg">Home</a></li>
        <li><a href="about-one.html" data-text="About" data-img="images/about-img.jpg">About</a></li>
        <li><a href="songs-one.html" data-text="Songs" data-img="images/album-thumbnail-nine.jpg">Songs</a></li>
        <li><a href="blog-one.html" data-text="Blogs" data-img="images/main-bg-three.jpg">Blogs</a></li>
        <li><a href="contact-one.html" data-text="Contact" data-img="images/album-thumbnail-four.jpg">Contact</a></li>
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
  <script>
    $(document).ready(function() {
      $('form').on('submit', function(e) {
        e.preventDefault(); // Prevents default form submission

        $.ajax({
          url: $(this).attr('action'),
          type: 'POST',
          data: $(this).serialize(),
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            // Append the new comment to the comments section
            let newComment = `<div id="commentsList">
          
          <div class="comment comment-container" data-comment-id="{{ $comment->id }}">
            <div class="comment-content">
              <div class="user-avatar">
                <!-- Include the user avatar here -->
               
                <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="User avatar">
              </div>
              <div class="comment-text">
                <p><strong>{{ $comment->user->name }}</strong>: ${response.comment.content}</p>
              </div>
            </div>
            @if(Auth::check() && $comment->user_id == Auth::user()->id)
            <div class="comment-actions">
          
          
            <form method="POST" action="{{ url('/commentsDelete' . '/' . $comment->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button class="btn btn-dark mx-1" type="submit" class="btn btn-primary mx-1" title="Delete blog" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>

        </form>
             
            </div>
            @endif
          </div>
          
        </div>`;
            $(newComment).appendTo('#commentsList');

            // Clear the textarea after submission
            $('textarea[name="content"]').val('');
          },
          error: function(error) {
            // Handle any errors here. For now, we'll just log them.
            console.error("There was an error adding the comment:", error);
          }
        });
      });

      // $.ajaxSetup({
      //   headers: {
      //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //   }
      // });
      //   // Delete Comment
      // $(document).on('click', '.deletecomment', function() {
        
      //   if (confirm('Are you sure you want to delete this comment?'))

      //   {
      //     // var thisClicked = document.getElementsByClassName('deletecomment');
      //     // console.log("thisClicked : ", thisClicked.val());

      //     var comment_id =$(this).attr("value");
      //     console.log("comment_id : ", comment_id);
          
      //     $.ajax({
      //       type: "POST",
      //       url: "/deletecommentroute",
      //       data: {
      //         'comment_id': $(this).attr("value")
      //       },
      //       headers: {
      //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //       },
      //       success: function(res) {
      //         if (res.status == 200) {
      //           thisClicked.closest('.comment-container').remove();
      //           alert(res.message);
      //           console.log("DATA : ", res);
      //         } else {
      //           alert(res.message);
      //           console.log("DATA : ", res);
      //         }
      //       }            
      //     });
          
      //   }
      // });
      
      //end delete
    });
  </script>




</body>

@endsection