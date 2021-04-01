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
                        <a target="_blank" href="http://www.facebook.com/sharer.php?u={{Request::url()}}" class="button button--icon-big button--onWhite">
                            <span class="button__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><g fill="none" fill-rule="evenodd" transform="translate(1 1)"><circle cx="28" cy="28" r="28" stroke="#39145D" transform="matrix(-1 0 0 1 56 0)"/><path fill="#39145D" fill-rule="nonzero" d="M26.297 23.711v1.928H25v2.357h1.297V35h2.664v-7.004h1.788s.167-1.13.248-2.366h-2.026v-1.61c0-.241.29-.565.578-.565H31V21h-1.974c-2.795 0-2.73 2.36-2.73 2.711z"/></g></svg>
                            </span>
                        </a>
                    </li>
                    <li class="list__item">
                        <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{Request::url()}}" class="button button--icon-big button--onWhite">
                            <span class="button__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><g fill="none" fill-rule="evenodd" transform="translate(1 1)"><circle cx="28" cy="28" r="28" stroke="#39145D" transform="matrix(-1 0 0 1 56 0)"/><path fill="#39145D" fill-rule="nonzero" d="M34.904 28.56v4.77h-2.766v-4.45c0-1.12-.4-1.882-1.401-1.882-.764 0-1.22.514-1.42 1.012-.072.177-.091.425-.091.674v4.646h-2.767s.038-7.538 0-8.32h2.767v1.18l-.018.027h.018v-.027c.367-.566 1.024-1.375 2.493-1.375 1.82 0 3.185 1.19 3.185 3.745zM23.565 21C22.62 21 22 21.62 22 22.437c0 .799.601 1.438 1.529 1.438h.018c.965 0 1.565-.64 1.565-1.438-.018-.816-.6-1.437-1.547-1.437zm-1.4 12.33h2.765v-8.32h-2.766v8.32z"/></g></svg>
                            </span>
                        </a>
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
