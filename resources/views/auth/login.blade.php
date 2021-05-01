@extends('layouts.app')

@section('content')
    <section class="hero hero--dark-purple hero--simple">
        <div class="swiper-slide">
            <div class="hero__slide">
                <div class="hero__image">
                    <div class="hero__image-cover" style="transform: translate(0%, 100%);"></div>
                    <img src="https://galio.lt/wp-content/uploads/2020/01/apie-mus-hero-img.jpg" alt="" style="transform: translate(0px, 0px);">
                </div>
                <div class="hero__content">
                    <div class="row">
                        <h1 class="heading heading--l heading--white"><span><span class="animate" style="transform: translate(0%, -100%) translate(0px, 72.24px);">Прогрессивные</span></span> <span><span class="animate" style="transform: translate(0%, -100%) translate(0px, 72.24px);">пространства</span></span> <span><span class="animate" style="transform: translate(0%, -100%) translate(0px, 72.24px);">для</span></span> <span><span class="animate" style="transform: translate(0%, -100%) translate(0px, 72.24px);">лучшей</span></span> <span><span class="animate" style="transform: translate(0%, -100%) translate(0px, 72.24px);">жизни</span></span></h1>
                        <div class="text-block text-block--s text-block--white" style="opacity: 1; transform: translate(0px, 0px);">
                            <p>Значимые планы требуют не менее значимого пространства для их реализации. Мы работаем для того, чтобы создать качественную основу для основных событий вашей жизни. Разрабатываемые нами проекты ориентированы на личные и профессиональные области, а также на многогранные, соответствующие им потребности.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-to" style="opacity: 1;">
            <button class=" scroll-to__button" data-scroll-to-id="scroll-anchor">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 27">
                    <path d="M6.5 24.958V.5h1v24.345l5.29-4.278.564.793-6.438 5.207-6.27-5.21.574-.786 5.28 4.387z"></path>
                </svg>
            </button>
        </div>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
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
