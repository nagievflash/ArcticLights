@extends('layouts.dashboard')

@section('page-title', 'Добро пожаловать, ' . \Illuminate\Support\Facades\Auth::user()->name . '!')

@section('dashboard-content')
    <div class="section text-page"></div>
@endsection
