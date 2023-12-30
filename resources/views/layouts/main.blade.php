<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title') | BikinDingin</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        {{-- @yield('meta') --}}

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        @yield('css-plugins')
        
        <!-- Customized Bootstrap Stylesheet -->
        
        <!-- Template Stylesheet -->
        <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('/') }}assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('/') }}assets/img/logo.ico" sizes="any">

    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        @include('partials.topbar')
        <!-- Topbar End -->

        <!-- Navbar Start -->
        @include('partials.navbar')
        <!-- Navbar End -->

        @yield('container')

        <!-- Footer Start -->
        @include('partials.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/') }}assets/lib/wow/wow.min.js"></script>
        <script src="{{ asset('/') }}assets/lib/easing/easing.min.js"></script>
        <script src="{{ asset('/') }}assets/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('/') }}assets/lib/owlcarousel/owl.carousel.min.js"></script>
        @yield('js-plugins')
    
        <!-- Template Javascript -->
        <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>