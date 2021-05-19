@extends('layouts.app')
@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white heading--l">Список анкет</h1>
                <div class="js-head-mask"></div>
            </div>
        </div>
        <div class="text-page__content text-page__content_surveys">
            @if ($surveys)
                <div class="row">
                    <div class="grid grid_cards">
                        @foreach ($surveys as $survey)
                            <a class="card card__survey @if ($survey->result) card__survey_done @endif"
                               href="/dashboard/surveys/{{$survey->slug}}">
                                @if ($survey->image)
                                    <img src="/storage/{{$survey->image}}" alt="{{$survey->name}}" class="card__image">
                                @endif
                                <div class="card__body">
                                    <h4 class="card__title">{{$survey->name}}</h4>
                                    <span class="card__text">{{$survey->description}}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
            @if($aUsersSurveys)
                <div class="row">
                    <h2 class="heading heading--dark heading--s">Завершённые</h2>
                    <div class="grid gird_cards">
                        @foreach ($aUsersSurveys as $survey)
                            <div class="card card__survey card__survey_done">
                                @if ($survey->image)
                                    <img src="/storage/{{$survey->image}}" alt="{{$survey->name}}" class="card__image">
                                @endif
                                <div class="card__body">
                                    <h4 class="card__title">{{$survey->name}}</h4>
                                    <span class="card__text">{{$survey->description}}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
