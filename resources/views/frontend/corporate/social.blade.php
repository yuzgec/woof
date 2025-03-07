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
                <h1 class="text-white text-uppercase mt-1">Sosyal Sorumluluk</strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li class="active">Sosyal Sorumluluk</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- <section
    class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-10 mt-0"
    data-video-path="/dog/video.mp4"
    data-plugin-video-background=""
    data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}"
    style="z-index: 0;">
    <div
        class="vide-video-wrapper"
        style="position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
        <video
            autoplay=""
            loop=""
            muted=""
            playsinline=""
            style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 1; width: 1026px; height: auto; visibility: visible;">
            <source src="/dog/video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1>İzmir Köpek Oteli </strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="#">Anasayfa</a></li>
                    <li class="active">İletişim</li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}

<div class="container">

    <div class="row py-4" style="margin-bottom:150px;">
        <div class="col-md-12">
            <h2>Sosyal Sorumluluk</h2>
        </div>
    </div>
</div>

@endsection