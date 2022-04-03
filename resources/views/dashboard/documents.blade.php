@extends('layouts.dashboard', ['title' => __('dashboard.documents-title')])

@section('page-title', __('dashboard.documents-title'))

@section('dashboard-content')
    <div class="section text-page">
        <div class="text-page__content" style="opacity: 1;">
            <div class="row">
                <ul class="text-block text-block--dark">
                    @foreach ($aDocuments as $oDocument)
                        <li style="margin-bottom: 10px;">
                            <h3><a href="{{ $oDocument->url }}">{{ $oDocument->name }} | {{ $oDocument->extension }}</a>
                            </h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
