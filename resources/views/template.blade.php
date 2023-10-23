<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
      
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/comment.css">
    @vite('resources/assets/js/pace.js') 
        @vite('resources/assets/js/jquery.min.js')
        @vite('resources/assets/js/bez.js')
        @vite('resources/assets/js/bez.js')
        @vite('resources/assets/js/index.js')
        
        @vite('resources/assets/css/index.css') 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header>
        
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
       
    </footer>
</body>
</html>
