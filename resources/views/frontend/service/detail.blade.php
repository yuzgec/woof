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
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li><a href="" title="{{ $Detail->getCategory->title}}">{{ $Detail->getCategory->title}}</a></li>
                    <li class="active">{{ $Detail->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin-bottom: 100px;">
    <div class="row pb-4">
        <div class="col-md-9 col-12 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4">{{ $Detail->title }}</h2>
         
                    {!!  $Detail->desc !!}
                </div>
            </div>
        </div>
        <div class="col-lg-3 position-relative">
            <aside class="sidebar">
                <div class="card border-1 bg-color-grey mb-2">
                    <div class="card-body">
                        <h4>HİZMETLERİMİZ</h4>

                        <ul class="list list-icons list-primary list-borders">
                            @php $i = 0; @endphp

                            @foreach ($Service->where('category', $Detail->getCategory->id) as $item)
                                    <li class="appear-animation animated fadeInUp appear-animation-visible" 
                                    data-appear-animation="fadeInUp" data-appear-animation-delay="{{ $i += 100}}" 
                                    style="animation-delay:{{ $i += 100}}ms;">
                                    <a href="{{ route('servicedetail', $item->slug)}}" title="İzmir Foça {{ $item->title}}" class="text-black text-2">
                                        <i class="fas fa-check"></i>
                                        {{ $item->title}}
                                    </a>    
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @include('frontend.layout.form')
            </aside>
        </div>
    </div>
</div>

<div class="owl-carousel-wrapper position-relative z-index-1">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 7}}, 'margin': 10, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 3000}">
        @foreach($Blog->where('service', $Detail->id)->where('category',1) as $item)
            <div class="py-3">
                <a href="{{route('servicearea', $item->slug)}}" title="{{$item->title}} - HBK Kepenk" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-body text-center px-2 py-3">
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-3 mb-3">{{ $item->title}}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
