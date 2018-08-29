@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ URL::to('css/sites/msb3.css') }}">
@endsection

@section('metrix-head')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109990849-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-109990849-1');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter46798014 = new Ya.Metrika({
                        id: 46798014,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/46798014" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
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
                                <p><a href="tel:+77779650999">+77779650999</a></p>
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
                                <h4>Взыскание задолженности любой сложности, для нас нет ничего невозможного!</h4>
                                <h5>Чаще всего возникновение дебиторской задолженности происходит из-за неправильного
                                    составления договоров. Воспользуйтесь бесплатной консультацией в нашем офисе и
                                    узнайте насколько ваш договор с контрагентами обеспечивает безопасность.</h5>

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

                                    b24form({"id": "10", "lang": "ru", "sec": "0m7ctc", "type": "button", "click": ""});
                                </script>
                                <button class="b24-web-form-popup-btn-10 main-banner-cta">Отправить заявку</button>
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
                            За 5 лет работы нашими экспертами выиграно 98% судебных дел и взыскано в пользу наших
                            клиентов более 200 000 000 тенге.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-wrap">
                        <div class="benefit-item">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <p>
                                Сбор и экспертиза всех документов</p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            <p>
                                Оценка доводов заказчика и оппонента
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            <p>
                                Составление всей документации необходимой для суда
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            <p>
                                Представительство интересов клиента в суде
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            <p>
                                Получение исполнительного листа и судебных актов.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-btn-wrap">
                        <button class="b24-web-form-popup-btn-10 benefit-btn">Узнать подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wu-title">
                        <h2>Почему именно Muratov Law Firm?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wu-text-content">
                        <h5>В нашей компании проводится жесткий отбор самых лучших сотрудников – только 1 кандидат из
                            200 становится частью нашей команды. Все дела клиентов рассматриваются не одним человеком, а
                            командой профессионалов, что позволяет решать вашу проблему в комплексе. За каждым клиентом
                            закрепляется персональный менеджер и устанавливается трёхступенчатая система контроля
                            качества.</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wu-btn-wrap">
                        <button class="b24-web-form-popup-btn-10 wu-btn">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="counter-section">
        <div class="counter-bg" style="background-image: url('/images/counter-bg.jpg')">
            <div class="counter-content-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa fa-trophy" aria-hidden="true"></i>
                                </div>
                                <div class="counter-info">
                                    <h4>5</h4>
                                    <p>Лет на рынке юридических услуг</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                </div>
                                <div class="counter-info">
                                    <h4>483</h4>
                                    <p>Дела с положительным результатом</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                </div>
                                <div class="counter-info">
                                    <h4>200 000 000</h4>
                                    <p>Тенге было взыскано с задолженников</p>
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
                <div class="col-md-12">
                    <div class="cta-text">
                        <h2>Приезжайте к нам в офис, будем рады вам помочь</h2>
                        <h4>Предварительная запись обязательна</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
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

                            b24form({"id": "10", "lang": "ru", "sec": "0m7ctc", "type": "inline"});
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients-section">
        <div class="container">
            <div class="row">
                <h2 class="clients-title">НАШИ КЛИЕНТЫ И ПАРТНЕРЫ</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-carousel">
                        <div class="client-item">
                            <img src="/images/client-1.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-2.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-3.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-4.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-5.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-6.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-7.png" alt="">
                        </div>
                        <div class="client-item">
                            <img src="/images/client-8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-info">
                        Мы находимся по адресу: <br>
                        Казахстан, Алматы, "БЦ Нурлы-Тау" проспект Аль-Фараби, 19 блок 3Б, 8 этаж <br>
                        Телефоны: +7 (727) 2 777 600, +7 (727) 311 24 20 <br>
                        Email: info@muratov.kz
                    </div>
                    <div class="footer-social-media">
                        <a href="https://instagram.com/muratov_law_firm">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://vk.com/muratov_law_firm">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/Muratovlegal/">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    <script src="/js/sites/msb3.js"></script>
@endsection