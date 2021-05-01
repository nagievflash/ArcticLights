@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white heading--l">Список анкет</h1>
                <div class="js-head-mask"></div>
            </div>
        </div>
        <div class="text-page__content">
            <div class="row">
                <div class="text-block text-block--dark">
                    @foreach ($surveys as $survey)
                        <h3><a href="/dashboard/surveys/{{$survey->slug}}" class="list-item">{{$survey->name}}</a></h3>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
