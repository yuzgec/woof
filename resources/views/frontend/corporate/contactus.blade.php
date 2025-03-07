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
                <h1 class="text-white text-uppercase mt-1">İzmir Köpek Oteli </strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li class="active">İletişim</li>
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

    <div class="row py-4">
        <div class="col-lg-6">

            <h2 class="font-weight-bold text-8 mt-2 mb-0"  >İletişim</h2>
            <p class="mb-4">İlgili alanları doldurunuz. Sorularınızı bizimle paylaşınız!</p>

            <form class="contact-form" action="#" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="form-label mb-1 text-2">Adınız</label>
                        <input type="text" value="" data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="form-label mb-1 text-2">Email</label>
                        <input type="email" value="" data-msg-required="Lütfen email adresinizi giriniz." data-msg-email="Lütfen geçerli bir email adresi giriniz." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label mb-1 text-2">Konu</label>
                        <input type="text" value="" data-msg-required="Lütfen konuyu giriniz." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label mb-1 text-2">Mesajınız</label>
                        <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı giriniz." rows="8" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <input type="submit" value="Gönder" class="btn btn-primary btn-modern" data-loading-text="Gönderiliyor...">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-6">

            <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                <h4 class="mt-2 mb-1">Adresimiz</strong></h4>
                <ul class="list list-icons list-icons-style-2 mt-2">
                    <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Adres:</strong> İzmir, Türkiye</li>
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefon:</strong> (123) 456-789</li>
                    <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>
            </div>

          

            <h4 class="pt-5">İletişime <strong>Geçin</strong></h4>
            <p class="lead mb-0 text-4">İlgili alanları doldurunuz. Sorularınızı bizimle paylaşınız!</p>

        </div>

    </div>

</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35241.68415923069!2d26.910376361460212!3d38.67291990337417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbcdd617bdee15%3A0x842e8a73c9e1d65c!2sThe%20Woof%20Dog%20Resort%20K%C3%B6pek%20Oteli%20%26%20E%C4%9Fitim%20Merkezi!5e0!3m2!1str!2str!4v1741321408382!5m2!1str!2str" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection