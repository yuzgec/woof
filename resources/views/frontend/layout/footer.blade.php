<div class="footer-wave-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none" class="footer-wave">
        <path d="M0,32L80,37.3C160,43,320,53,480,58.7C640,64,800,64,960,58.7C1120,53,1280,43,1360,37.3L1440,32L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z" fill="#1E2022"></path>
    </svg>
</div>

<footer id="footer">
    <div class="container position-relative">
        <div class="row py-5 justify-content-center">
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="footer-logo-container">
                    <a href="{{ route('home')}}">
                        <img alt="{{ config('settings.siteName')}}" width="200" src="/thewoof.png" class="mb-3">
                    </a>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <h4 class="text-white font-weight-bold mb-3">Hakkımızda</h4>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt me-2 text-white"></i> <span class="text-white">{{ config('settings.adres1') }}</span>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone me-2 text-white"></i> <span class="text-white">{{ config('settings.telefon1') }}</span>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-clock me-2 text-white"></i> <span class="text-white">Pzt - Paz: 08:00 - 20:00</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <h4 class="text-white font-weight-bold mb-3">Hızlı Linkler</h4>
                <ul class="list-unstyled">
                    @foreach($ServiceCategory as $category)
                    <li class="mb-2"><a href="{{ route('servicecategory', $category->slug) }}" class="text-white text-decoration-none">{{ $category->title }}</a></li>
                    @endforeach
                  
                </ul>
            </div>
            <div class="col-md-3">
                <h4 class="text-white font-weight-bold mb-3">Bülten</h4>
                <p class="text-white mb-3">Yeniliklerden haberdar olmak için abone olun</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="E-posta adresiniz" aria-label="E-posta adresiniz">
                    <button class="btn btn-light text-white" type="button">ABONE OL</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="border-top: 1px solid #626262;">
        <div class="container py-1">
            <div class="row py-2">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <p class="text-white text-3 mb-0">© Copyright - {{config('settings.siteName').' '. date('Y')}}. Tüm Hakları Saklıdır.</p>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <p class="text-white text-3 mb-0"><a href="https://godijital.net" target="_blank" title="İzmir Web Tasarım ( GO Dijital)" class="text-white"> İzmir Web Tasarım ( GO Dijital)</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-wave-container {
        position: relative;
        width: 100%;
        height: 100px;
        overflow: hidden;
        z-index: 999;
        margin-top: -100px;
        display: block; /* Her sayfada göster */
    }
    
    .footer-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    #footer {
        position: relative;
        background-color: #1E2022;
        color: #fff;
        padding-top: 30px;
        z-index: 998;
    }
    
    .social-icon-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: #dd393b;
        color: #1E2022 !important;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .social-icon-circle:hover {
        background-color: #fff;
        transform: translateY(-3px);
    }
    
    .footer-copyright {
        background-color: rgba(0, 0, 0, 0.2);
    }
    
    .btn-light {
        background-color: #dd393b;
        border-color: #dd393b;
        color: #1E2022;
    }
    
    .btn-light:hover {
        background-color: #fff;
        border-color: #fff;
        color: #1E2022;
    }
    
    @media (max-width: 767px) {
        .footer-wave-container {
            height: 70px;
            margin-top: -70px;
        }
        
        .dog-image-container {
            width: 150px;
            height: 150px;
            right: 5%;
        }
    }
</style>