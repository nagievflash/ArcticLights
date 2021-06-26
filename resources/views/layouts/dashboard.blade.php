@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white">
                    @yield('page-title')
                </h1>
            </div>
            <x-dashboard.navigation/>
        </div>
        @yield('dashboard-content')
    </section>
@endsection
