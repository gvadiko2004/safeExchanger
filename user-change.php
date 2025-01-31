<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SafeXchange - Криптообменник</title>

    <link rel="stylesheet" href="./css/country.css" />
    <link rel="stylesheet" href="./css/swiper.css" />
    <link rel="stylesheet" href="./css/swiper-min.css" />
    <link rel="stylesheet" href="./css/main.css" />

    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />
  </head>
  <body>
    <div class="wrapper">
      <header class="header" id="header">
        <div class="container">
          <div class="header__inner">
            <div class="start">
              <a href="./user-panel.php" class="icon-logo">
                <div class="start">
                  <img src="./images/logo.png" width="60" alt="logo" />
                </div>

                <div class="end end-logo">
                  <h4 class="icon__logo-title">SafeXchange</h4>
                  <span class="icon__logo-slogan">Exchange for packaging</span>
                </div>
              </a>

              <ul class="header__list list-reset">
                <li class="header__list-item">
                  <a href="#header" class="header__list-link">Обмен</a>
                </li>

                <li class="header__list-item">
                  <a href="#service" class="header__list-link">Сервисы</a>
                </li>

                <li class="header__list-item">
                  <a href="#locations-block" class="header__list-link">Локации</a>
                </li>

                <li class="header__list-item">
                  <a href="#how" class="header__list-link">Как это работает?</a>
                </li>

                <li class="header__list-item">
                  <a href="#!" class="header__list-link">AML</a>
                </li>

                <a href="#!" class="user-panel bottom-reg-panel">
                <div class="icon">
                   <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                   <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                   </svg>
                </div>
               

                 <div class="bottom bottom-reg">
                 <span class="user-panel-name">safeXchange</span>
                 <span class="user-panel-mail"></span>
                 </div>
</a>

<button class="btn-reset logout">
  Выйти
</button>
              </ul>

              
            </div>

            <div class="end end-user-panel">
<a href="#!" class="user-panel">
                <div class="icon">
                   <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                   <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                   </svg>
                </div>
               

                 <div class="bottom">
                 <span class="user-panel-name">safeXchange</span>
                 <span class="user-panel-mail"></span>
                 </div>
</a>

<button class="btn-reset btn-open">
                <img width="32" src="./images/btn-open.png" alt="" />
              </button>
            </div>
          </div>
        </div>
      </header>

      
      <main class="main">
        <section class="pay-found">
          <div class="container">
            <div class="pay-found__inner">
              <h2 class="pay__title">Обмен средств</h2>

              <div class="pay-found__content">
                <h4 class="pay-found__content-septitle">
                  - Обмен происходит автоматически, после получения 32-го
                  подтверждения сети Tether TRC20 USDT.
                </h4>
                <h4 class="pay-found__content-septitle">
                  - Среднее время вывода денежных средств на карту составляет от
                  5 до 60 минут.
                </h4>

                <div class="pay-found__form">
                  <div class="top">
                    <div class="start">
                      <span class="currency-sep"> Вы платите: </span>

                      <div class="pay-input">
                        <img class="pay-input-card" width="32" src="" alt="" />
                        <span class="pay-input-crypto"> </span>
                      </div>

                      <div class="pay-input pay-input-currency">
                        <span
                          class="data-user-input data-user-input-put" id="visa-mastercard-data"
                        ></span>
                        <span class="data-user-currency">USDT</span>
                      </div>

                      <div class="pay-info-currencys">
                        <h4 class="pay-info-currencys-valut">
                          Курс валюты:<br />
                          <span class="pay-info-currencys-valut-span"></span>
                        </h4>

                        <h4 class="pay-info-currencys-valut">
                          Минимум:<br />
                          <span>300.00 USDT</span>
                        </h4>

                        <h4 class="pay-info-currencys-valut">
                          Максисум:<br />
                          <span>122 000.00 USDT</span>
                        </h4>
                      </div>
                    </div>

                    <div class="end">
                      <span class="currency-sep"> Вы получаете: </span>

                      <div class="pay-input">
                        <img class="pay-input-bank" width="32" src="" alt="" />
                        <span class="currency-sep-bank"> </span>
                      </div>

                      <div class="pay-input pay-input-currency">
                        <span
                          class="data-user-input data-user-input-sell"
                        ></span>
                        <span class="data-user-currency">RUB</span>
                      </div>
                    </div>
                  </div>

                  <div class="bottom">
                    <div class="form-cryptos form-crypto-tinkoff">
                      <form class="form-crypto" aria-colspan="">
                        <div class="form-content-cryptos">
                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name">
                              Телеграм
                            </span>

                            <input
                              class="input-reset"
                              type="text"
                              placeholder="Telegram: @example"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name">
                              Номер карты
                            </span>

                            <input
                              class="input-reset"
                              type="number"
                              placeholder="Номер карты *"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name"> Почта </span>

                            <input
                              class="input-reset"
                              type="email"
                              placeholder="E-mail *"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name">
                              Номер телефона (СБП):
                            </span>

                            <input
                              class="input-reset"
                              type="number"
                              placeholder="Номер телефона для перевода по СБП *"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name">
                              Фамилия Имя владельца карты:
                            </span>

                            <input
                              class="input-reset"
                              type="number"
                              placeholder="ФИО *:"
                            />
                          </div>
                        </div>

                        <div class="form-content-cryptos-rules">
                          <span class="form-content-cryptos-rules-title">
                            С целью противодействия легализации доходов,
                            полученных преступным путем и финансированию
                            терроризма обменные пункты проводят AML-проверки
                            поступающих от клиентов транзакций. В случае, если
                            транзакция будет идентифицирована как
                            высокорискованная, обменный пункт может
                            приостановить обменную операцию до проведения
                            проверки в соответсвии со стандартами FATF.
                          </span>

                          <div class="bottom">
                            <span>
                              <div class="form-content-cryptos-rules-info">
                                <label>
                                  <input type="checkbox" id="rulesCheckboxs">
                                  <span>
                                    Нажимая кнопку “Обменять”, я соглашаюсь с
                                    правилами и регламентами обмена
                                  </span>
                                </label>
                                
                                <a href="" class="btn-reset form-content-cryptos-btn" id="submitButtons" style="opacity: 0.5; pointer-events: none;">
                                  Обменять
                                </a>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <div class="user__form">
        <div class="user__form-acc">
          <button class="btn-reset user__form-accbtn active">Войти</button>
          <button class="btn-reset user__form-accbtn">Регистрация</button>
        </div>

        <div class="btn-close">
          <svg
            class="w-6 h-6 text-gray-800 dark:text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18 17.94 6M18 18 6.06 6"
            />
          </svg>
        </div>

        <!-- <form action="" class="user__form-inputs log-in">
          <div class="user__form-content">
            <span class="user__form-subtitle">E-mail</span>
            <input
              type="email"
              placeholder="example@gmail.com"
              class="user__form-input input-reset"
            />
          </div>

          <div class="user__form-content">
            <span class="user__form-subtitle">Пароль</span>
            <input
              type="password"
              placeholder="*********"
              class="user__form-input input-reset"
            />
          </div>

          <div class="user__form-action">
            <label class="btn-save-me">
              <input type="checkbox" />
              <span>Запомнить меня</span>
            </label>

            <button class="btn-reset btn-forgot-pass">
              Восстановить пароль
            </button>
          </div>

          <button type="submit" class="btn-reset form__btn">Войти</button>

          <div class="sign-in-help">
            <span>Войти с помощью</span>

            <ul class="list-reset">
              <li>
                <a href="#!">
                  <img src="./images/google.svg" alt="" />
                </a>
              </li>
            </ul>
          </div>
        </form> -->
      </div>

      <footer class="footer">
        <div class="container">
          <div class="footer__inner">
            <div class="start">
              <a href="./user-panel.php" class="icon-logo">
                <div class="start">
                  <img src="./images/logo.png" width="60" alt="logo" />
                </div>

                <div class="end">
                  <h4 class="icon__logo-title">SafeXchange</h4>
                  <span class="icon__logo-slogan">Обмен под защитой</span>
                </div>
              </a>
            </div>

            <div class="center">
              <ul class="footer__list list-reset">
                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link">Обмен</a>
                </li>

                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link">Сервисы</a>
                </li>

                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link">Локации</a>
                </li>

                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link">Как это работает?</a>
                </li>

                <li class="footer__list-item">
                  <a href="#!" class="footer__list-link">AML</a>
                </li>

                <div class="header-action-links">
                  <a href="./login.html" class="btn-reset header__btn active"
                    >Войти</a
                  >
                  <span>|</span>
                  <a href="./reg.html" class="btn-reset header__btn"
                    >Регистрация</a
                  >
                </div>
              </ul>
            </div>

            <div class="end end-section">
              <ul class="list-reset footer__social">
                <li class="footer__social-item">
                  <a href="#!" class="footer__social-link">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      x="0px"
                      y="0px"
                      width="100"
                      height="100"
                      viewBox="0 0 48 48"
                    >
                      <linearGradient
                        id="BiF7D16UlC0RZ_VqXJHnXa_oWiuH0jFiU0R_gr1"
                        x1="9.858"
                        x2="38.142"
                        y1="9.858"
                        y2="38.142"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop offset="0" stop-color="#33bef0"></stop>
                        <stop offset="1" stop-color="#0a85d9"></stop>
                      </linearGradient>
                      <path
                        fill="url(#BiF7D16UlC0RZ_VqXJHnXa_oWiuH0jFiU0R_gr1)"
                        d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"
                      ></path>
                      <path
                        d="M10.119,23.466c8.155-3.695,17.733-7.704,19.208-8.284c3.252-1.279,4.67,0.028,4.448,2.113	c-0.273,2.555-1.567,9.99-2.363,15.317c-0.466,3.117-2.154,4.072-4.059,2.863c-1.445-0.917-6.413-4.17-7.72-5.282	c-0.891-0.758-1.512-1.608-0.88-2.474c0.185-0.253,0.658-0.763,0.921-1.017c1.319-1.278,1.141-1.553-0.454-0.412	c-0.19,0.136-1.292,0.935-1.745,1.237c-1.11,0.74-2.131,0.78-3.862,0.192c-1.416-0.481-2.776-0.852-3.634-1.223	C8.794,25.983,8.34,24.272,10.119,23.466z"
                        opacity=".05"
                      ></path>
                      <path
                        d="M10.836,23.591c7.572-3.385,16.884-7.264,18.246-7.813c3.264-1.318,4.465-0.536,4.114,2.011	c-0.326,2.358-1.483,9.654-2.294,14.545c-0.478,2.879-1.874,3.513-3.692,2.337c-1.139-0.734-5.723-3.754-6.835-4.633	c-0.86-0.679-1.751-1.463-0.71-2.598c0.348-0.379,2.27-2.234,3.707-3.614c0.833-0.801,0.536-1.196-0.469-0.508	c-1.843,1.263-4.858,3.262-5.396,3.625c-1.025,0.69-1.988,0.856-3.664,0.329c-1.321-0.416-2.597-0.819-3.262-1.078	C9.095,25.618,9.075,24.378,10.836,23.591z"
                        opacity=".07"
                      ></path>
                      <path
                        fill="#fff"
                        d="M11.553,23.717c6.99-3.075,16.035-6.824,17.284-7.343c3.275-1.358,4.28-1.098,3.779,1.91	c-0.36,2.162-1.398,9.319-2.226,13.774c-0.491,2.642-1.593,2.955-3.325,1.812c-0.833-0.55-5.038-3.331-5.951-3.984	c-0.833-0.595-1.982-1.311-0.541-2.721c0.513-0.502,3.874-3.712,6.493-6.21c0.343-0.328-0.088-0.867-0.484-0.604	c-3.53,2.341-8.424,5.59-9.047,6.013c-0.941,0.639-1.845,0.932-3.467,0.466c-1.226-0.352-2.423-0.772-2.889-0.932	C9.384,25.282,9.81,24.484,11.553,23.717z"
                      ></path>
                    </svg>
                  </a>
                </li>
              </ul>
              
              <div class="header-action-links">
                <a href="./login.html" class="btn-reset header__btn">Войти</a>
                <span>|</span>
                <a href="./reg.html" class="btn-reset header__btn">Регистрация</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script defer src="./js/main.js"></script>
    <script defer src="./js/form.js"></script>
    <script defer src="./js/crypto.js"></script>
    <script defer src="./js/swiper.js"></script>
    <script defer src="./js/swiper-min.js"></script>

    <script>
      window.addEventListener("DOMContentLoaded", function () {
        // Получаем значения из localStorage
        const price = localStorage.getItem("cryptoPrice");
        const selectedCurrency = localStorage.getItem("selectedCurrency");
        const imagePath = localStorage.getItem("imagePath");
        const userInputPut = localStorage.getItem("userInputPut");
        const userInputSell = localStorage.getItem("userInputSell");
        const imagePathBank = localStorage.getItem("imagePathBank");
        const selectedSellCurrency = localStorage.getItem("selectedSellCurrency");
        
        // Вставляем полученные значения в соответствующие элементы, если они есть
        if (price) document.querySelector(".pay-info-currencys-valut-span").textContent = price;
        if (selectedCurrency) document.querySelector(".pay-input-crypto").textContent = selectedCurrency;
        if (imagePath) document.querySelector(".pay-input-card").setAttribute("src", imagePath);
        if (userInputPut) document.querySelector(".data-user-input-put").textContent = userInputPut;
        if (userInputSell) document.querySelector(".data-user-input-sell").textContent = userInputSell;
        if (imagePathBank) document.querySelector(".pay-input-bank").setAttribute("src", imagePathBank);
        if (selectedSellCurrency) document.querySelector(".currency-sep-bank").textContent = selectedSellCurrency;
        
        // Получаем элементы
        const payInfoText = document.querySelector(".pay-input-crypto");
        const formContentCryptos = document.querySelector(".form-content-cryptos-btn");
    
        // Если текст в payInfoText равен "USDT TRC20", изменяем ссылку на change.html
        if (payInfoText && formContentCryptos) {
          const cryptoText = payInfoText.textContent.trim();
          
          if (cryptoText === "Tether TRC20") {
            formContentCryptos.setAttribute("href", "change.html");
            formContentCryptos.style.opacity = "1"; // Делаем кнопку активной
            formContentCryptos.style.pointerEvents = "auto"; // Включаем клик
          } else {
            formContentCryptos.setAttribute("href", "#"); // Не активируем ссылку
            formContentCryptos.style.opacity = "0.5"; // Делаем кнопку неактивной
            formContentCryptos.style.pointerEvents = "none"; // Блокируем клик
          }
        }
    
        // Добавляем обработчик для чекбокса
        const checkbox = document.getElementById('rulesCheckboxs');
        const submitButton = document.getElementById('submitButtons');
        
        checkbox.addEventListener('change', () => {
          if (checkbox.checked) {
            submitButton.style.opacity = '1';
            submitButton.style.pointerEvents = 'auto'; // Включаем кнопку
          } else {
            submitButton.style.opacity = '0.5';
            submitButton.style.pointerEvents = 'none'; // Отключаем кнопку
          }
        });
    
        // Добавляем обработчик для меню
        const menuBtn = document.querySelector(".btn-open");
        const menu = document.querySelector(".header__list");
    
        menuBtn.addEventListener("click", () => {
          menu.classList.toggle("active");
    
          if (menu.classList.contains("active")) {
            document.body.style.overflow = "hidden";
            window.scrollTo(0, 0);
          } else {
            document.body.style.overflow = "";
          }
        });
    
        // Сохраняем данные в localStorage
        const userInput = document.querySelector('.data-user-input-put').getAttribute('data-user-input-put');
        const userCurrency = document.querySelector('.data-user-input-put').getAttribute('data-user-currency');
    
        localStorage.setItem('user-input-put', userInput);
        localStorage.setItem('user-currency', userCurrency);
      });
    </script>
    

    <script>
      // Находим все кнопки и элементы табов
      const tabs = document.querySelectorAll('.how__tabs-btn');
      const tabContents = document.querySelectorAll('.how__list');
    
      // Добавляем обработчик событий для каждой кнопки
      tabs.forEach(tab => {
        tab.addEventListener('click', () => {
          // Убираем активный класс у всех кнопок
          tabs.forEach(item => item.classList.remove('active'));
    
          // Добавляем активный класс на текущую кнопку
          tab.classList.add('active');
    
          // Скрываем все контенты табов
          tabContents.forEach(content => {
            content.style.display = 'none';
          });
    
          // Показываем контент для выбранного таба
          const targetTab = tab.getAttribute('data-btn');
          const activeTabContent = document.querySelector(`[data-tabs="${targetTab}"]`);
          activeTabContent.style.display = 'flex';
        });
      });
    
      // Изначально показываем контент для активного таба
      document.querySelector('[data-btn="tab-1"]').click();
    </script>

    <script>
      document
        .querySelector(".btn__hero-send")
        .addEventListener("click", function () {
          // Отримуємо значення ціни (суми криптовалюти), вибрану валюту, введену суму і шлях до картинки
          const price = document
            .querySelector(".curency-price-currencys")
            .textContent.trim();
          const selectedCurrency = document
            .querySelector(".hero__select-item.active")
            .textContent.trim();
          const imagePathBank = document
            .querySelector(".img-bank")
            .getAttribute("src");
          const imagePath = document
            .querySelector(".hero__icon-put img")
            .getAttribute("src");
          const userInputPut = document
            .querySelector(".currency-input-put")
            .value.trim();
          const userInputSell = document
            .querySelector(".currency-input-sell")
            .value.trim();

          // Отримуємо значення вибраної валюти з hero__select-sell
          const selectedSellCurrency = document
            .querySelector(".hero__select-sell")
            .textContent.trim();

          // Зберігаємо значення у LocalStorage
          localStorage.setItem("cryptoPrice", price);
          localStorage.setItem("selectedCurrency", selectedCurrency);
          localStorage.setItem("imagePath", imagePath); // hero__icon-put
          localStorage.setItem("userInputPut", userInputPut); // currency-input-put
          localStorage.setItem("userInputSell", userInputSell); // currency-input-sell
          localStorage.setItem("imagePathBank", imagePathBank); // img-bank
          localStorage.setItem("selectedSellCurrency", selectedSellCurrency); // hero__select-sell

          // Перенаправляємо на нову сторінку
          window.location.href = "visa-mastercard.html";
        });
    </script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
    const userEmail = sessionStorage.getItem("userEmail");
    if (userEmail) {
        document.querySelectorAll(".user-panel-mail").forEach(element => {
            element.textContent = userEmail;
        });
    }
});

    </script>
    
    
  </body>
</html>
