<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>BikinDingin - AC Solutions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('/') }}assets/lib/animate/animate.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">
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
        
        <!-- Carousel Start -->
        @include('partials.carousel')
        <!-- Carousel End -->
        
        <!-- Fact Start -->
        @include('partials.fact')
        <!-- Fact End -->
        
        <!-- About Start -->
        @include('partials.about')
        <!-- About End -->
        
        <!-- Services Start -->
        @include('partials.services')
        <!-- Services End -->
        
        <!-- Project Start -->
        @include('partials.project')
        <!-- Project End -->
        
        <!-- Blog Start -->
        {{-- @include('partials.blog') --}}
        <!-- Blog End -->
        
        <!-- Team Start -->
        {{-- @include('partials.team') --}}
        <!-- Team End -->
        
        <!-- Testimonial Start -->
        {{-- @include('partials.testimonial') --}}
        <!-- Testimonial End -->
        
        <!-- Contact Start -->
        @include('partials.contact')
        <!-- Contact End -->
        
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

        <!-- Template Javascript -->
        <script src="assets/js/main.js"></script>
    </body>
    
    </html>