@extends('layouts.app')

@section('content')
    <section class="news news--single">
        <div class="news__head js-head">
            <div class="row">
                <div class="js-reveal-content">
                    <div class="text-block text-block--s text-block--white">
                        <p>{{date('d.m.Y', strtotime($post->post_date))}} &mdash; Новости</p>
                    </div>
                </div>
                <h1 class="heading heading--white heading--l">{{$post->title}}</h1>
            </div>
            <div class="js-head-mask"></div>
        </div>
        <div class="news__single-content">
            <div class="row">
                <div class="news__single-image">
                    <img src="{{Voyager::image( $post->image )}}" alt="{{$post->title}}">
                </div>
            </div>
            <div class="row">
                <ul class="list">
                    <li class="list__item">
                    </li>
                    <li class="list__item">
                    </li>
                </ul>
                <div class="text-block text-block--dark">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
        <div class="news__foot">
            <div class="row">
                <div class="news__more">
                    <a href="{{  url()->previous() }}" class="button button--icon-m button--onLight button--icon-text">
                        <span class="button__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><g fill="none" fill-rule="evenodd" transform="matrix(-1 0 0 1 41 1)"><circle cx="20" cy="20" r="20"  transform="matrix(-1 0 0 1 40 0)"/><path  fill-rule="nonzero" d="M18 13.798l.98-.798L24 20.092 18.975 27l-.97-.811 4.442-6.108z"/></g></svg>
                        </span>
                        <span class="button__text">Назад</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
