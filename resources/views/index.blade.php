@extends('layouts.main')

@section('title', 'Baru')
{{-- @section('title', __('messages.dashboard')) --}}
{{-- @section('nav-title', __('messages.main_page')) --}}

@section('breadcrumb-item')
@endsection

@section('css-plugins')
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/') }}assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">
@endsection

@section('js-plugins')
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/wow/wow.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/easing/easing.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
@endsection


