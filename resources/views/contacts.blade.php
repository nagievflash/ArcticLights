@extends('layouts.app')

@section('content')
    <section class="hero hero--dark-purple hero--simple hero--contact-us">
        <div class="hero__slide">
            <div class="hero__image contact-image" style="background: bottom / cover url(/images/contactus.jpg);">
                <div class="hero__image-cover"></div>
                <img src="/images/contactus.jpg" alt="" style="visibility: hidden;">
            </div>
            <div class="hero__content">
                <div class="row">
                    <h1 class="heading heading--l heading--white">Свяжитесь с нами</h1>
                    <ul class="details-list contact-us__head-list">
                        <li class="details-list__item">
                            <ul class="nav-list nav-list--vertical">
                                <li class="nav-list__item">
                                <span class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">
                                        Звоните                                    </span>
                                </li>
                                <li class="nav-list__item">
                                    <a href="tel: +73452202197" class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">
                                        +7 (3452) 20-21-97                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="details-list__item">
                            <ul class="nav-list nav-list--vertical">
                                <li class="nav-list__item">
                                <span class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">
                                        Пишите                                    </span>
                                </li>
                                <li class="nav-list__item">
                                    <a href="mailto:tgmu@tyumsmu.ru" class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">
                                        tgmu@tyumsmu.ru
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="details-list__item">
                            <ul class="nav-list nav-list--vertical">
                                <li class="nav-list__item">
                                <span class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">
                                        Адрес                                    </span>
                                </li>
                                <li class="nav-list__item">
                                    <a href="" class="nav-list__link nav-list__link--m nav-list__link--hasOpacity">
                                        г. Тюмень, ул. Одесская д. 54, ФГБОУ ВО Тюменский ГМУ Минздрава России                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="scroll-to scroll-to--right">
            <button class=" scroll-to__button" data-scroll-to-id="scroll-anchor">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 27">
                    <path  d="M6.5 24.958V.5h1v24.345l5.29-4.278.564.793-6.438 5.207-6.27-5.21.574-.786 5.28 4.387z"/>
                </svg>
            </button>
        </div>
    </section>
    <section class="map" id="scroll-anchor">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0fd36ef5f52ff1b104cd3dd29a39e043786ae9e7ac01b1b843f9d8186a1a197e&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
    </section>
@endsection
