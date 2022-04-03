@extends('layouts.dashboard', $oSurvey->name)

@section('page-title', $oSurvey->name)

@section('dashboard-content')
    <div class="text-page__content text-page__content_surveys">
        <div class="row">
            <div class="text-block text-block--dark">
                <h2 class="heading heading--dark heading--s">
                    Спасибо, что ответили на опросник «{{$oSurvey->name}}»
                    ‎</h2>
            </div>
        </div>
        @if ($result)
            <div class="row">
                <div class="text-block text-block--dark">
                    <h2 class="heading heading--dark heading--s">Идентификатор ответа «{{$result}}»‎</h2>
                </div>
            </div>
        @endif
        @if ($oUnresolvedSurveysCollection)
            <div class="row">
                <h2 class="heading heading--dark heading--s">Остались неотвеченные</h2>
                <div class="grid grid_cards">
                    @foreach ($oUnresolvedSurveysCollection as $survey)
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
@endsection
