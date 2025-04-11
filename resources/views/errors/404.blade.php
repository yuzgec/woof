@extends('frontend.layout.app')
@section('content')
    <section class="http-error">
        <div class="row justify-content-center py-3 " >
            <div class="col-md-12 text-center">
                <div class="http-error-main" style="padding-top: 200px;padding-bottom: 100px;">
                    <img src="/404.jpg" alt="404" class="img-fluid">
                    <p>Aradığınız sayfa bulunamadı.</p>
                    <a href="{{ route('home') }}" class="btn btn-secondary"><i class="fas fa-home"></i> Anasayfaya Dön</a>
                </div>
            </div>
        
        </div>
    </section>
@endsection

