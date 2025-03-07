<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/{{ config('settings.siteFavIcon') }}" type="image/x-icon">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
    <style>
        .social-floating-buttons {
            position: fixed;
            right: 10px;
            bottom: 50px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 999;
        }
        
        .social-floating-buttons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #555;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-floating-buttons a i {
            font-size: 20px;
        }
        
        .social-floating-buttons a.phone:hover {
            background-color: #28a745;
            color: white;
            transform: translateY(-5px);
        }
        
        .social-floating-buttons a.instagram:hover {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            color: white;
            transform: translateY(-5px);
        }
        
        .social-floating-buttons a.whatsapp:hover {
            background-color: #25d366;
            color: white;
            transform: translateY(-5px);
        }
        
        /* Map Section Styles */
        .map-section {
            position: relative;
            z-index: 1;
            margin-bottom: 0;
        }
        
        .map-section iframe {
            display: block;
        }
    </style>
</head>

<body class="{{ Route::currentRouteName() == 'home' ? 'is-index' : '' }}">
  

    <div class="body">
    
        @include('frontend.layout.header')
        
        <div role="main" class="main">

            @yield('content')

        </div>

    </div>

    @if(Route::currentRouteName() == 'home')
    <!-- Google Maps Section -->
    <section class="map-section position-relative mt-5 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35241.68415923069!2d26.910376361460212!3d38.67291990337417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbcdd617bdee15%3A0x842e8a73c9e1d65c!2sThe%20Woof%20Dog%20Resort%20K%C3%B6pek%20Oteli%20%26%20E%C4%9Fitim%20Merkezi!5e0!3m2!1str!2str!4v1741321408382!5m2!1str!2str" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    @endif

    @include('frontend.layout.footer')
    @include('frontend.layout.js')
    @yield('customJS')

    <div class="social-floating-buttons">
        <a href="tel:{{ config('settings.telefon1') }}" class="phone" title="Bizi Arayın">
            <i class="fas fa-phone"></i>
        </a>
        <a href="https://www.instagram.com/{{ config('settings.instagram') }}" target="_blank" class="instagram" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://wa.me/{{ config('settings.whatsapp') }}" target="_blank" class="whatsapp" title="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>


</body>
</html>
