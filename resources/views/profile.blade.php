@extends('layouts.app')

@section('content')
    <section class="text-page dashboard">
        <div class="text-page__head dashboard__header">
            <div class="row">
                <h1 class="heading heading--white heading--l">Профиль</h1>
            </div>
        </div>
    </section>
    <div class="section text-page">
        <div class="text-page__content" style="opacity: 1;">
            <div class="row">
                <div class="text-block text-block--dark">
                    <h3 class="heading heading--dark heading--ms desktop">Настройки профиля</h3>
                    <form class="form js-ajax-form" autocomplete="off" method="POST" action="{{Route('profile')}}">
                        @csrf
                        <div class="form-radios">
                        </div>
                        <div class="contacts__slide">
                            <div class="form__control form__control--m">
                                <input id="name" name="name" class="form__input" type="text"  placeholder="Имя*" value="{{ old('name') ?? Auth::user()->name ?? '' }}" required>
                            </div>
                            <div class="form__control form__control--m">
                                <input id="last_name" name="last_name" class="form__input" type="text" placeholder="Фамилия*" value="{{ old('last_name') ?? Auth::user()->last_name ?? '' }}" required>
                            </div>
                            <div class="form__control form__control--m">
                                <input id="phone" name="phone" class="form__input" type="text" placeholder="Телефон" value="{{ old('phone') ?? Auth::user()->phone ?? '' }}" required>
                            </div>
                            <div class="form__control form__control--m">
                                <input id="email" name="email" class="form__input js-validate-field" type="email" placeholder="Эл. почта" value="{{ old('email') ?? Auth::user()->email ?? '' }}" required>
                            </div>

                            <div class="form__control form__control--m">
                                <input id="height" name="height" class="form__input" type="text"  placeholder="Рост (см)*" value="{{ old('height') ?? Auth::user()->height ?? '' }}" required>
                            </div>

                            <div class="form__control form__control--m">
                                <input id="weight" name="weight" class="form__input" type="text"  placeholder="Вес (кг)*" value="{{ old('weight') ?? Auth::user()->weight ?? '' }}" required>
                            </div>

                            <div class="form__control form__control--m">
                                <input id="age" name="age" class="form__input" type="text"  placeholder="Возраст (лет)*" value="{{ old('age') ?? Auth::user()->age ?? '' }}" required>
                            </div>

                            <div class="form__control form__control--m">
                                <input id="sex" name="sex" class="form__input" type="text"  placeholder="Пол*" value="{{ old('sex') ?? Auth::user()->sex ?? '' }}" required>
                            </div>

                            <div class="form__control form__control--m">
                                <input id="birthday" name="birthday" class="form__input" type="date"  placeholder="Дата рождения*" value="{{ old('birthday') ?? Auth::user()->birthday ?? '' }}" required>
                            </div>

                            <div class="form__control form__control--m">
                                <label class="form-checkbox"><p>Являюсь кореным жителем Арктики</p>
                                    <input type="hidden" name="root" value="Нет">
                                    <input type="checkbox" name="root" value="Да" @if (Auth::user()->root == 'Да') checked @endif>
                                    <span class="form-checkbox__checkmark"></span>
                                </label>
                            </div>

                            <div class="form__control form__control--">
                                <input id="stay" name="stay" class="form__input" type="number"  placeholder="Срок проживания в условиях Арктики (лет)*" value="{{ old('stay') ?? Auth::user()->stay ?? '' }}" required>
                            </div>

                            <div class="contacts__slide-footer">
                                <button type="submit" class="button button--simple"><span class="button__text">Сохранить</span></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
