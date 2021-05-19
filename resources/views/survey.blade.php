@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white heading--l">{{$survey->name}}</h1>
                <div class="js-head-mask"></div>
            </div>
        </div>
        <div class="text-page__content">
            <div class="row">
                <div class="text-block text-block--dark">
                    <script src="https://yastatic.net/s3/frontend/forms/_/embed.js"></script>
                    <iframe src="https://forms.yandex.ru/u/{{$survey->yandex_id}}/?iframe=1&{{$sUrlParams}}" frameborder="0" name="ya-form-{{$survey->yandex_id}}" width="650"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
