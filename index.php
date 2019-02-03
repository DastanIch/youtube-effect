<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/static/img/favicon.png">
    <title>Youtube effect</title>
    <link rel="stylesheet" href="/static/css/fonts.css?<?=rand()?>">
    <link rel="stylesheet" href="/static/css/styles.css?<?=rand()?>">
</head>
<body>
    <header>
        <div class="container_width">
            <ul class="header_menu">
                <li class="active"><a class="slide_to" href="#">программа</a></li>
                <li><a class="slide_to" href="#spickers_block">спикеры</a></li>
                <li><a class="slide_to" href="#route_section">как добраться</a></li>
                <li><a class="open_popup" data-popup="#sign_up" href="#">зарегистрироваться</a></li>
            </ul>
        </div>
    </header>
    <div class="content">
        <section class="section1">
            <div class="section1_back">
            </div>
            <div class="container_width">
                <img src="/static/img/logo.svg" class="logo_img" alt="">
                <div class="section1_text_block">
                    <div class="section1_text">
                        <h1 class="h1">14 февраля | 10:00<br>
                            Smartpoint</h1>
                        <p>YouTube – новое телевидение за меньшие деньги<br>
                            Обзор лучших кейсов по разработке креатива для YouTube<br>
                            Как выжимать из рекламы на YouTube максимум</p>
                    </div>
                    <div class="back_steps">
                        <div class="bstep1"></div>
                        <div class="bstep2"></div>
                        <div class="bstep3"></div>
                        <div class="bstep4"></div>
                        <div class="bstep5"></div>
                    </div>
                </div>
            </div>
            <img src="/static/img/section_1_figure.png" alt="" class="absolut section1_figure">
        </section>
        <section class="section2">
            <div class="container_width">
                <h2>УЗНАТЬ О КОНФЕРЕНЦИИ ЗА НЕСКОЛЬКО СЕКУНД</h2>
                <img src="/static/img/regular_figure.svg" alt="" class="absolut section2_1_figure">
            </div>
            <div class="video_block">
                <div class="video_wrapper">
                    <div class="video_wrapper_back">
                        <img src="/static/img/regular_figure.svg" alt="" class="absolut play_button">
                        <iframe class="hidden" width="100%" height="581" src="https://www.youtube.com/embed/pfxQf9NBMFM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="video_bar"><div></div></div>
            <img src="/static/img/regular_figure.svg" alt="" class="absolut section2_2_figure">
            <img src="/static/img/regular_figure.svg" alt="" class="absolut section2_3_figure">
        </section>
        <section class="section3">
            <div class="container_width">
                <div class="section3_info">
                    <div class="section3_info_item">
                        <h3><span>ДЛЯ КОГО?</span></h3>
                        <ul>
                            <li>Для владельцев малого и среднего бизнеса.</li>
                            <li>Для основателей стартап-проектов.</li>
                            <li>Для руководителей отделов маркетинга и рекламы.</li>
                        </ul>
                    </div>
                    <div class="section3_info_item">
                        <h3><span>Мы расскажем…</span></h3>
                        <ul>
                            <li>Как создавать креатив для YouTube</li>
                            <li>Как настраивать эффективный YouTube-таргетинг</li>
                            <li>Как получать от рекламы на YouTube больше за меньшие деньги</li>
                            <li>Как привлечь клиентов через YouTube</li>
                        </ul>
                    </div>
                    <div class="section3_info_item">
                        <h3><span>Что вы получите?</span></h3>
                        <ul>
                            <li>Экспертные советы, применимые на практике</li>
                            <li>Набор инструментов для эффективной рекламы на YouTube</li>
                            <li>Новые знакомства и полезные контакты</li>
                        </ul>
                    </div>
                </div>
                <div id="spickers_block" class="spickers_block">
                    <h2>Спикеры</h2>
                    <div class="spickers">
                        <div class="spicker_item">
                            <img src="/static/img/konstantin.svg" alt="">
                            <h4>КОНСТАНТИН<br>
                                СОБОЛЬ</h4>
                            <p>Режиссер, креативный директор
                                SEED by FCB, Алматы/Киев
                            </p>
                        </div>
                        <div class="spicker_item">
                            <img src="/static/img/andrey.svg" alt="">
                            <h4>АНДРЕЙ<br>
                                МИРОНЮК</h4>
                            <p>Генеральный директор SEED by FCB,
                                Алматы/Киев</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/static/img/section_3_figure.svg" alt="" class="absolut section3_figure">
        </section>
        <section id="route_section" class="section4">
            <div class="container_width">
                <div class="center_align">
                    <h3>КАК ДОБРАТЬСЯ?</h3>
                </div>
            </div>
            <div id="map">

            </div>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6716.243479524339!2d76.9176606055796!3d43.23932507989554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ee5f40685ab%3A0x8094ee0746b387e0!2sBeSmart.kz!5e0!3m2!1sru!2skz!4v1549196383964" width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>-->
        </section>
    </div>
    <div class="popup" id="sign_up">
        <div class="popup_content">
            <section class="section1">
                <div class="section1_back">
                </div>
                <div class="container_width">
                    <img src="/static/img/logo.svg" class="logo_img" alt="">
                    <div class="section1_text_block">
                        <div class="section1_text">
                            <h1 class="h1">14 февраля | 10:00<br>
                                Smartpoint</h1>
                            <p>YouTube – новое телевидение за меньшие деньги<br>
                                Обзор лучших кейсов по разработке креатива для YouTube<br>
                                Как выжимать из рекламы на YouTube максимум</p>
                        </div>
                        <div class="back_steps">
                            <div class="bstep1"></div>
                            <div class="bstep2"></div>
                            <div class="bstep3"></div>
                            <div class="bstep4"></div>
                            <div class="bstep5"></div>
                        </div>
                    </div>
                    <div class="form_block">
                        <form action="" method="post">
                            <p class="form_head">Уважаемые партнеры!</p>
                            <p class="form_head">Для участия в семинаре просим заполнить вас небольшую регистрационную форму.</p>
                            <p class="required">* Обязательно</p>
                            <div class="form_group_container">
                                <div class="form_group">
                                    <label for="input_mail">Адрес электронной почты<span class="required">*</span></label>
                                    <input type="text" required name="mail" id="input_mail" placeholder="Ваш адрес эл.почты">
                                </div>
                                <div class="form_group">
                                    <label for="input_name">Имя и Фамилия<span class="required">*</span></label>
                                    <input type="text" required name="name" id="input_name" placeholder="Мой ответ">
                                </div>
                                <div class="form_group">
                                    <label for="input_company">Компания<span class="required">*</span></label>
                                    <input type="text" required name="company" id="input_company" placeholder="Мой ответ">
                                </div>
                                <div class="form_group">
                                    <label for="input_post">Должность<span class="required">*</span></label>
                                    <input type="text" required name="post" id="input_post" placeholder="Мой ответ">
                                </div>
                                <div class="form_group">
                                    <label for="input_numbers">Номер телефона<span class="required">*</span></label>
                                    <input type="text" required name="number" id="input_numbers" placeholder="Мой ответ">
                                </div>
                            </div>
                            <a href="#" class="close_popup cancel_sign_up">Закрыть</a>
                            <button type="submit">Отправить</button>
                            <span class="just_hint">Никогда не используйте Google для передачи паролей.</span>
                        </form>
                    </div>
                </div>
                <img src="/static/img/regular_figure.svg" alt="" class="absolut section1_figure">
            </section>
        </div>
    </div>
    <footer>
        <div class="container_width center_align">
            <ul class="social">
                <li class="social_item mail">
                    <a href="mailto:newbusiness@fcbalmaty.kz"></a>
                </li>
                <li class="social_item fb">
                    <a href="https://www.facebook.com/seedbyfcb/"></a>
                </li>
                <li class="social_item inst">
                    <a href="#"></a>
                </li>
            </ul>
            <a href="//www.fcbalmaty.kz" class="creators" target="_blank">www.fcbalmaty.kz</a>
        </div>
    </footer>
    <div class="white_page"></div>
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/jquery.maskedinput.js"></script>
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script type="text/javascript" src="/static/js/main.js?<?=rand()?>"></script>
</body>
</html>