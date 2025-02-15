<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SafeExhcanger - Криптообменник</title>

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
                  <h4 class="icon__logo-title">SafeExhcanger</h4>
                  <span class="icon__logo-slogan">Обмен под защитой</span>
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
                  <a href="./aml.php" class="header__list-link">AML</a>
                </li>

                <a href="./user-profile.php" class="user-panel bottom-reg-panel">
                <div class="icon">
                   <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                   <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                   </svg>
                </div>
               

                 <div class="bottom bottom-reg">
                 <span class="user-panel-name">SafeExhcanger</span>
                 <span class="user-panel-mail"></span>
                 </div>
</a>

<a href="./index.html" class="btn-reset logout">
  Выйти
</a>
              </ul>

              
            </div>

            <div class="end end-user-panel">
<a href="./user-profile.php" class="user-panel">
                <div class="icon">
                   <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                   <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                   </svg>
                </div>
               

                 <div class="bottom">
                 <span class="user-panel-name">SafeExhcanger</span>
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
                  - Среднее время вывода денежных средств: от 5 до 60 минут.
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
                        <span class="data-user-currency data-user-currency-crypto"></span>
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
                              class="input-reset inp-form-crypto-input-name"
                              type="text"
                              placeholder="Telegram: @example"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name">
                              Номер карты
                            </span>

                            <input
                              class="input-reset form-crypto-input-cardnumber"
                              type="number"
                              placeholder="Номер карты получателя"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name"> Почта </span>

                            <input
                              class="input-reset form-crypto-input-email"
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
                              placeholder="Например: +79012345567"
                            />
                          </div>

                          <div class="form-crypto-input">
                            <span class="form-crypto-input-name">
                            Ф.И.О. получателя:
                            </span>

                            <input
                              class="input-reset inp-card-user"
                              type="text"
                              placeholder="Ф.И.О. владельца карты, полностью"
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

                                

                                <span class="btn-reset btn-change-user" style="opacity: 0.6; pointer-events: none;">
                                  Обменять
                                </span>
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
      
      
    <div class="popup-change-user">
      <button class="btn-reset btn-close-pop-change">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
</svg>

<span>Назад</span>
      </button>
      <div class="container-xl">
        <h2 class="popup-change-user-order">Заявка создана</h2>

        <div class="popup-change-user-content">
          <div class="start start-content">
            <h4 class="popup-change-user-content-title">Детали по обмену</h4>

            <ul class="popup-change-user-content-list list-reset">
              <li class="popup-change-user-content-list-item">
                <span>ID</span>
                <span class="popup-change-user-content-list-item-id"></span>
              </li>

              <!-- <li class="popup-change-user-content-list-item">
                <span>Курс</span>
                <span class="popup-change-user-content-list-item-course"
                  >1 : 42.96</span
                >
              </li> -->
            </ul>

            <ul class="popup-change-user-content-change list-reset">
              <li class="popup-change-user-content-change-item">
                <div class="start">
                  <h4 class="popup-change-user-content-change-title ix-ctypo">
                    Отдадите <span></span>
                  </h4>

                  <span class="popup-change-user-content-change-usdt">
                    2222 USDT
                  </span>
                </div>

                <div class="end">
                  <div class="popup-change-user-content-change-icon">
                    <img src="./images/trc20.svg" alt="">
                  </div>
                </div>
              </li>
            </ul>

            <ul
              class="popup-change-user-content-change popup-change-user-content-bank list-reset"
            >
              <li class="popup-change-user-content-change-item">
                <div class="start">
                  <h4 class="popup-change-user-content-change-title ix-bank">
                    Получите <span></span>
                  </h4>

                  <span class="popup-change-user-content-change-usdt popup-change-user-content-change-usdtt">
                   
                  </span>
                </div>

                <div class="end">
                  <div class="popup-change-user-content-change-icon popup-change-user-content-change-icbank">
                    <img src="./images/b1.png" alt="">
                  </div>
                </div>
              </li>
            </ul>

            <div class="title-count-send">
              <h4 class="popup-change-user-content-titles">Номер карты получателя:</h4>
              <span class="card-number">4441 5423 4665 2553</span>
            </div>

            <div class="title-count-send">
              <h4 class="popup-change-user-content-titles">E-mail:</h4>
              <span class="card-email"></span>
            </div>

            <div class="title-count-send">
              <h4 class="popup-change-user-content-titles">Telegram:</h4>
              <span class="card-telegram"></span>
            </div>
          </div>

          <div class="end end-content">
           

            <div class="bottom bottom-send">
              <h2 class="bottom-send-title">Проверьте и подтвердите данные:</h2>

              <div class="bottom-send-content">
                <div class="bottom-send-content-bank-content bottom-send-content-bank">
                  <h4 class="bottom-send-content-bank-content-title">Получите</h4>

                  <div class="input">
                     <div class="start">
                       <div class="bottom-send-content-bank-acc ixx-bank">
                         <img src="" alt="">
   
                         <span></span>
                       </div>
                     </div>
   
                     <div class="end">
                       <h4 class="bottom-send-content-bank-acc-money">
                       </h4>
                     </div>
                  </div>
                </div>

                <div class="bottom-send-content-bank-content bottom-send-content-card">
                  <h4 class="bottom-send-content-bank-content-title">Номер карты::</h4>

                  <div class="input">
                     <div class="end">
                       <h4 class="bottom-send-content-bank-acc-card">
                         
                       </h4>
                     </div>
                  </div>
                </div>

                <div class="bottom-send-content-bank-content bottom-send-content-mail">
                  <h4 class="bottom-send-content-bank-content-title">E-mail:</h4>

                  <div class="input">
                     <div class="end">
                       <h4 class="bottom-send-content-bank-acc-mail">
                         
                       </h4>
                     </div>
                  </div>
                </div>

                <div class="bottom-send-content-bank-content bottom-send-content-telegram">
                  <h4 class="bottom-send-content-bank-content-title">Telegram:</h4>

                  <div class="input">
                     <div class="end">
                       <h4 class="bottom-send-content-bank-acc-telegram">
                         
                       </h4>
                     </div>
                  </div>
                </div>
              </div>

              <div class="bottom-send-content-bank-content  bottom-send-content-bank-user bottom-send-content-bank">
                  <h4 class="bottom-send-content-bank-content-title">Ф.И.О владельца карты:</h4>

                  <div class="input">
                     <div class="start">
                       <div class="bottom-send-content-bank-acc ixx-bank-name">
                         <span></span>
                       </div>
                     </div>
   
                     <div class="end">
                       <h4 class="bottom-send-content-bank-acc-money">
                       </h4>
                     </div>
                  </div>
                </div>

              <p>
                С целью противодействия легализации доходов, полученных преступным путем и финансированию терроризма обменные пункты проводят AML-проверки поступающих от клиентов транзакций. В случае, если транзакция будет идентифицирована как высокорискованная, обменный пункт может приостановить обменную операцию до проведения проверки в соответсвии со стандартами FATF.
              </p>
            </div>

            <a href="#!" class="btn-reset form-content-cryptos-time form-content-cryptos-btn" id="submitButtons" style="opacity: 0.5; pointer-events: none;">
                                  Обменять
</a>
          </div>
        </div>
      </div>
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
                  <h4 class="icon__logo-title">SafeExhcanger</h4>
                  <span class="icon__logo-slogan">Обмен под защитой</span>
                </div>
              </a>
            </div>

            <div class="center">
            <ul class="footer__list list-reset">
                <li class="footer__list-item">
                  <a href="./user-panel.php#header" class="footer__list-link">Обмен</a>
                </li>

                <li class="footer__list-item">
                  <a href="./user-panel.php#service" class="footer__list-link">Сервисы</a>
                </li>

                <li class="footer__list-item">
                  <a href="./user-panel.php#locations-block" class="footer__list-link"
                    >Локации</a
                  >
                </li>

                <li class="footer__list-item">
                  <a href="./user-panel.php#how" class="footer__list-link">Как это работает?</a>
                </li>

                <li class="footer__list-item">
                  <a href="./aml.php" class="footer__list-link">AML</a>
                </li>
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
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="footer-copyright">
      <p>&copy; 2025 SafeExhcanger. Все права защищены.</p>
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
    
        // Если текст в payInfoText равен "USDT TRC20", изменяем ссылку на user-pay.php
        if (payInfoText && formContentCryptos) {
  const cryptoText = payInfoText.textContent.trim();
  
  // Список криптовалют для проверки
  const validCryptos = [
    "USDT TRC20",
    "USDT BNB",
    "Bitcoin BTC",
    "Litecoin LTC",
    "USDT SOL",
    "Smart Chain BNB",
    "Ethereum ETH",
    "USDT ERC20",
    "Tron TRX",
    "Dogecoin DOGE"
  ];

  if (validCryptos.includes(cryptoText)) {
    formContentCryptos.setAttribute("href", "./user-pay.php");
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
        document.addEventListener("DOMContentLoaded", function () {
    const userEmail = sessionStorage.getItem("userEmail");
    if (userEmail) {
        document.querySelectorAll(".user-panel-mail").forEach(element => {
            element.textContent = userEmail;
        });
    }
});

    </script>
    
    <script>
      // header__list
      
      const listHeaderItem = document.querySelectorAll(".header__list-item");
      const menuBtn = document.querySelector(".btn-open");
      const menu = document.querySelector(".header__list");
      
      listHeaderItem.forEach((item) => {
        item.addEventListener("click", function () {
          // Закрытие меню при клике на пункт списка
          menu.classList.remove("active");
          document.body.style.overflow = "auto"; // Восстановление прокрутки
        });
      });
      
      menuBtn.addEventListener("click", () => {
        // Переключение класса active для открытия/закрытия меню
        menu.classList.toggle("active");
      
        if (menu.classList.contains("active")) {
          // Если меню открыто, скрыть прокрутку
          document.body.style.overflow = "hidden";
          window.scrollTo(0, 0); // Перемещение на начало страницы
        } else {
          // Если меню закрыто, восстановить прокрутку
          document.body.style.overflow = "auto";
        }
      });
      
      // Опционально, можно добавлять поведение для закрытия меню при клике вне его
      document.addEventListener("click", (e) => {
        if (!menu.contains(e.target) && !menuBtn.contains(e.target)) {
          menu.classList.remove("active");
          document.body.style.overflow = "auto";
        }
      });
      </script>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
    const currencySpan = document.querySelector(".data-user-currency.data-user-currency-crypto");
    
    // Получаем сохраненное значение
    const selectedCurrency = localStorage.getItem("selectedCurrency");

    if (selectedCurrency) {
        currencySpan.textContent = selectedCurrency;
    }
});

      </script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const btnChangeUser = document.querySelector(".btn-change-user");
  const popupChangeUser = document.querySelector(".popup-change-user");
  const checkbox = document.getElementById("rulesCheckboxs");
  const actualTimeSpan = document.querySelector(".actuallity-bottom-count");
  const actualStartTime = document.querySelector(".actuallity-top-start-time");
  const actualStartTimeRemove = document.querySelector(".btn-close-pop-change");

  actualStartTimeRemove.addEventListener('click', function() {
    popupChangeUser.classList.remove('active');
  });

  if (btnChangeUser && popupChangeUser && checkbox) {
    checkbox.addEventListener("change", function () {
      if (this.checked) {
        btnChangeUser.style.opacity = "1";
        btnChangeUser.style.pointerEvents = "auto";
      } else {
        btnChangeUser.style.opacity = "0.6";
        btnChangeUser.style.pointerEvents = "none";
      }
    });

    btnChangeUser.addEventListener("click", function () {
      let inputs = document.querySelectorAll(".form-crypto-input input");
      let valid = true;

      inputs.forEach(function(input) {
        if (input.value.trim() === "") {
          input.style.border = "1px solid  #e01e1ee3";
          valid = false;
        } else {
          input.style.border = "";
        }

        input.addEventListener('input', function() {
          if (input.value.trim() !== "") {
            input.style.border = ""; // Сбрасываем красную границу при вводе
          }
        });
      });

      if (!valid) {
        return;
      }

      if (btnChangeUser.style.pointerEvents === "auto") {
        popupChangeUser.classList.add("active");

        const now = new Date();
        const formattedDateTime = now.toLocaleString("uk-UA", {
          day: "2-digit",
          month: "2-digit",
          year: "numeric",
          hour: "2-digit",
          minute: "2-digit",
        });

        actualTimeSpan.textContent = `${formattedDateTime}`;

        const endTime = new Date(now.getTime() + 60 * 60000);

        function updateTimer() {
          const now = new Date();
          const timeDiff = endTime - now;

          if (timeDiff <= 0) {
            actualStartTime.textContent = "Время вышло!";
            clearInterval(timerInterval);
          } else {
            const minutes = Math.floor(timeDiff / 60000);
            const seconds = Math.floor((timeDiff % 60000) / 1000);
            actualStartTime.textContent = `${minutes}:${seconds} мин`;
          }
        }

        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();
      }
    });
  }
});
</script>



<script>
document.querySelector(".btn-change-user").addEventListener("click", function () {
    let cardNumber = document.querySelector(".form-crypto-input-cardnumber").value.trim();
    document.querySelector(".bottom-send-content-bank-acc-card").textContent = cardNumber;
    let sellValue = document.querySelector(".data-user-input-sell").textContent.trim();
    document.querySelector(".bottom-send-content-bank-acc-money").textContent = sellValue;
    document.querySelector(".popup-change-user-content-change-usdtt").textContent = sellValue;
    let cardValue = document.querySelector(".bottom-send-content-bank-acc-card").textContent.trim();
    document.querySelector(".card-number").textContent = cardValue;
    let payInputText = document.querySelector(".pay-input .currency-sep-bank").textContent.trim();
    document.querySelector(".ix-bank span").textContent = payInputText;
    document.querySelector(".bottom-send-content-bank-acc.ixx-bank span").textContent = payInputText;
    let cryptoValue = document.querySelector(".pay-input-crypto").textContent.trim();
    document.querySelector(".popup-change-user-content-change-title span").textContent = cryptoValue;
    let usdtValue = document.querySelector("#visa-mastercard-data").textContent.trim();
    document.querySelector(".popup-change-user-content-change-usdt").textContent = usdtValue;
    let cardImgSrc = document.querySelector(".pay-input-card").getAttribute("src");
    document.querySelector(".popup-change-user-content-change-icon img").setAttribute("src", cardImgSrc);
    let bankImgSrc = document.querySelector(".pay-input-bank").getAttribute("src");
    document.querySelector(".popup-change-user-content-change-icbank img").setAttribute("src", bankImgSrc);
    document.querySelector(".bottom-send-content-bank-acc img").setAttribute("src", bankImgSrc);
    let emailValue = document.querySelector(".form-crypto-input-email").value.trim();
    document.querySelector(".card-email").textContent = emailValue;
    let telegramValue = document.querySelector(".inp-form-crypto-input-name").value.trim();
    document.querySelector(".card-telegram").textContent = telegramValue;
    document.querySelector(".bottom-send-content-bank-acc-telegram").textContent = telegramValue;
    let emailRealTimeValue = document.querySelector(".card-email").textContent.trim();
    document.querySelector(".bottom-send-content-bank-acc-mail").textContent = emailRealTimeValue;
});
</script>



<script>
  document.addEventListener("DOMContentLoaded", () => {
    const targetElement = document.getElementById("visa-mastercard-data");
    const observer = new MutationObserver(() => {
        localStorage.setItem("visaMastercardData", targetElement.innerText);
    });
    observer.observe(targetElement, { childList: true, subtree: true });
});
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const cryptoTitleContainer = document.querySelector(".popup-change-user-content-change-title");
    if (!cryptoTitleContainer) return;

    const cryptoTitle = cryptoTitleContainer.querySelector("span");

    const addressMap = {
        "USDT TRC20": "TMTfLaJT5N2BZ2qtAT4G6qB8dJAcwVXgHA",
        "USDT BNB": "0x4e54b9bb5fa1998820832a85d65554d3d68ff6c4",
        "Bitcoin BTC": "1BAoZkXTR2VNqhEA6mhsJg3mK7Damo5KYD",
        "Litecoin LTC": "ltc1qdwuk4jd9ughx56y34w8jta7e5m48hkly2m0smm",
        "USDT SOL": "3Kut3SYPFyCVhxqoh3sXwTnCDfW1AS2gcaHPTRow6efs",
        "Smart Chain BNB": "0x4e54b9bb5fa1998820832a85d65554d3d68ff6c4",
        "Ethereum ETH": "0x4e54b9bb5fa1998820832a85d65554d3d68ff6c4",
        "USDT ERC20": "0x4e54b9bb5fa1998820832a85d65554d3d68ff6c4",
        "Tron TRX": "TMTfLaJT5N2BZ2qtAT4G6qB8dJAcwVXgHA",
        "Dogecoin DOGE": "DLMAMUzQUTtHURxgzryKoW5uoLpuHPtTMx"
    };

    const qrImageMap = {
        "USDT TRC20": "./cryptos/USDT TRC20/qr.png",
        "USDT BNB": "./cryptos/USDT BEP20/qr.png",
        "Bitcoin BTC": "./cryptos/BITCOIN/qr.png",
        "Litecoin LTC": "./cryptos/LITECOIN/qr.png",
        "USDT SOL": "./cryptos/USDT SOL/qr.png",
        "Smart Chain BNB": "./cryptos/BNB BEP20/qr.png",
        "Ethereum ETH": "./cryptos/ETHEREUM ERC20/qr.png",
        "USDT ERC20": "./cryptos/USDT ERC20/qr.png",
        "Tron TRX": "./cryptos/TRON TRC20/qr.png",
        "Dogecoin DOGE": "./cryptos/DOGECOIN/qr.png"
    };

    const updateCrypto = () => {
        const selectedCrypto = cryptoTitle?.innerText.trim();
        if (selectedCrypto) {
            const address = addressMap[selectedCrypto] || "";
            const qrImagePath = qrImageMap[selectedCrypto] || "";

            // Сохраняем в localStorage
            localStorage.setItem("qrAddress", address);
            localStorage.setItem("qrImagePath", qrImagePath);
        }
    };

    // Следим за изменением <span>
    const observer = new MutationObserver(updateCrypto);
    if (cryptoTitle) observer.observe(cryptoTitle, { childList: true, subtree: true });

    // Запасной вариант (если MutationObserver не сработает)
    setInterval(updateCrypto, 1000);
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {
  let spanElement = document.querySelector(".ix-ctypo span");

  if (spanElement) {
    let observer = new MutationObserver(() => {
      let value = spanElement.textContent;
      if (value) {
        localStorage.setItem("popPayCryptoValue", value);
        window.dispatchEvent(new Event("storage")); // Принудительное обновление
      }
    });

    observer.observe(spanElement, { childList: true, subtree: true });
  }
});

</script>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const visaMastercardData = document.querySelector("#visa-mastercard-data");
    
    if (visaMastercardData) {
        const value = visaMastercardData.textContent.trim();
        if (value) {
            // Сохраняем значение в localStorage
            localStorage.setItem("visaMastercardData", value);
        }
    }
});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const btnChangeUser = document.querySelector(".btn-change-user");
    
    if (btnChangeUser) {
        btnChangeUser.addEventListener("click", function () {
            const currencyValue = document.querySelector(".data-user-currency.data-user-currency-crypto")?.innerText.trim();
            
            if (currencyValue) {
                localStorage.setItem("userCurrency", currencyValue);
            }
        });
    }
});

</script>


<script>
  // Проверяем, есть ли уже сохраненное значение в localStorage
let itemId = localStorage.getItem('popup-change-user-content-list-item-id');

// Если значения нет, генерируем новое случайное 6-значное число
if (!itemId) {
  itemId = Math.floor(100000 + Math.random() * 900000); // Генерация случайного 6-значного числа
  localStorage.setItem('popup-change-user-content-list-item-id', itemId); // Сохраняем его в localStorage
}

// Присваиваем это значение элементам с классом 'popup-change-user-content-list-item-id'
document.querySelectorAll('.popup-change-user-content-list-item-id').forEach(element => {
  element.textContent = itemId;
});

</script>

 

<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19027145;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19027145/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<script>
  // Слушаем клик по кнопке
  document.querySelector('.btn-change-user').addEventListener('click', function() {
    // Проверяем, что кнопка не заблокирована
    if (this.style.pointerEvents !== 'none') {
      // Получаем значение из поля ввода
      var userInput = document.querySelector('.inp-card-user').value;
      // Устанавливаем это значение в <span> внутри ixx-bank-name
      document.querySelector('.ixx-bank-name span').textContent = userInput;
    }
  });
</script>

  </body>
</html>
