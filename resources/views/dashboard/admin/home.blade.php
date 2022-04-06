@extends('layouts.admin.dashboard')

@section('page-title', 'Добро пожаловать, ' . \Illuminate\Support\Facades\Auth::user()->name . '!')

@section('assets-js')
    <script src="{{ asset('/js/admin/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <h3 class="pb-2">Сводные данные</h3>
            <canvas class="my-4 w-100 js-users-chart"
                    data-root="{{ $statistic['users']['root-count'] }}"
                    data-non-root="{{ $statistic['users']['non-root-count'] }}"></canvas>
        </div>
        <div class="col-12 col-lg-6">
            <h3 class="pb-2">Обработка анкет</h3>
            <form action="/surveys/obtainResult"
                  method="POST"
                  accept-charset="UTF-8"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">
                        Загрузите результат анкетирования в формате .scv
                    </label>
                    <input class="form-control" required type="file" id="formFile" name="result" accept=".csv">
                </div>
                <button type="submit" class="btn btn-primary">Получить рецензентов</button>
            </form>
        </div>
    </div>
@endsection
