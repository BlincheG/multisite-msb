@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ URL::to('css/sites/msb2.css') }}">
@endsection

@section('metrix-head')
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46797984 = new Ya.Metrika({
                        id:46797984,
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
    <noscript><div><img src="https://mc.yandex.ru/watch/46797984" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
@endsection

@section('content1')
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
                            <div class="main-banner-content">
                                <h4>Оформление Банкротства Юридических лиц</h4>
                                <h5>В рамках Законодательства РК избавим руководителей и собственников от долгов без последствий!</h5>

                                <script id="bx24_form_button" data-skip-moving="true">
                                    (function (w, d, u, b) {
                                        w['Bitrix24FormObject'] = b;
                                        w[b] = w[b] || function () {
                                            arguments[0].ref = u;
                                            (w[b].forms = w[b].forms || []).push(arguments[0])
                                        };
                                        if (w[b]['forms']) return;
                                        s = d.createElement('script');
                                        r = 1 * new Date();
                                        s.async = 1;
                                        s.src = u + '?' + r;
                                        h = d.getElementsByTagName('script')[0];
                                        h.parentNode.insertBefore(s, h);
                                    })(window, document, 'http://crm.muratov.kz/bitrix/js/crm/form_loader.js', 'b24form');

                                    b24form({
                                        "id": "9",
                                        "lang": "ru",
                                        "sec": "x8uzvl",
                                        "type": "button",
                                        "click": ""
                                    });
                                </script>
                                <button class="b24-web-form-popup-btn-9 main-banner-cta">Оставить заявку</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefits-section">
        <div class="benefits-wrapper">
            <div class="container">
                <div class="row">
                    <h2>ВАМ ГРОЗИТ ОТВЕТСТВЕННОСТЬ <br>
                        В СЛУЧАЕ НЕГРАМОТНОЙ ЛИКВИДАЦИИ КОМПАНИИ </h2>
                </div>
                <div class="row">
                    <div class="col-md-4 benefits-item">
                        <div class="benefits-img">
                            <img src="/images/icon-4.png" alt="">
                        </div>
                        <div class="benefits-title">
                            <h3>УГОЛОВНАЯ</h3>
                        </div>
                    </div>
                    <div class="col-md-4 benefits-item">
                        <div class="benefits-img">
                            <img src="/images/icon-3.png" alt="">
                        </div>
                        <div class="benefits-title">
                            <h3>АДМИНИСТРАТИВНАЯ</h3>
                        </div>
                    </div>
                    <div class="col-md-4 benefits-item">
                        <div class="benefits-img">
                            <img src="/images/icon-1.png" alt="">
                        </div>
                        <div class="benefits-title">
                            <h3>СУБСИДИАРНАЯ</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="benefits-cta-button">
                        <button class="b24-web-form-popup-btn-9 benefits-button">Узнай подробнее!</button>
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
                        <button class="b24-web-form-popup-btn-9 wh-cta-btn">Реши проблему!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-content">
                            <div class="review-text">
                                Отвечаем за вас на все запросы налоговой
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-content">
                            <div class="review-text">
                                Сроки: от 3 месяцев до ликвидации
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-item">
                        <div class="review-content">
                            <div class="review-text">
                                Более 1 млрд. списанных долгов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="choose-item">
                        <div class="choose-title">
                            Самостоятельно запускаете процесс банкротства?
                        </div>
                        <div class="choose-text">
                            <ul>
                                <li>ПОСТОЯННО ПОЛУЧАТЬ ОТКАЗЫ И ПРИОСТАНОВКИ</li>
                                <li>ТРАТИТЬ МНОГО ЛИЧНОГО ВРЕМЕНИ</li>
                                <li>ПОЛУЧАТЬ БОЛЬШУЮ ДОЗУ СТРЕССА</li>
                                <li>СТОЛКНУТЬСЯ С БЮРОКРАТИЕЙ И ОЧРЕДЬМИ</li>
                                <li>ПОНЕМНОГУ ПОСТОЯННО ДОПЛАЧИВАТЬ ЗА ОЧЕРЕДНЫЕ БУМАГИ</li>
                                <li>НАХОДИТЬСЯ ПОСТОЯННО В "РЕЖИМЕ ОЖИДАНИЯ РЕШЕНИЙ"</li>
                                <li>И ВСЕ ЭТО — НЕ ИМЕЯ ГАРАНТИЙ НА ПОЛОЖИТЕЛЬНЫЙ РЕЗУЛЬТАТ!</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="choose-item">
                        <div class="choose-title">
                            Запускаете процесс банкротства с нашими экспертами:
                        </div>
                        <div class="choose-text">
                            <ul>
                                <li>НЕ НЕСЕТЕ ЗАТРАТ НА БУХГАЛТЕРА</li>
                                <li>ЗАНИМАЕТЕСЬ БОЛЕЕ ВАЖНЫМИ ДЕЛАМИ</li>
                                <li>НЕ ВНИКАЕТЕ В ТОНКОСТИ ПРОЦЕДУРЫ ЛИКВИДАЦИИ</li>
                                <li>НЕ ПЕРЕПЛАЧИВАЕТЕ</li>
                                <li>ЗАБЫВАЕТЕ О НАЛОГОВОЙ</li>
                                <li>СПИТЕ СПОКОЙНО</li>
                                <li>И ВСЕ ЭТО - ЗНАЯ, ЧТО МЫ СДЕЛАЕМ РАБОТУ НА ОТЛИЧНО!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-title">
                        Приезжайте к нам в офис, будем рады вам помочь
                    </div>
                    <div class="cta-untitle">
                        Предварительная запись обязательна
                    </div>
                    <div class="cta-form">
                        <script id="bx24_form_inline" data-skip-moving="true">
                            (function (w, d, u, b) {
                                w['Bitrix24FormObject'] = b;
                                w[b] = w[b] || function () {
                                    arguments[0].ref = u;
                                    (w[b].forms = w[b].forms || []).push(arguments[0])
                                };
                                if (w[b]['forms']) return;
                                s = d.createElement('script');
                                r = 1 * new Date();
                                s.async = 1;
                                s.src = u + '?' + r;
                                h = d.getElementsByTagName('script')[0];
                                h.parentNode.insertBefore(s, h);
                            })(window, document, 'http://crm.muratov.kz/bitrix/js/crm/form_loader.js', 'b24form');

                            b24form({"id": "9", "lang": "ru", "sec": "x8uzvl", "type": "inline"});
                        </script>
                    </div>
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
                    Киберспортивная
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
                                <button class="b24-web-form-popup-btn-9 contact-cta-btn">Заказать звонок</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe src="https://yandex.kz/map-widget/v1/-/CBaBfYrUwB" width="100%" height="200"
                                    frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
@endsection

@section('scripts')
    <script src="/js/sites/msb2.js"></script>
@endsection