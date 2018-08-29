@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ URL::to('css/sites/msb4.css') }}">
@endsection

@section('metrix-head')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110031970-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-110031970-1');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46798080 = new Ya.Metrika({
                        id:46798080,
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
    <noscript><div><img src="https://mc.yandex.ru/watch/46798080" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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
                                <h4>Представительство в суде</h4>
                                <h5>У вас возникают споры с партнерами, контрагенты не выполняют своих обязательств и
                                    досудебное урегулирование вопросов не дает результата, наши профессиональные юристы
                                    защитят ваши интересы в суде</h5>

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

                                    b24form({"id": "11", "lang": "ru", "sec": "mszy5z", "type": "button", "click": ""});
                                </script>
                                <button class="b24-web-form-popup-btn-11 main-banner-cta">Позвонить сейчас</button>
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
                            По результатам исследований агентства по статистике только по г. Алматы за 10 месяцев 2017
                            года 11 457 компаний обращались в судебные органы для решения своих вопросов. При этом
                            количество обращений по сравнению с таким же промежутком времени за 2016 год выросло на 23%.
                            Одним из основных факторов успеха в решении судебных споров является грамотная подготовка
                            документов и участие профессионального юриста в ходе судебного разбирательства. Наши
                            специалисты – надежная поддержка в судах любых инстанций.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-wrap">
                        <div class="benefit-item">
                            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            <p>Нацелены на дальнейшее сотрудничество. Muratov Law Firm строит диалог с клиентом так,
                                что в случае необходимости мы можем взять вашу компанию на аутсорсинг.</p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                            <p>Наши юристы являются знатоками своего дела так как только 1 юрист из 200
                                кандидатов зачислится к нам в штат.</p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                            <p>
                                Качественная консультация. Уже после первой консультации у вас не останется вопросов.
                                Наши юристы распишут все четко и понятно.
                            </p>
                        </div>
                        <div class="benefit-item">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <p> Мы не меняем цен в процессе.
                                Финансовый вопрос оговаривается в договоре. После этого оплата не
                                меняется.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="benefits-btn-wrap">
                        <button class="b24-web-form-popup-btn-11 benefit-btn">Заказать звонок</button>
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
                                    <h4>100%</h4>
                                    <p>100% конфиденциальность</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-title">
                        Изучим первичные документы, построим алгоритм действий, подготовим необходимый пакет документов
                        для суда. В независимости от стадии судебного разбирательства и сложности процесса гарантируем
                        успешную защиту интересов наших клиентов!
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

                            b24form({"id": "11", "lang": "ru", "sec": "mszy5z", "type": "inline"});
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
    <script src="/js/sites/msb4.js"></script>
@endsection