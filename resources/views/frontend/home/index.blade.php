@extends('frontend.layout.master')
@section('content')
    <!-- BANNER -->
    @include('frontend.home.components.banner')


    <!-- WHY CHOOSE US -->
    @include('frontend.home.components.why-choose-us')


    <!-- OFFER ITEM -->
    @include('frontend.home.components.offer-item')


    <!-- CART POPUT  -->
    @include('frontend.home.components.cart-popup')


    <!-- MENU ITEM -->
    @include('frontend.home.components.menu-item')


    <!-- ADD SLIER -->
    @include('frontend.home.components.add-slider')


    <!-- TEAM-->
    @include('frontend.home.components.team')


    <!-- DOWNLOAD APP -->
    @include('frontend.home.components.download-app')


    <!-- TESTIMONIAL -->
    @include('frontend.home.components.testimonial')


    <!-- COUNTER -->
    @include('frontend.home.components.counter')


    <!-- BLOG -->
    @include('frontend.home.components.blog')
@endsection
