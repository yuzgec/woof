@extends('frontend.layout.app') 

@section('content')

    @include('frontend.layout.slider')

    <div class="container">
        <div class="row align-items-center py-1">
            <div class="col-md-6 mb-4">
                <div class="pe-3 pe-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
                    <h2 class="font-weight-bold text-color-primary appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">İZMİR KÖPEK OTELİ</h2>
                   <h4 class="text-color-primary">{{ config('settings.siteName')}}</h4>
                    {!! $Hakkimizda->desc !!}
                </div>
            </div>
            <div class="col-sm-6 ps-5">
                <div class="cascading-images-wrapper bg-color-grey border-radius-2 p-5 w-100 text-center">
                    <div class="cascading-images transform-none position-relative clearfix">
                        <div class="position-absolute z-index-3" style="top: -5%;left:-5%">
                            <div data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="bottom: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, -5.24825%, 0px);">
                                <img src="/{{config('settings.siteLogo')}}" style="max-width: 150px; animation-duration: 600ms; animation-delay: 300ms;" class="bg-white appear-animation border-radius-2 box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="{{ config('settings.siteName') }}" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
                            </div>
                        </div>

                        <div class="position-relative z-index-2">
                            <img src="/hakkimizda.jpg" class="p-1 appear-animation border-radius-2 box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="{{ config('settings.siteName') }}" data-appear-animation="expandIn" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 100ms;">
                        </div>

                        <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="bottom: -8%; right: 9%;">
                            <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px; top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 11.7092%, 0px);">
                                <svg width="100%" height="100%">
                                    <defs>
                                        <pattern id="dots" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                            <circle fill="#0088cc" cx="1.5" cy="1.5" r="1.5"></circle>
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)"></rect>
                                </svg>
                            </div>
                        </div>

                        <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="top: 10%; left: -38.2%;">
                            <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px; top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 4.44264%, 0px);">
                                <svg width="100%" height="100%">
                                    <defs>
                                        <pattern id="dots2" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                            <circle fill="#CCC" cx="1.5" cy="1.5" r="1.5"></circle>
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" width="100%" height="100%" fill="url(#dots2)"></rect>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section  bg-transparent m-0 border-0">
        <div class="container">
            <div class="row justify-content-center counters counters-lg pt-2">
                <div class="col-md-3  appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                    <div class="counter counter-with-unit counter-unit-on-top">
                        <strong class="text-color-dark font-weight-extra-bold text-12" data-to="7500">7500</strong>
                        <strong class="unit text-color-dark font-weight-bold text-3">m<sup>2</sup></strong>
                        <label class="font-weight-normal text-3">Alan</label>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                    <div class="counter counter-with-unit counter-unit-on-top">
                        <strong class="text-color-dark font-weight-extra-bold text-12" data-to="150">150</strong>
                        <strong class="unit text-color-dark font-weight-bold text-3">+</strong>
                        <label class="font-weight-normal text-3">Kapasite</label>
                    </div>
                </div>
                <div class="col-md-3 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                    <div class="counter counter-with-unit counter-unit-on-top">
                        <strong class="text-color-dark font-weight-extra-bold text-12" data-to="99">99</strong>
                        <strong class="unit text-color-dark font-weight-bold text-3">+</strong>
                        <label class="font-weight-normal text-3">Köpek Sayısı</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cards custom-cards container z-index-2 py-2">
        <div class="row text-center pt-2 pb-1">
            <div class="col-md-10 mx-auto">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-primary appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">HİZMETLERİMİZ</h2>
                </div>
                <div class="overflow-hidden">
                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">İzmir Foça'da köpek dostlarınız için en iyi hizmetleri sunuyoruz</p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center mt-4">
            @foreach($ServiceCategories as $key => $category)
            <div class="col-md-4 mb-4">
                <div class="card custom-card-style @if($key == 1) card-green @elseif($key == 2) card-yellow @endif appear-animation" 
                     data-appear-animation="@if($key == 0) fadeInLeftShorter @else fadeInUpShorter @endif" 
                     data-appear-animation-delay="{{ 400 + ($key * 200) }}">
                    <div class="card-body text-center p-5">
                        <div class="custom-card-icon">
                            <i class="fas @if($key == 0) fa-home @elseif($key == 1) fa-paw @else fa-dog @endif"></i>
                        </div>
                        <h3 class="card-title font-weight-bold mt-4">{{ $category->title }}</h3>
                        <p class="card-text">{{ $category->short }}</p>
                        <a href="{{ route('servicecategory', $category->slug) }}" class="btn-link font-weight-bold">DETAYLI BİLGİ <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <section class="parallax section section-text-light section-parallax" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '400%'}" data-image-src="/parallax.jpg">
        <section class="call-to-action">
            <div class="container">
               
            </div>
        </section>
    </section>
    
    <!-- Müşteri Yorumları Bölümü -->
    <section class="section border-0 m-0 testimonials-section">
        <div class="container pb-3 my-5 position-relative">
            <div class="row justify-content-center pb-3 mb-4">
                <div class="col text-center">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0">Google Yorumlarımız</h2>
                    <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0">
                    </div>
                    <p class="font-weight-bold text-3-5 mb-1">Sunduğumuz hizmetin kalitesiyle gurur duyuyor ve her bir dostunuza verdiğimiz hizmetin arkasında duruyoruz.</p>
                    <p class="font-weight-light text-3-5 mb-0">Google'da müşterilerimizin bıraktığı gerçek yorumları okuyun.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel nav-outside nav-style-1 nav-dark nav-arrows-thin nav-font-size-lg custom-carousel-box-shadow-1 mb-0 owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 15, 'stagePadding': '75'}">
                        
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Köpeğimiz Paşa'yı ilk kez bir otele bırakacağımız için çok endişeliydik. Ama The Woof ekibi o kadar ilgili ve profesyoneldi ki, tüm endişelerimiz yok oldu. Tatilimiz boyunca bize sürekli fotoğraf ve video gönderdiler. Paşa çok mutlu görünüyordu!</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">Ayşe Yılmaz</strong></p>
                                            <div class="google-review-badge">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Köpeğimiz Çakıl'ın davranış problemleri vardı ve eğitim programına kaydolduk. Sadece 3 hafta içinde inanılmaz bir değişim gördük. Eğitmenler çok sabırlı ve bilgiliydi. Artık misafirlerimiz geldiğinde sorun yaşamıyoruz. Kesinlikle tavsiye ederim!</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">Mehmet Kaya</strong></p>
                                            <div class="google-review-badge">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Köpeğimiz Mia'yı düzenli olarak bakım için getiriyoruz. Tesisleri çok temiz ve ferah. Personel her zaman güler yüzlü ve köpeklere karşı çok sevgi dolu. Mia her seferinde buraya gelmeyi dört gözle bekliyor, kapıdan girer girmez kuyruğunu sallamaya başlıyor!</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">Zeynep Demir</strong></p>
                                            <div class="google-review-badge">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Köpeğimiz Boncuk'un acil bir sağlık sorunu olduğunda The Woof'un veteriner ekibi hemen müdahale etti. Profesyonel yaklaşımları ve hızlı tepkileri sayesinde Boncuk kısa sürede iyileşti. Sadece bir otel değil, gerçek bir sağlık merkezi. Çok teşekkürler!</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">Ali Öztürk</strong></p>
                                            <div class="google-review-badge">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">İş seyahatlerim nedeniyle köpeğim Karamel'i sık sık The Woof'a bırakıyorum. Her seferinde ona kendi evindeymiş gibi davranıyorlar. Geniş oyun alanları ve özel ilgi ile Karamel burada çok mutlu. Artık başka bir yere götürmeyi düşünemiyorum bile!</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">Selin Yıldız</strong></p>
                                            <div class="google-review-badge">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--     
    <div class="container py-2">

        <div class="modern-tab-container">
            <ul class="nav nav-pills sort-source modern-tabs justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-uppercase active" href="#"><i class="fas fa-th mr-2"></i> Hepsi</a></li>
                <li class="nav-item" data-option-value=".otel"><a class="nav-link text-uppercase" href="#"><i class="fas fa-home mr-2"></i> Köpek Oteli</a></li>
                <li class="nav-item" data-option-value=".egitim"><a class="nav-link text-uppercase" href="#"><i class="fas fa-graduation-cap mr-2"></i> Eğitim</a></li>
                <li class="nav-item" data-option-value=".bakim"><a class="nav-link text-uppercase" href="#"><i class="fas fa-heart mr-2"></i> Özel Bakım</a></li>
                <li class="nav-item" data-option-value=".veteriner"><a class="nav-link text-uppercase" href="#"><i class="fas fa-stethoscope mr-2"></i> Veteriner</a></li>
            </ul>
        </div>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">

                    <div class="col-md-6 col-lg-4 isotope-item  otel">
                        <div class="portfolio-item">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1" href=https://picsum.photos/200/300?random=1">
                                <img class="img-fluid" src="https://picsum.photos/600/800?random=1" alt="{{ config('settings.siteName') }}">
                            </a>
                        </div>
                    </div>


                    
                    <div class="col-md-6 col-lg-4 isotope-item egitim">
                        <div class="portfolio-item">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon  me-1" href=https://picsum.photos/200/300?random=1">
                                <img class="img-fluid" src="https://picsum.photos/800/800?random=1" alt="{{ config('settings.siteName') }}">
                            </a>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 isotope-item egitim">
                        <div class="portfolio-item">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon  me-1" href=https://picsum.photos/200/300?random=1">
                                <img class="img-fluid" src="https://picsum.photos/800/800?random=1" alt="{{ config('settings.siteName') }}">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 isotope-item  otel">
                        <div class="portfolio-item">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon  me-1" href=https://picsum.photos/200/300?random=1">
                                <img class="img-fluid" src="https://picsum.photos/600/800?random=1" alt="{{ config('settings.siteName') }}">
                            </a>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 isotope-item bakim">
                        <div class="portfolio-item">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon me-1" href=https://picsum.photos/200/300?random=1">
                                <img class="img-fluid" src="https://picsum.photos/800/800?random=3" alt="{{ config('settings.siteName') }}">
                            </a>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 isotope-item  otel">
                        <div class="portfolio-item">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon me-1" href=https://picsum.photos/200/300?random=1">
                                <img class="img-fluid" src="https://picsum.photos/600/800?random=1" alt="{{ config('settings.siteName') }}">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</div> --}}

    <div class="container">
        <div class="row pb-4">
                                
            <div class="col mb-4 mb-lg-0">

                <h4 class="text-center mb-4">Sık Sorulan Sorular</h4>
                <div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordion2000">
                    <div class="card card-default box-shadow-8">
                        <div class="card-header" id="collapse2000HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle bg-light text-black font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2000One" aria-expanded="false" aria-controls="collapse2000One">
                                    Köpeğimi otele bırakırken neler getirmeliyim?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2000One" class="collapse" aria-labelledby="collapse2000HeadingOne" data-bs-parent="#accordion2000" style="">
                            <div class="card-body pt-0">
                                <p class="mb-0">Köpeğinizi otele bırakırken aşı karnesini, düzenli kullandığı ilaçları, sevdiği bir oyuncağını, yatağını (isteğe bağlı), alışık olduğu mamasını ve varsa özel beslenme talimatlarını getirmenizi öneririz. Ayrıca, acil durumlar için veterinerinizin iletişim bilgilerini ve köpeğinizin sağlık durumu hakkında bilgileri de paylaşmanız önemlidir. Köpeğinizin kendini evindeymiş gibi hissetmesi için sevdiği bir eşyayı getirmeniz, adaptasyon sürecini kolaylaştıracaktır.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default box-shadow-8">
                        <div class="card-header" id="collapse2000HeadingTwo">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle bg-light text-black font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2000Two" aria-expanded="false" aria-controls="collapse2000Two">
                                    Köpeğim otelinizdeyken onu görebilir miyim veya durumu hakkında bilgi alabilir miyim?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2000Two" class="collapse" aria-labelledby="collapse2000HeadingTwo" data-bs-parent="#accordion2000">
                            <div class="card-body pt-0">
                                <p class="mb-0">Elbette! Köpeğinizin otelimizde kaldığı süre boyunca düzenli olarak fotoğraf ve video güncellemeleri alacaksınız. WhatsApp üzerinden günlük olarak köpeğinizin durumu hakkında bilgi veriyor ve aktivitelerinden görüntüler paylaşıyoruz. Ayrıca, önceden randevu alarak köpeğinizi ziyaret edebilirsiniz. Ancak, bazı köpekler sahiplerini gördükten sonra ayrılık anksiyetesi yaşayabildiği için, ziyaretlerin köpeğinizin adaptasyonunu etkileyebileceğini göz önünde bulundurmanızı öneririz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default box-shadow-8">
                        <div class="card-header" id="collapse2000HeadingThree">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle bg-light text-black font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2000Three" aria-expanded="false" aria-controls="collapse2000Three">
                                    Köpeğim diğer köpeklerle sosyalleşecek mi? Agresif köpekler için ayrı alanlarınız var mı?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2000Three" class="collapse" aria-labelledby="collapse2000HeadingThree" data-bs-parent="#accordion2000">
                            <div class="card-body pt-0">
                                <p class="mb-0">Köpeğinizin sosyal yapısına ve davranışlarına bağlı olarak, diğer köpeklerle sosyalleşme imkanı sunuyoruz. Her köpeğin mizacını değerlendiriyor ve buna göre grup aktiviteleri düzenliyoruz. Agresif davranışlar gösteren veya sosyalleşme konusunda zorluk yaşayan köpekler için özel alanlarımız ve bireysel oyun seanslarımız bulunmaktadır. Köpeğinizin özel ihtiyaçlarını kayıt sırasında belirtmeniz, ona en uygun bakımı sağlamamıza yardımcı olacaktır. Güvenlik her zaman önceliğimizdir ve tüm köpeklerin mutlu ve stressiz bir konaklama deneyimi yaşamasını hedefliyoruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default box-shadow-8">
                        <div class="card-header" id="collapse2000HeadingFour">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle bg-light text-black font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2000Four" aria-expanded="false" aria-controls="collapse2000Four">
                                    Köpeğim özel bir diyete sahip veya ilaç kullanıyor, bunu nasıl yönetiyorsunuz?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2000Four" class="collapse" aria-labelledby="collapse2000HeadingFour" data-bs-parent="#accordion2000">
                            <div class="card-body pt-0">
                                <p class="mb-0">Özel diyet gereksinimleri ve ilaç kullanımı konusunda son derece titiz davranıyoruz. Köpeğinizin özel mamasını getirmenizi öneririz, ancak talep üzerine çeşitli premium mama seçenekleri de sunabiliyoruz. İlaçlar için, dozaj ve kullanım talimatlarını detaylı bir şekilde almanın yanı sıra, ilaç verme saatlerini takip eden bir sistemimiz var. Eğitimli personelimiz, köpeğinizin ilaçlarını zamanında ve doğru dozajda almasını sağlar. Ayrıca, alerjileri veya hassasiyetleri olan köpekler için özel protokollerimiz bulunmaktadır. Köpeğinizin sağlığı bizim için önceliklidir.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default box-shadow-8">
                        <div class="card-header" id="collapse2000HeadingFive">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle bg-light text-black font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2000Five" aria-expanded="false" aria-controls="collapse2000Five">
                                    Acil bir durumda veteriner hizmetiniz var mı? Ek ücret ödenir mi?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2000Five" class="collapse" aria-labelledby="collapse2000HeadingFive" data-bs-parent="#accordion2000">
                            <div class="card-body pt-0">
                                <p class="mb-0">Evet, tesisimizde acil durumlara müdahale edebilecek veteriner hekimimiz bulunmaktadır ve 24 saat anlaşmalı veteriner kliniğimiz ile iş birliği içindeyiz. Köpeğinizin sağlığıyla ilgili herhangi bir endişe durumunda, önce sizinle iletişime geçer ve onayınızı alırız. Basit müdahaleler ve rutin kontroller konaklama ücretine dahildir, ancak kapsamlı tedaviler veya özel işlemler için ek ücret talep edilebilir. Bu durumda, tedavi öncesinde sizi bilgilendirir ve onayınızı alırız. Köpeğinizin sağlığı ve güvenliği bizim için en önemli önceliktir ve her türlü acil duruma hızlı bir şekilde müdahale edebilecek donanıma sahibiz.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{{-- 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Instagram'dan Köpek Dostlarımız</h2>
                <p class="text-center mb-4">Bizi Instagram'da takip edin: <a href="https://www.instagram.com/{{config('settings.instagram')}}" target="_blank" class="text-primary font-weight-bold">@{{config('settings.instagram')}}</a></p>
            </div>
        </div>
            
        <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-2 p-1">
                        <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0" href="https://picsum.photos/800/800?random=1">
                            <img class="img-fluid rounded-0" src="https://picsum.photos/800/800?random=1" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
@section('customCSS')
<style>
    .custom-card-style {
        border-radius: 20px;
        border: none;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        background-color: #FFECD9;
    }
    
    .custom-card-style.card-green {
        background-color: #E8F5E4;
    }
    
    .custom-card-style.card-yellow {
        background-color: #FFF8D9;
    }
    
    .custom-card-style.card-blue {
        background-color: #E4F5F8;
    }
    
    .custom-card-style:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .custom-card-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .custom-card-icon i {
        font-size: 30px;
        color: #333;
    }
    
    .custom-card-style .card-title {
        font-size: 22px;
        margin-bottom: 15px;
    }
    
    .custom-card-style .card-text {
        color: #555;
        margin-bottom: 25px;
    }
    
    .custom-card-style .btn-link {
        color: #333;
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .custom-card-style .btn-link:hover {
        transform: translateX(5px);
    }

    .modern-tab-container {
        margin: 30px 0;
        position: relative;
    }
    
    .modern-tabs {
        display: flex;
        flex-wrap: wrap;
        border-radius: 8px;
        background: #f8f9fa;
        padding: 5px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .modern-tabs .nav-item {
        margin: 5px;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .modern-tabs .nav-link {
        border-radius: 6px;
        padding: 12px 20px;
        font-weight: 600;
        color: #555;
        background: transparent;
        transition: all 0.3s ease;
        border: none;
        position: relative;
        overflow: hidden;
        font-size: 14px;
        display: flex;
        align-items: center;
    }
    
    .modern-tabs .nav-link i {
        font-size: 16px;
        margin-right: 8px;
        transition: all 0.3s ease;
    }
    
    .modern-tabs .nav-link:hover {
        color: #dd393b;
        background: rgba(255, 207, 191, 0.1);
        transform: translateY(-2px);
    }
    
    .modern-tabs .nav-link:hover i {
        transform: scale(1.2);
    }
    
    .modern-tabs .nav-link.active {
        color: #fff;
        background: #dd393b;
        box-shadow: 0 4px 10px rgba(255, 207, 191, 0.4);
    }
    
    .modern-tabs .nav-link.active i {
        color: #fff;
    }
    
    @media (max-width: 767px) {
        .modern-tabs {
            padding: 3px;
        }
        
        .modern-tabs .nav-item {
            margin: 3px;
        }
        
        .modern-tabs .nav-link {
            padding: 8px 12px;
            font-size: 12px;
        }
    }

    /* Masonry düzeni için ek stiller */
    .portfolio-list {
        margin-left: -15px;
        margin-right: -15px;
    }
    
    .isotope-item {
        padding: 15px;
        transition: all 0.5s ease;
    }
    
    .portfolio-item {
        margin-bottom: 0;
    }
    
    /* Müşteri Yorumları Stilleri */
    .custom-divider.divider-primary hr {
        background: #dd393b;
        height: 3px;
        width: 50px;
    }
    
    .custom-testimonial-style-1 blockquote {
        position: relative;
        padding: 10px 20px;
        border-left: none;
    }
    
    .custom-testimonial-style-1 blockquote:before {
        content: '\f10d';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        font-size: 20px;
        color: #dd393b;
        position: absolute;
        top: -10px;
        left: 0;
        opacity: 0.2;
    }
    
    .custom-border-radius-1 {
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .custom-border-radius-1:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .testimonial-author strong {
        color: #dd393b;
        font-size: 16px;
    }
    
    .owl-carousel .owl-nav button.owl-prev, 
    .owl-carousel .owl-nav button.owl-next {
        background-color: #dd393b !important;
        color: #fff !important;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        opacity: 0.7;
        transition: all 0.3s ease;
    }
    
    .owl-carousel .owl-nav button.owl-prev:hover, 
    .owl-carousel .owl-nav button.owl-next:hover {
        opacity: 1;
        transform: scale(1.1);
    }
    
    /* Testimonials Section with Paw Prints Background */
    .testimonials-section {
        position: relative;
        overflow: hidden;
    }
 
    @keyframes pawWalkRight {
        0% {
            background-position: -100% 0;
        }
        100% {
            background-position: 100% 0;
        }
    }
    
    @keyframes pawWalkLeft {
        0% {
            background-position: 100% 0;
        }
        100% {
            background-position: -100% 0;
        }
    }
    
    .testimonials-section .container {
        position: relative;
        z-index: 1;
    }
    
   
    .rating {
        color: #FBBC05;
        font-size: 14px;
        letter-spacing: 2px;
    }
    
    .testimonial-author {
        margin-top: 15px;
    }
    
    .testimonial-author strong {
        display: block;
        margin-bottom: 5px;
    }

    @media (max-width: 767px) {
        .slider-image {
        width: 60% !important;
        }
    }

</style>
@endsection
@section('customJS')
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
       // Tab menüsü için tıklama olaylarını yönet
       const tabItems = document.querySelectorAll('.modern-tabs .nav-item');
       
       tabItems.forEach(item => {
           item.addEventListener('click', function(e) {
               // Tıklama olayını engelle
               e.preventDefault();
               
               // Aktif sınıfı tüm öğelerden kaldır
               tabItems.forEach(tab => {
                   tab.classList.remove('active');
                   const link = tab.querySelector('.nav-link');
                   if (link) link.classList.remove('active');
               });
               
               // Tıklanan öğeye aktif sınıfı ekle
               this.classList.add('active');
               const clickedLink = this.querySelector('.nav-link');
               if (clickedLink) clickedLink.classList.add('active');
               
               // Orijinal filtreleme işlevselliğini koru
               // Bu kısım, mevcut data-sort-id ve data-option-value değerlerini kullanır
           });
       });
   });
   </script>
@endsection


