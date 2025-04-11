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
                <h1 class="text-white text-uppercase mt-1">Bilgilendirme </strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li class="active">Bilgilendirme</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row mb-1">
        <div class="col-md-12 text-center mb-4">
            <h2 class="text-uppercase font-weight-bold">THE WOOF DOG RESORT AİLESİNE HOŞ GELDİNİZ</h2>
            <p class="lead mt-3">TESİSİMİZE GELMEDEN ÖNCE DİKKAT ETMEMİZ GEREKEN KONULAR HAKKINDA BİLGİ VERMEK İSTERİZ.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card border-0 bg-primary-light rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center">
                            <div class="bg-primary text-white py-3 px-4 rounded-pill mb-3 mb-md-0">
                                <h3 class="font-weight-bold m-0 text-white">AŞI KARNESİ</h3>
                            </div>
                            <div class="icon-container mt-3 d-none d-md-block">
                                <i class="fas fa-passport fa-5x text-primary"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-circle mr-2  me-1 mt-1 text-primary"></i>
                                    <span>Bakanlık onaylı ve denetimli bir tesis olduğumuzdan</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-circle mr-2 me-1 mt-1 text-primary"></i>
                                    <span>Evladımızın aşıları tam ve aşı karnesi yanınızda olmalı.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <div class="card border-0 bg-pink-light rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center">
                            <div class="bg-pink text-white py-3 px-4 rounded-pill mb-3 mb-md-0">
                                <h3 class="font-weight-bold m-0 text-white">MAMA</h3>
                            </div>
                            <div class="icon-container mt-3 d-none d-md-block">
                                <i class="fas fa-bone fa-5x text-pink"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-circle mr-2 me-1 mt-1 text-pink"></i>
                                    <span>Kalacağı gün boyunca tüketeceği mamasını getirmeniz rica olunur.</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-circle mr-2 me-1 mt-1 text-pink"></i>
                                    <span>(Evladımızın evde yediği mama düzeni birebir devam ediliyor.)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <div class="card border-0 bg-green-light rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center">
                            <div class="bg-green text-white py-3 px-4 rounded-pill mb-3 mb-md-0">
                                <h3 class="font-weight-bold m-0 text-white">TASMA</h3>
                            </div>
                            <div class="icon-container mt-3 d-none d-md-block">
                                <i class="fas fa-tag fa-5x text-green"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-circle mr-2 me-1 mt-1 text-green"></i>
                                    <span> Evladımızın boynunda (Seresto / Paraband) medikal tasma olması gerekiyor.</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-circle mr-2 me-1 mt-1 text-green"></i>
                                    <span> Veterinerlerden Temin edebilirsiniz.</span>
                                </li>
                            </ul>
                            
                            <div class="bg-white p-3 mt-3 rounded-lg border-top border-danger border-3">
                                <h5 class="text-danger font-weight-bold">BİLGİLENDİRME:</h5>
                                <p class="mb-0">Bu tasma Ege bölgesinde yaygın bulunan Leishmania adlı hastalığın hem bulaşmasını hemde yayılmasını engelliyor. Bölgemizde yaşayan her evladımızın yaza girmeden bu tasmayı takması veteriner hekimlerce ve Bakanlıkça tavsiye olunup, bu tasma olmadan tesisimize evlatlarımızı kabul edemiyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('customCSS')
<style>
    .bg-primary-light {
        background-color: #e6f2ff;
    }
    .bg-pink-light {
        background-color: #ffe6ea;
    }
    .bg-green-light {
        background-color: #e6ffee;
    }
    .bg-pink {
        background-color: #ff9fb4;
    }
    .bg-green {
        background-color: #7cd992;
    }
    .text-pink {
        color: #ff6384;
    }
    .text-green {
        color: #4bc56b;
    }
    .border-3 {
        border-width: 3px !important;
    }
    .list-unstyled li {
        font-size: 1.1rem;
        line-height: 1.5;
    }
    .card {
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
</style>
@endsection

