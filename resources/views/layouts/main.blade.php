@extends('index')

@section('title', 'Baru')
{{-- @section('title', __('messages.dashboard')) --}}
{{-- @section('nav-title', __('messages.main_page')) --}}

@section('css-plugins')
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('js-plugins')
@endsection

@section('container')        
    <!-- Carousel Start -->
    @include('pages.carousel')
    <!-- Carousel End -->
    
    <!-- Fact Start -->
    @include('pages.fact')
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

