@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ URL::to('css/sites/msb1.css') }}">
@endsection

@section('metrix-head')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109840943-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109840943-2');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46797957 = new Ya.Metrika({
                        id:46797957,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/46797957" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <img src="/images/logo-cmp.png" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="header-info">
                        <div class="header-item">
                            <div class="header-item-icon">
                                <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="header-item-info">
                                <h4>Время работы</h4>
                                <p>Пн-Пт 09:00 - 18:00</p>
                            </div>
                        </div>
                        <div class="header-item">
                            <div class="header-item-icon">
                                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="header-item-info">
                                <h4>Электронная почта</h4>
                                <p><a href="mailto:info@muratov.kz">info@muratov.kz</a></p>
                            </div>
                        </div>
                        <div class="header-item">
                            <div class="header-item-icon">
                                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="header-item-info">
                                <h4>Call-центр</h4>
                                <p><a href="tel:+77272777600">+7 727 2 777 600</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="main-banner">
        <div class="main-banner-bg" style="background-image: url('/images/banner-bg.jpg')">
            <div class="main-banner-content-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-banner-video-text-wrap">
                                <div class="main-banner-video">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/7uK2mPhMVws" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="main-banner-content">
                                    <h4>Юридический аутсорсинг</h4>
                                    <h5>Не можешь выбрать между гарантированной юридической безопасностью и экономией
                                        бюджета?<br>
                                        Найми АРМИЮ высококлассных юристов<br>
                                        всего лишь за <b>23 879 тенге в день!</b>
                                    </h5>

                                    <button class="b24-web-form-popup-btn-8 main-banner-cta callback-trigger">Оставить заявку</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews-section">
        <div class="container">
            <div class="row">
                <h2>Три пакета аутсорса</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-content">
                            <div class="review-text">
                                Базовый
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-content">
                            <div class="review-text">
                                Стандарт
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-content">
                            <div class="review-text">
                                Элитный
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-title-text">
                        <h2>
                            Часто встречаетесь с такими проблемами?
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-wrap">
                        <div class="benefit-item">
                            <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                            <p>
                                Низкоквалифицированный юрист<br>
                                Экономия на юридических услугах может привести к серьезным последствиям.
                                Высококвалифицированный юрист обеспечит вам гарантированную юридическую
                                безопасность!</p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            <p>
                                Претензии, иски, завышенные налоги и штрафы<br>
                                Причиной этих явлений в бизнесе является плохо составленный договор! Что в последствии
                                влияет на репутацию вашей компании на рынке!
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <p>
                                Кредиторская задолженность<br>
                                В первую очередь вредит вашим оборотным средствам, что мешает
                                вам вести свою деятельность. Причина кроется в не прописанных в договоре условиях оплаты
                                и в форс-мажорах !
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <p>
                                Контрагенты не выполняют свои обязательства<br>
                                В работу юриста-эксперта так же входит проверка будущих партнеров, подготовка условий
                                взаимодействия, переговоры и защита основного договора.
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <p>
                                Хорошая юридическая защита бьет по бюджету<br>
                                Эксперт стоит дорого, а слабый и дешевый специалист стоит в итоге еще дороже. При этом
                                Топ - менеджмент постоянно сталкивается с арестом счетов, исками, жалобами и
                                претензиями, а кассовые разрывы подрывают деятельность компании!
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <p>
                                Штатный юрист<br>
                                Зачастую не каждой компании нужен юрист в штате и Топ - менеджменту не выгодно платить
                                человеку за 10 часов работы в месяц - полную ставку. Однако приходится оборудовать место
                                работы, перечислять налоговые отчисления и предоставлять рабочее пространство.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-btn-wrap .callback-trigger">
                        <button class="b24-web-form-popup-btn-8 benefit-btn">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us-section">
        <div class="why-us-wrapper">
            <div class="container">
                <div class="row">
                    <h2>Почему вы должны выбрать нашу команду!?</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 why-us-benefits">
                        <div class="card">
                            <div class="card-image">
                                <img src="/images/wh3.png" alt="">
                            </div>
                            <div class="card-content">
                                <div class="card-title">
                                    Трехступенчатая система контроля качества
                                </div>
                                <div class="card-text">
                                    <p><b>Ваши задачи</b> решаются целой <b>командой специалистов!</b></p>
                                    <p><b>Эксперты</b> составляют <b>индивидуальную стратегию</b> решения ваших задач.
                                    </p>
                                    <p>Все дела распределяются между старшими специалистами и исполняются в четких
                                        рамках
                                        подготовленной стратегии сотрудниками основных подразделений.</p>
                                    <p class="bordered italic">Стоимость работ <b>23 879 тенге</b> за 1 день!</p>
                                    <p class="italic"><b>Подберите себе</b> необходимое количество дней/месяцев
                                        юридической
                                        безопасности с участием
                                        нашей команды! </p>
                                    <p class="italic">Наша задача, <b>обезопасить Вас</b>, чтобы вы могли
                                        <b>спокойно</b>
                                        заниматься
                                        стратегическими задачами по
                                        <b>захвату рынка!</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 why-us-benefits">
                        <div class="card">
                            <div class="card-image">
                                <img src="/images/wh2.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <div class="card-title">
                                    Экономия на штатном юристе и гарантия безопасности
                                </div>
                                <div class="card-text">
                                    <p>
                                        Штатный юрист - не всегда гарантия безопасности, так как зачастую
                                        невозможно оценить экспертность специалиста.
                                    </p>
                                    <p>В лучшем случае содержать рядового Юриста в штате обходится примерно 300 000
                                        тенге в месяц.</p>
                                    <p>Если посмотреть что входит в задачи рядового юриста и учесть, что он не может
                                        грамотно выстроить стратегию по решению сложных
                                        юридических задач.
                                    </p>
                                    <p>Не говоря уже о
                                        рисках финансовых и репутационных потерь, а в отдельных случаях и привлечение к
                                        административной и
                                        уголовной ответственность.</p>
                                    <p class="italic-underline"><b>В таком случае Аутсорсинг Юридических услуг
                                            идеальное
                                            решение для вашего Бизнеса!</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wh-btn">
                        <button class="b24-web-form-popup-btn-8 wh-cta-btn">Реши проблему!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews-section">
            <div class="container">
                <div class="row">
                    <h2>Отзывы наших клиентов</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="review-item">
                            <div class="review-content">
                                <div class="review-text">
                                    «Muratov Law Firm» является нашим партнером по правовому сопровождению деятельности
                                    нашей
                                    компании. Отличительной чертой работы компании является высокий профессионализм,
                                    организованность сотрудников и сильный командный дух.
                                </div>
                                <div class="review-wh">
                                    <div class="review-img">
                                        <img src="/images/review-1.png" alt="">
                                    </div>
                                    <div class="review-wh-text-wrap">
                                        <div class="review-wh-title">
                                            Ситпаев Г.Г.
                                        </div>
                                        <div class="review-wh-text">
                                            Генеральный директор РГП «Институт ботаники и фитоинтродукции» Комитета
                                            Науки
                                            МОН РК
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="review-item">
                            <div class="review-content">
                                <div class="review-text">
                                    Мы привлекали юридическую компанию ТОО «Muratov Law Firm» в качестве юридического
                                    департамента
                                    на основе юридического аутсорсинга. Мы сотрудничаем с ними более года. За это время
                                    была
                                    проведена прекрасная работа по правовому сопровождению деятельности компании,
                                    подготовка
                                    и
                                    анализ договоров, участие юристов в наиболее важных сделках, активная работа с
                                    государственными
                                    органами, в том числе и по вопросу оспаривания некоторых нормативно-правовых актов.
                                </div>
                                <div class="review-wh">
                                    <div class="review-img">
                                        <img src="/images/review-2.png" alt="">
                                    </div>
                                    <div class="review-wh-text-wrap">
                                        <div class="review-wh-title">
                                            Досбаев Т.Б.
                                        </div>
                                        <div class="review-wh-text">
                                            Генеральный директор ТОО «БайТурСервис»
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="review-item">
                            <div class="review-content">
                                <div class="review-text">
                                    Как директору эксклюзивного поставщика БАД-ов в Казахстане мне очень важно иметь
                                    юридическую
                                    защиту, авторскую безопасность и людей, которые могут найти и пресечь действия
                                    мошенников,
                                    реализующих контрафакт на мои товары. Специалисты «Muratov Law Firm»показали и
                                    доказали
                                    на
                                    деле
                                    свою высочайшую квалификацию и оперативность действий. От других юристов я такого не
                                    видел!
                                    Рекомендую!
                                </div>
                                <div class="review-wh">
                                    <div class="review-img">
                                        <img src="/images/review-3.png" alt="">
                                    </div>
                                    <div class="review-wh-text-wrap">
                                        <div class="review-wh-title">
                                            Кенгербаев Д.М.
                                        </div>
                                        <div class="review-wh-text">
                                            Директор ТОО «КазБад»
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="cta-title">
                    Приезжайте к нам в офис, будем рады вам помочь
                </div>
                <div class="cta-untitle">
                    Предварительная запись обязательна
                </div>
            </div>
        </div>
    </section>
    <section class="clients-section">
        <div class="container">
            <div class="row">
                <div class="clients-title">
                    Наши клиенты
                </div>
            </div>
            <div class="row">
                <div class="carousel-wrap">
                    <div class="carousel-item">
                        <img src="/images/client-1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-3.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-4.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-5.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-6.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-7.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/client-8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <section class="contacts-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contacts-title">
                            Наши контакты
                        </div>
                        <ul class="contacts-ul">
                            <li>
                                <a href="tel:+77272777600">Контактный телефон: +7 (727) 277-76-00</a>
                            </li>
                            <li>
                                <a href="mailto:Info@muratov.kz">Электронная почта: info@muratov.kz</a>
                            </li>
                            <li>
                                Казахстан, Алматы
                            </li>
                            <li>
                                "БЦ Нурлы-Тау" проспект Аль-Фараби, 19 блок 3Б, 8 этаж
                            </li>
                            <li>
                                <button class="b24-web-form-popup-btn-8 contact-cta-btn">Заказать звонок</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="map" id="map" style="width:100%" height="200px">
                            <iframe src="https://yandex.kz/map-widget/v1/-/CBu~jHvnLD"  frameborder="1" allowfullscreen="true" width="100%" height="200px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
@endsection

@section('scripts')
    <script src="/js/sites/msb1.js"></script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [43.229527, 76.946531],
                zoom: 18
            });

            DG.marker([43.229527, 76.946531]).addTo(map).bindPopup('Аль-Фараби 5 к2а!');
        });
    </script>
@endsection