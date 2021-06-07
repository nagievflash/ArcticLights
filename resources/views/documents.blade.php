@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white heading--l">Документы</h1>
            </div>
        </div>
        <div class="section text-page">
            <div class="text-page__content" style="opacity: 1;">
                <div class="row">
                    <ul class="text-block text-block--dark">
                        @foreach ($aDocuments as $oDocument)
                            <li style="margin-bottom: 10px;">
                                <h3><a href="{{ $oDocument->url }}">{{ $oDocument->name }} | {{ $oDocument->extension }}</a></h3>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
