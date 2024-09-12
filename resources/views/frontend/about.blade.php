@extends('frontend.layouts.app')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About us</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->
<div class="container">
    <div class="page-header page-header-big text-center" style="background-image: url('{{ asset('uploads/about') }}/{{ $abouts->image }}')">
        <h1 class="page-title text-white">About us<span class="text-white">{{ $abouts->title }}</span></h1>
    </div><!-- End .page-header -->
</div><!-- End .container -->

<div class="page-content pb-0">
    {!! $abouts->description !!}

</div><!-- End .page-content -->
@endsection
