@extends('adminlte::master')

@section('body')


<!-- Page Preloder and Header -->
@include('partials/header')
<!-- End Page Preloder and Header -->


<!-- Page header -->
@include('partials/pageHeader')
<!-- Page header end -->


<!-- Google map -->
<div class="map" id="map-area"></div>


<!-- Contact section -->
@include('partials/contactForm')
<!-- Contact section end-->


<!-- Footer section -->
@include('partials/footer')
<!-- Footer section end -->


@stop