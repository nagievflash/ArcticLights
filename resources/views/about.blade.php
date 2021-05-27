@extends('layouts.app')

@section('content')
    <section class="hero hero--dark-purple hero--simple">
        <div class="swiper-slide">
            <div class="hero__slide">
                <div class="hero__image">
                    <div class="hero__image-cover"></div>
                    <img src="/images/about_header.jpg" alt="">
                </div>
                <div class="hero__content">
                    <div class="row">
                        <h1 class="heading heading--l heading--white">О проекте</h1>
                        <div class="text-block text-block--s text-block--white">

                            <p>В данном проекте поставлена задача разработать и внедрить научно-обоснованные передовые технологии автоматически настраиваемого освещения в жилых помещениях и на рабочих местах в районе Крайнего Севера с экстремальными сезонными изменениями в экологического цикла свет-темнота. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-to">
            <button class=" scroll-to__button" data-scroll-to-id="scroll-anchor">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 27">
                    <path  d="M6.5 24.958V.5h1v24.345l5.29-4.278.564.793-6.438 5.207-6.27-5.21.574-.786 5.28 4.387z"/>
                </svg>
            </button>
        </div>
    </section>
    <section class="about-us" id="scroll-anchor">
        <div class="about-us__head about-us__head--l-purple">
            <div class="row">
                <div class="about-us__head-content">
                    <div class="about-us__text-block">
                        <h2 class="heading heading--dark heading--s">Задача проекта</h2>
                        <div class="text-block text-block--dark">
                            <p>Внедрить научно-обоснованные технические решения, на основе целенаправленно проведенных исследований оценки эффективности интеллектуальных решений для освещения дома и на рабочем месте на когнитивные показатели, сон и состояния здоровья коренного и пришлого населения, проживающего в субарктическом регионе России. Чтобы ответить на этот вопрос, будет проведен мониторинг суточной динамики физиологических параметров с учетом цикла сна-бодрствования, производительности и показателей здоровья. Показатели будут количественно измерены с помощью современных неинвазивных технологий (носимых и дистанционных гаджетов), в ходе крупномасштабного «полевого» исследовании в реальных условиях жизни в течение года.</p>
                        </div>
                    </div>
                    <div class="about-us__head-image">
                        <img src="/images/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us__features about-us__features--l-purple about-us__features--1">
            <div class="row">
                <ul class="about-us__features-container">
                    <li class="about-us__feature">
                        <div class="text-block text-block--s text-block--dark">
                            <p><span>150 млн. ₽</span>
                            <p>Сумма финансирования</p>
                            <p></p>
                        </div>
                    </li>
                    <li class="about-us__feature">
                        <div class="text-block text-block--s text-block--dark">
                            <p><span>15</span>
                            <p>молодых исследователей</p>
                            <p></p>
                        </div>
                    </li>
                    <li class="about-us__feature">
                        <div class="text-block text-block--s text-block--dark">
                            <p><span>более 1&nbsp;500 </span>
                            <p>участников эксперимента</p>
                            <p></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="about-us__filosofy">
            <div class="swiper-container swiper__filosofy">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide slide--filosofy" style="background-image:url(/images/faza1.jpg);">
                            <div class="slide__image">
                                <img src="/images/faza1.jpg" alt="">
                            </div>
                            <div class="slide__content">
                                <div class="slide__text-card">
                                    <div class="text-block text-block--dark slide__pagination">
                                        <span class="text-block--s slide__taxometry">Фазы исследования &mdash;</span>
                                        <span class="slide__taxometry">01 / </span>
                                            <span>03</span>
                                    </div>
                                    <h3 class="heading heading--dark heading--ms">Фаза 0 <small>(2021 год, весна)</small></h3>
                                    <div class="text-block text-block--dark text-block--s">
                                        <p><strong>Цель:</strong> предварительный отбор (скрининг) участников исследования – анкетирование коренных и некоренных жителей Арктики для определения индивидуальных особенностей сезонной зависимости, хронотипа, параметров сна, настроения и общего состояния здоровья </p>
                                        <p><strong>Методы:</strong> онлайн анкетирование через специализированный сайт (MEQ Хронотип Остберга, MCTQ Хронотип Мюнхенский тест, PSQI Питтсбургский тест качества сна, SPAQ (короткая версия) сезоно-зависимость, BDI-II шкала депрессии Бека, Опросник на пищевое поведение Йельская шкала пищевой зависимости), анкетирование на бумажных носителях, общий медицинский осмотр, измерения: рост, вес, охват талии.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide slide--filosofy" style="background-image:url(/images/faza2.jpg);">
                            <div class="slide__image">
                                <img src="/images/faza2.jpg" alt="">
                            </div>
                            <div class="slide__content">
                                <div class="slide__text-card">
                                    <div class="text-block text-block--dark slide__pagination">
                                        <span class="text-block--s slide__taxometry">Фазы исследования &mdash;</span>
                                        <span class="slide__taxometry">02 / </span>
                                        <span>03</span>
                                    </div>
                                    <h3 class="heading heading--dark heading--ms">Базовое исследование <small>4 сезона (2021-22)</small></h3>
                                    <div class="text-block text-block--dark text-block--s">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide slide--filosofy" style="background-image:url(/images/faza3.jpg);">
                            <div class="slide__image">
                                <img src="/images/faza3.jpg" alt="">
                            </div>
                            <div class="slide__content">
                                <div class="slide__text-card">
                                    <div class="text-block text-block--dark slide__pagination">
                                        <span class="text-block--s slide__taxometry">Фазы исследования &mdash;</span>
                                        <span class="slide__taxometry">03 / </span>
                                        <span>03</span>
                                    </div>
                                    <h3 class="heading heading--dark heading--ms">Воздействие HCL <small>(Антропоцентрического освещения, АЦО) в сезоны года (2022-24)</small></h3>
                                    <div class="text-block text-block--dark text-block--s">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__button swiper__button--prev">
    <span class="button  button--icon-big button--onDark">
        <span class="button__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><g transform="matrix(1 0 0 -1 1 57)"><circle cx="28" cy="28" r="28" fill="none" /><path d="M30 34.2l-1 .8-5-7.1 5-6.9 1 .8-4.4 6.1 4.4 6.3z" /></g></svg>
        </span>
    </span>
                </div>
                <div class="swiper__button swiper__button--next">
    <span class="button  button--icon-big button--onDark">
        <span class="button__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><g fill="none" fill-rule="evenodd" transform="rotate(-180 28.5 28.5)"><circle cx="28" cy="28" r="28"  transform="matrix(-1 0 0 1 56 0)"/><path  fill-rule="nonzero" d="M30 34.202l-.98.798L24 27.908 29.025 21l.97.811-4.442 6.108z"/></g></svg>
        </span>
    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="social-impact">
        <div class="row">
            <article class="single-project__article">
                <div class="single-project__article--left">
                    <h2 class="heading heading--dark heading--ms">Справка</h2>
                </div>
                <div class="single-project__article--right">
                    <div class="text-block text-block--dark">
                        <p>Конкурсный отбор мегагрантов проводился в соответствии с постановлением Правительства Тюменской области от 24.12.2019 № 532-п «О мерах государственной поддержки научных исследований, проводимых под руководством ведущих ученых, в Тюменской области» в целях реализации национального проекта «Наука» и Программы деятельности Западно-Сибирского межрегионального научно-образовательного центра мирового уровня. В конкурсе приняли участие некоммерческие организации, являющиеся участниками Западно-Сибирского НОЦ, расположенные на территории Тюменской области, ХМАО-Югры и ЯНАО.</p>
                        <p>Эту меру поддержки анонсировал Губернатор Тюменской области Александр Моор в августе 2019 года на заседании Совета научно-образовательных центров мирового уровня в Москве.</p>
                        <p>– Мы планируем дать старт программе мегагрантов для привлечения выдающихся учёных, в том числе и из других стран с определенными обязательствами с их стороны. Основные критерии при этом – создание команды молодых исследователей не менее 15 человек, количество научных публикаций и определенный период времени пребывания в России, – в ходе заседания пояснил Александр Викторович Моор.</p>
                    </div>
                </div>
                <div class="single-project__article--left"></div>
                <div class="single-project__article--right">
                    <div class="text-block text-block--dark">
                        <p>Строительство новых дорог, обустройство общественных пространств и зон отдыха, строительство велосипедных и пешеходных дорожек – это лишь несколько примеров наших инициатив, направленных на создание благоприятной окружающей среды. Будь то реконструкция покрытия баскетбольной площадки для Центра развития ребенка или комплексная реконструкция улицы Гележинио Вилко, снижающая уровень шума и загрязнение окружающей среды, – каждая наша инвестиция является вкладом в ваше благополучие.</p>
                    </div>
                </div>
            </article>
        </div>
    </section>
    @includeWhen(!$employees->isEmpty(), 'employees.list', $employees)
@endsection
