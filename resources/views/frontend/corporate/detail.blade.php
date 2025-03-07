@extends('frontend.layout.app')
@section('content')

<section
    class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-7 mt-0"
    data-plugin-parallax=""
    data-plugin-options="{'speed': 1.2}"
    data-image-src="/parallax.jpg"
    style="position: relative; overflow: hidden;">
    <div
        class="parallax-background"
        style="background-image: url('/parallax.jpg	'); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 180%; transform: translate3d(0px, -50.3125px, 0px); background-position-x: 50%;"></div>    <div class="container">
        <div class="row pt-4">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-white text-uppercase mt-1">{{$Detay->title}} </strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li><a href="" title="{{ $Detay->getCategory->title}}">{{ $Detay->getCategory->title}}</a></li>
                    <li class="active">{{ $Detay->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container my-5 pt-4" style="z-index: 1000;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="content">
                        {!! $Detay->desc !!}
                    </div>

                    <div class="text-center mt-5 mb-5">
                        <a href="{{ route('home') }}">
                            <img src="/{{ config('settings.siteLogo')}}" alt="{{ config('settings.siteTitle')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
@section('customJS')
<script src="/frontend/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="/frontend/plugins/fancybox/fancybox-init.js"></script>
@endsection