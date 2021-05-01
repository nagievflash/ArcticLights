@extends('layouts.app')

@section('content')
    <section class="news news--main">
        <div class="news__head js-head">
            <div class="row">
                <h1 class="heading heading--white heading--l"><span><span class="animate" style="transform: translate(0%, -100%) translate(0px, 72.24px);">Новости</span></span></h1>
            </div>
            <div class="js-head-mask" style="height: 0px;"></div>
        </div>
        <div class="news__container js-show-more-news" data-request-url="/wp-json/api/news" data-action="getMoreNews" style="opacity: 1;">
            <div class="row">
                <div class="news__inner js-show-more--container">
                    @foreach ($posts as $post)
                    <a href="/news/{{$post->slug}}" class="slide slide--news">
                        <div class="slide__image">
                            <img src="{{Voyager::image( $post->image )}}" alt="{{$post->title}}">
                        </div>
                        <div class="slide__content">
                            <div class="slide__taxometry text-block text-block--dark text-block--s">
                                <p>{{date('d.m.Y', strtotime($post->post_date))}}</p>
                            </div>
                            <h3 class="heading heading--dark heading--s">{{$post->title}}</h3>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
