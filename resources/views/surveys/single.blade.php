@extends('layouts.dashboard', ['sTitle' => $oSurvey->name])

@section('page-title', $oSurvey->name)

@section('dashboard-content')
    <div class="text-page__content">
        <div class="row">
            <div class="text-block text-block--dark">
                <script src="https://yastatic.net/s3/frontend/forms/_/embed.js"></script>
                <iframe src="https://forms.yandex.ru/u/{{$oSurvey->yandex_id}}/?iframe=1&{{$sUrlParams}}"
                        frameborder="0" name="ya-form-{{$oSurvey->yandex_id}}" width="650"></iframe>
            </div>
        </div>
    </div>
@endsection
