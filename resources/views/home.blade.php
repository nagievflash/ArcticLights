@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white">Добро пожаловать, {{Auth::user()->name}}!</h1>
            </div>
            <div class="row dashboard-icons">
                <a href="{{Route('profile')}}" class="button button--border button--white-border button--ic"><span class="button__text">Профиль</span></a>
                <a href="{{Route('documents')}}" class="button button--border button--white-border button--ic"><span class="button__text">Документация</span></a>
                <a href="{{Route('surveys')}}" class="button button--border button--white-border button--ic"><span class="button__text">Анкеты</span></a>
            </div>
        </div>
        <div class="news__container">

        </div>

    </section>
@endsection
