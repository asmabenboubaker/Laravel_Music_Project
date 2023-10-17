<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
      
        
    @vite('resources/assets/js/pace.js') 
        @vite('resources/assets/js/jquery.min.js')
        @vite('resources/assets/js/bez.js')
        @vite('resources/assets/js/bez.js')
        @vite('resources/assets/js/index.js')
        
        @vite('resources/assets/css/index.css') 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
