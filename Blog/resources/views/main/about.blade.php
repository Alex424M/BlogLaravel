@extends('layouts.main')
@section('posts')
    <div id="colorlib-main">
        <div class="about">
            <div class="about__img">
                <img src="{{asset('blog/main')}}/images/bckgrnd.jpeg" alt="" class="about__image">
            </div>
            <div class="about__container">
                <div class="about__photo">
                    <img src="{{asset('blog/main')}}/images/av.jpg" alt="" class="avatar">
                </div>
                <div class="text1">
                    <div class="text__subtitle">20 лет, полная занятость</div>
                    <div class="text__title">Морозов Александр</div>
                    <div class="row">
                        <div class="row__item item">
                            <div class="first__title title">Образование</div>
                            <div class="first__subtitle subtitle">
                                <p>
                                    Закончил Колледж Информатики и Программирования (4 курса)специанльность: техник-программист
                                </p>
                                <p>
                                    Учусь в МТУСИ на 1 курсе (заочно)
                                </p>
                            </div>
                            <div class="scnd__title title">Контакты</div>
                            <div class="first__subtitle subtitle">
                                <p>Тел: +7 967 271 88 96</p>
                                <p>Почта: morozovsash2014@ya.ru</p>
                            </div>
                        </div>
                        <div class="row__item item">
                            <div class="item__title title">Обо мне</div>
                            <div class="item__text">Профессиональные навыки:</div>
                            <div class="item__subtitle subtitle">
                                <li>опыт работы с HTML5, CSS3, JS;</li>
                                <li>знание JavaScript, немного JQuery;</li>
                                <li>умею писать код на PHP, знаком с Laravel;</li>
                                <li>умею создавать запросы SQL на уровне JOIN, UNION;</li>
                                <li>опыт адаптивной верстки; </li>
                                <li>опыт создания HTML-страницы сайта на основе дизайн-макетов;</li>
                                <li>знание CSS-фреймворков(SASS);</li>
                                <li>умение работать с Git;</li>
                                <li>знание PhotoShop, Figma;</li>
                            </div>
                            <div class="item__text">Дополнительные сведения</div>
                            <div class="item__subtitle subtitle">
                                <li>Английский: уровень В1</li>
                                <li>Linux</li>
                                <li>Быстро обучаем</li>
                                <li>Исполнительность</li>
                                <li>Коммуникабельность</li>
                                <li>Пунктуальность</li>
                                <li>Хочу найти интересную работу, в которой буду набираться опыта</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
