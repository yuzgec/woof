@extends('frontend.layout.app')

@section('content')
<section
    class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-7 mt-0"
    data-plugin-parallax=""
    data-plugin-options="{'speed': 1.2}"
    data-image-src="/parallax.jpg"
    style="position: relative; overflow: hidden;">
    <div class="parallax-background" style="background-image: url('/parallax.jpg	'); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 180%; transform: translate3d(0px, -50.3125px, 0px); background-position-x: 50%;"></div>    
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-white text-uppercase mt-1">Giriş Yap</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home')}}">Anasayfa</a></li>
                        <li class="active">Giriş Yap</li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</section>

<div class="container mt-100" style="z-index: 99999999999999999;margin-bottom: 100px;margin-top: 20px;">
    <div class="row justify-content-center"  >
        <div class="col-md-8">
            <div class="card mb-3 mt-5">
                <div class="card-body mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Adresiniz</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Parolanız</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        &nbsp;Beni Hatırla
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Giriş Yap
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Parolamı Unuttum
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
