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
                <h1 class="text-white text-uppercase mt-1">{{$Detail->title}} </strong></h1>
                <p class="text-white">{{config('settings.siteName')}}</p>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li class="active">{{ $Detail->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container my-5 pt-4 pb-5">
    <div class="row">
        @foreach ($Service->where('category', $Detail->id) as $item)
            <div class="col-lg-4 mb-3">
                <a href="{{ route('servicedetail', $item->slug)}}">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <img src="{{ $item->getFirstMediaUrl('page','thumb') ? '/frontend/resimyok.jpg'  : $item->getFirstMediaUrl('page','thumb') }}" class="img-fluid" alt="{{ $item->title}} - {{ config('settings.siteTitle')}}">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner line-height-1 ">{{ $item->title}}</span>
                                <span class="thumb-info-type opacity-8">{{ config('settings.siteTitle')}}</span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col">
            {!! $Detail->desc !!}
        </div>
    </div>
</div>
@endsection
