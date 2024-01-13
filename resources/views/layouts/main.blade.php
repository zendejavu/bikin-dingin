@extends('index')

@section('title', 'Landing Page')

@section('css-plugins')
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/') }}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
@endsection

@section('js-plugins')
<script>
    let section = document.querySelectorAll('section');
    let lists = document.querySelectorAll('.nav-link');
    
    function activeLink(li) {
        lists.forEach((item) => item.classList.remove('active'));
        li.classList.add('active');
    }

    lists.forEach((item) => item.addEventListener('click', function(){
            activeLink(this);
        })
    );

    window.onscroll = () => {
        section.forEach(sec => {
            let top = window.scrollY;
            let offset = sec.offsetTop;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');

            if (top >= offset && top < offset + height) {
                const target = document.querySelector(`nav div.navbar-collapse div.navbar-nav a[href='#${id}']`).parentElement;
                activeLink(target);
            }
        })
    };
</script>
@endsection

@section('container')        
    <!-- Carousel Start -->
    @include('pages.carousel')
    <!-- Carousel End -->
    
    <!-- Fact Start -->
    {{-- @include('pages.fact') --}}
    <!-- Fact End -->

    <!-- About Start -->
    @include('pages.about')
    <!-- About End -->
    
    <!-- Services Start -->
    @include('pages.services')
    <!-- Services End -->
    
    <!-- Project Start -->
    {{-- @include('pages.project') --}}
    <!-- Project End -->
    
    <!-- Blog Start -->
    {{-- @include('pages.blog') --}}
    <!-- Blog End -->
    
    <!-- Team Start -->
    {{-- @include('pages.team') --}}
    <!-- Team End -->
    
    <!-- Testimonial Start -->
    {{-- @include('pages.testimonial') --}}
    <!-- Testimonial End -->
    
    <!-- Contact Start -->
    @include('pages.contact')
    <!-- Contact End -->
        
@endsection

