@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white heading--l">{{$oSurvey->name}}</h1>
                <div class="js-head-mask"></div>
            </div>
        </div>
        <div class="text-page__content text-page__content_surveys">
            <div class="row">
                <div class="text-block text-block--dark">
                    <h2 class="heading heading--dark heading--s">Спасибо, что ответили на анкету «{{$oSurvey->name}}»‎</h2>
                </div>
            </div>
            @if ($result)
                <div class="row">
                    <div class="text-block text-block--dark">
                        <h2 class="heading heading--dark heading--s">Результат «{{$result}}»‎</h2>
                    </div>
                </div>
            @endif
            @if ($aUnresolvedSurveys)
                <div class="row">
                    <h2 class="heading heading--dark heading--s">Остались неотвеченные</h2>
                    <div class="grid grid_cards">
                        @foreach ($aUnresolvedSurveys as $survey)
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
        </div>
    </section>
@endsection
