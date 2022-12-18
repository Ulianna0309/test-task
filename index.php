<?php

session_start();
require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/functions.php';

if(!empty($_POST)){
    $fields = load($fields);
    if($errors = validate($fields)){
        $res = ['errors' => $errors];
}else{
$res = ['data' => $fields];
}
exit(json_encode($res));
}

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Mere gut feeling is not enough. Need a proof? Using this app will let you find out if your spouse, husband or partner is cheating.">
    <link rel="stylesheet" href="style.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>ТОРГОВЫЕ СИГНАЛЫ ОТ ЭКСПЕРТА КАЖДЫЙ ДЕНЬ В ВАШЕМ TELEGRAM</title>
  </head>

<body class="body">

<header class="header v-container" data-header>
  <a href="" class="header__logo">
    <p class="header__logo-text">TOP SIGNALS</p>
  </a>
  <a href="" class="header__btn header__btn--desktop">получить КОНСУЛЬТАЦИЮ</a>
  <div class="header__mobile">
    <a href="" class="header__btn header__btn--mobile">получить КОНСУЛЬТАЦИЮ</a>
  </div>
  <button type="button" class="header__hamburger hamburger" data-hamburger>
    <span class="hamburger__line"></span>
    <span class="hamburger__line"></span>
    <span class="hamburger__line"></span>
    <span class="hamburger__line"></span>
  </button>
</header>

<main class="main-content">
  <section class="intro">
    <div class="intro__bg"></div>
      <div class="v-container intro__block">
        <div class="intro__block-desc v-col-lg-6">
          <h1 class="intro__title">ТОРГОВЫЕ СИГНАЛЫ ОТ ЭКСПЕРТА КАЖДЫЙ ДЕНЬ В ВАШЕМ <span class="blue">TELEGRAM</span></h1>
            <form method="post" id="form" class="contact__form needs-validation" novalidate>

                <div class="contact__form-field">
                    <input type="text" id="name" name="name" class="contact__form-input contact__form-input--name" placeholder="Введите имя" required>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните имя
                    </div>
                </div>

                <div class="contact__form-field">
                    <input type="email" id="email" name="email"  class="contact__form-input contact__form-input--email" placeholder="E-mail" required>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните почту
                    </div>
                </div>

                <div class="contact__form-field">
                    <input type="text" id="phone" name="phone"  class="contact__form-input contact__form-input--phone" placeholder="Телефон" required>
                    <div class="invalid-feedback">
                        Пожалуйста, заполните телефон
                    </div>
                </div>

                <button type="submit" class="contact__form-btn">получить ДОСТУП</button>
            </form>
        </div>
        <img class="intro__img" src="img/phone.png" alt="logo" loading="lazy">
      </div>
      
      <div class="news v-container">
          <div class="news__block">
              <div class="news__item news__item--first">
                  <h2 class="news__item-title">3 рынка</h2>
                  <p class="news__item-text">фондовый, товарный, валютный</p>
              </div>
              <div class="news__item news__item--second">
                  <h2 class="news__item-title">15%</h2>
                  <p class="news__item-text">средняя доходность в месяц</p>
              </div>
              <div class="news__item news__item--third">
                  <h2 class="news__item-title">до 10</h2>
                  <p class="news__item-text">торговых сигналов в день</p>
              </div>
              <div class="news__item news__item--fourth">
                  <h2 class="news__item-title">до 90%</h2>
                  <p class="news__item-text">прибыльность <br>сигналов</p>
              </div>
              <div class="news__item news__item--fifth">
                  <h2 class="news__item-title">от 80</h2>
                  <p class="news__item-text">пунктов <br>за сделку</p>
              </div>
          </div>
      </div>
  </section>
    <section class="about v-container">
        <h2 class="about__title">КАК НАЧАТЬ ЗАРАБАТЫВАТЬ НА СИГНАЛАХ</h2>
        <div class="about__block">
            <div class="about__block-left">
                <div class="about__block-item js-scroll slide-left">
                    <h3 class="about__block-item-title">Кто разработчик?</h3>
                    <p class="about__block-item-text">Торговые сигналы базируются на стратегиях, которые разрабатывают управляющие активами</p>
                </div>
                <div class="about__block-item js-scroll fade-in-bottom">
                    <h3 class="about__block-item-title">Как протестировать?</h3>
                    <p class="about__block-item-text">Убедиться в том, что торговые сигналы прибыльные, можно, протестировав роботов, которые их присылают</p>
                </div>
            </div>
            <div class="about__block-right">
                <div class="about__block-item js-scroll slide-right">
                    <h3 class="about__block-item-title">Как это работает?</h3>
                    <p class="about__block-item-text">Торговые сигналы будут приходить вам в Телеграм-канал, а вы будете открывать и закрывать сделки в телефоне</p>
                </div>
                <div class="about__block-item js-scroll fade-in-bottom">
                    <h3 class="about__block-item-title">Как снизить риски при торговле по сигналам?</h3>
                    <p class="about__block-item-text">Сигналы можно протестировать на демо счете в течение недели, затем начать торговать минимальными объемами</p>
                </div>
            </div>
        </div>
        
    </section>
    
  </main>



<script src="main.min.js"></script>
</body>
</html>
