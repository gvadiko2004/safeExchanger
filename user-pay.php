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

    <style>

      /* Общие стили для всех элементов */
.notice-text,
.rules-title,
.reminder-text {
    font-size: 18px;
    line-height: 1.6;
    color: #333;
    margin-bottom: 20px;
    -webkit-text-size-adjust: 100%;
    -moz-text-size-adjust: 100%;
    text-size-adjust: 100%;
}

.notice-text {
    margin-bottom: 20px;
}

.rules-title {
    margin-top: 20px;
    margin-bottom: 20px;
}

.rules-list {
    padding-left: 20px;
    font-size: 18px;
    list-style-position: inside;
    margin-top: 10px;
}

.rules-list li {
    font-size: 18px;
}

/* Адаптивность на устройствах с маленьким экраном */
@media (max-width: 1024px) {
    .notice-text,
    .rules-title,
    .reminder-text {
        font-size: 14px; /* Уменьшаем шрифт на 4px */
    }

    .rules-list li {
        font-size: 14px; /* Уменьшаем шрифт списка на 4px */
    }

    .rules-title {
        font-size: 18px;
    }
}

@media (max-width: 768px) {
    .notice-text,
    .rules-title,
    .reminder-text {
        font-size: 12px; /* Дополнительное уменьшение шрифта на меньших экранах */
    }

    .rules-list li {
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .notice-text,
    .rules-title,
    .reminder-text {
        font-size: 11.5px; /* Уменьшаем шрифт до 10px для самых маленьких экранов */
    }

    .rules-list li {
        font-size: 11.5px;
    }

    .rules-title {
        font-size: 14px;
    }
}



      .popup-change-user {
        position: static !important;
        padding: 0;
      }

      .popup-change-user-order {
        margin-top: 0;
        text-align: center;
    }

    .btn-close-pop-change {

    }

    .popup-change-user-content {
      margin-bottom: 80px;
    }

    .bottom-send-title {
    font-size: 20px;
}

.li-rulse li {
 margin-bottom: 18px;
}

.input .qr-address-title {
  color: #1f1f1f;
}

.input .start {

  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
}

.input-us {
  margin-bottom: 20px;
}

.bottom-send-content {
  display: flex;
  justify-content: space-between;
  gap: 40px;
}

.qr-image-scan-img {
  width: 280px;
}

.bottom-send-content-mail {
  width: 80%;
}

.popup-change-user-content {
  grid-template-columns: 1fr;
}
.bottom-send {
  max-width: 70%;
  margin: 0 auto;
}

#submitButtons {
  opacity: 0.8 !important;
}

#submitButtons:hover {
  opacity: 1 !important;
}

@media (max-width: 1080px) {
  .bottom-send-content {
    flex-direction: column;
    align-items: center;
  }

  .bottom-send {
    max-width: 100%;
    margin: 0 auto;
}

.bottom-send-content-mail {
    width: 100%;
}

.input .qr-address-title {
    font-size: 14px;
}

.bottom-send-title {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
    display: block;
}

.input .qr-address-title {
        font-size: 13px;
    }

    .bottom-send-title {
        font-size: 18px !important;
    }

    .popup-change-user-content-change-usdt {
    font-weight: bold;
    font-size: 14px;
    font-weight: 600;
}
}

@media (max-width: 400px) {
  .input .qr-address-title {
        font-size: 12px;
    }
}


.message__logo {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 10;

        display: flex;
        align-items: center;
        justify-content: center;

        opacity: 1;
}

.message__logo.active {
  opacity: 0;
        visibility: hidden;
        pointer-events: none;
}

.loadings {
  position: absolute; 
  left: 50%;
  transform: translateX(-50%);
  bottom: 40px;

  font-size: 20px;

}

@media (max-width: 1440px) {
  .message__logo .logo-message {
        min-width: 40px !important;
        max-width: 60px !important;
    }
  }


    @media (max-width: 440px) {
    .message__logo .logo-message {
        min-width: 20px;
        max-width: 60px;
    }

    .loadings {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 30px;
    font-size: 16px;
}
}

    </style>
  </head>
  <body>
  <div class="message__logo">
                  <img class="logo-message" src="./images/logo.png" alt="">

                  <div class="bg-circle">
                    <div class="bg-circle-item"></div>
                    <div class="bg-circle-item"></div>
                    <div class="bg-circle-item"></div>
                  </div>

                  <span class="loadings">Загрузка...</span>
                </div>

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

<button class="btn-reset logout">
  Выйти
</button>
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
        


        <div class="qr-scans">
        <div class="popup-change-user active">

      <div class="container">
        <h2 class="popup-change-user-order">Заявка ожидает оплаты</h2>

        <div class="popup-change-user-content active">
          <!-- <div class="start start-content">
            <h4 class="popup-change-user-content-title">Детали по обмену</h4>

            <ul class="popup-change-user-content-list list-reset">
              <li class="popup-change-user-content-list-item">
                <span>ID</span>
                <span class="popup-change-user-content-list-item-id">5103626</span>
              </li>
            </ul>

            <ul class="popup-change-user-content-change list-reset">
              <li class="popup-change-user-content-change-item">
                <div class="start">
                  <h4 class="popup-change-user-content-change-title pop-pay-crypto">
                    Отдадите <span></span>
                  </h4>

                  <span class="popup-change-user-content-change-usdt">1.00</span>
                </div>

                <div class="end">
                  <div class="popup-change-user-content-change-icon">
                    <img src="./images/btc.svg" alt="">
                  </div>
                </div>
              </li>
            </ul>

            <ul class="popup-change-user-content-change popup-change-user-content-bank list-reset">
              <li class="popup-change-user-content-change-item">
                <div class="start">
                  <h4 class="popup-change-user-content-change-title ix-bank">
                    Получите <span>VISA/MASTERCARD RUB</span>
                  </h4>

                  <span class="popup-change-user-content-change-usdt popup-change-user-content-change-usdtt">9684969.03</span>
                </div>

                <div class="end">
                  <div class="popup-change-user-content-change-icon popup-change-user-content-change-icbank">
                    <img src="./images/card.svg" alt="">
                  </div>
                </div>
              </li>
            </ul>

            <div class="title-count-send">
              <h4 class="popup-change-user-content-titles">Номер карты::</h4>
              <span class="card-number">55534711</span>
            </div>

            <div class="title-count-send">
              <h4 class="popup-change-user-content-titles">E-mail:</h4>
              <span class="card-email">achie@gmail.com</span>
            </div>

            <div class="title-count-send">
              <h4 class="popup-change-user-content-titles">Telegram:</h4>
              <span class="card-telegram">@aachiee___</span>
            </div>
          </div> -->

          <div class="end end-content">
            <div class="top">
              <div class="actuallity">
                <div class="actuallity-top">
                  <div class="start">
                    <h2>Актуально до:</h2>

                    <span class="actuallity-bottom-count"></span>
                  </div>

                  <div class="end">
                    <span>
                      <div class="actuallity-top-time">
                        Срок действия:
                        <span class="actuallity-top-start-time">59:33 мин</span>
                      </div>
                    </span>
                  </div>
                </div>

                <div class="actuallity-bottom"></div>
              </div>
            </div>

            <div class="bottom bottom-send">
              <h2 class="bottom-send-title">Для выполнения заказа Вам необходимо перевести средства</h2>

              <div class="bottom-send-content">
                <!-- <div class="bottom-send-content-bank-content bottom-send-content-bank">
                  
                </div> -->

                <!-- <div class="bottom-send-content-bank-content bottom-send-content-card">
                  
                </div> -->

                <div class="start-qrr">
                <div class="bottom-send-content-bank-content bottom-send-content-telegram">
                     <img class="qr-image-scan-img" src="" alt="" />
                </div>
                </div>

                <div class="bottom-send-content-bank-content bottom-send-content-mail">
                <h4 class="bottom-send-content-bank-content-title">Transfer:</h4>

                  <div class="input input-us">
                  <div class="start">
                  <h4 class="popup-change-user-content-change-title popup-change-user-content-change-uas">
                    Отдадите <span></span>
                  </h4>

                  <span class="popup-change-user-content-change-usdt">1.00</span>
                </div>
                  </div>  
                
                <h4 class="bottom-send-content-bank-content-title">To address:</h4>

                  <div class="input">
                     <span class="qr-address-title" id="cashForTransit"></span>
                  </div>
                </div>
              </div>


              <p class="notice-text">
    <strong>Обратите внимание:</strong> В случае ошибки при вводе суммы, отправке средств на неверный адрес или при использовании иной сети, заявка не будет обработана, а средства могут быть безвозвратно утеряны. <strong>SafeExhcanger не несет ответственности</strong> за последствия, вызванные некорректными переводами.
</p>

<p class="rules-title">
    <strong>Правила безопасной продажи криптовалюты:</strong><br>
    <ul class="rules-list">
        <li>Перед тем как отправить средства, внимательно проверьте все данные: точность суммы и корректность адреса.</li>
        <li>Убедитесь, что сеть, в которой вы отправляете средства, соответствует сети, указанной в заявке. Использование неправильной сети может привести к потере средств.</li>
        <li>В случае любого сомнения не стесняйтесь обращаться в поддержку для уточнения информации.</li>
    </ul>
</p>

<p class="reminder-text">
    Пожалуйста, будьте особенно внимательны при выполнении перевода, так как ошибка может привести к несоответствию в заявке и утрате средств. Мы призываем вас тщательно проверять все введенные данные перед завершением транзакции, чтобы гарантировать безопасность и успешное завершение сделки.
</p>

<p class="processing-info">
    <strong>Важно:</strong> После отправки вашей криптовалюты система автоматически зафиксирует перевод, подтверждение вручную не требуется. Обмен выполняется в среднем от <strong>5 до 15 минут</strong>, после чего рубли будут переведены на указанный вами банковский счет.
</p>



              <a href="./user-panel.php" class="btn-reset form-content-cryptos-time form-content-cryptos-btnsdel form-content-cryptos-btn" id="submitButtons" style="opacity: 1; pointer-events: auto;">
            Отменить ордер
</a>
            </div>

            
          </div>
        </div>
      </div>
    </div>
        </div>
      </main>

      <footer class="footer">
        <div class="container">
          <div class="footer__inner">
            <div class="start">
              <a href="#!" class="icon-logo">
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
    <script defer src="./js/crypto.js"></script>

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
    
        // Если текст в payInfoText равен "USDT TRC20", изменяем ссылку на user-change.phpml
        // if (payInfoText && formContentCryptos) {
        //   const cryptoText = payInfoText.textContent.trim();
          
        //   if (cryptoText === "USDT TRC20") {
        //     formContentCryptos.setAttribute("href", "user-change.phpml");
        //     formContentCryptos.style.opacity = "1"; // Делаем кнопку активной
        //     formContentCryptos.style.pointerEvents = "auto"; // Включаем клик
        //   } else {
        //     formContentCryptos.setAttribute("href", "#"); // Не активируем ссылку
        //     formContentCryptos.style.opacity = "0.5"; // Делаем кнопку неактивной
        //     formContentCryptos.style.pointerEvents = "none"; // Блокируем клик
        //   }
        // }
    
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
  document.addEventListener("DOMContentLoaded", () => {
    const targetElement = document.querySelector(".user-qr-price-order");

    // Функция обновления данных
    const updateData = () => {
        const storedData = localStorage.getItem("visaMastercardData");
        if (storedData) {
            targetElement.innerText = storedData;
        }
    };

    // Первоначальная установка
    updateData();

    // Наблюдатель за изменениями в localStorage
    window.addEventListener("storage", updateData);
});

</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const qrAddress = document.getElementById("cashForTransit");
    const qrImageElement = document.querySelector(".qr-image-scan-img");

    const updateAddressAndImage = () => {
        const storedAddress = localStorage.getItem("qrAddress");
        const storedQrImagePath = localStorage.getItem("qrImagePath");

        if (qrAddress && storedAddress) {
            qrAddress.innerText = storedAddress;
        }

        if (qrImageElement && storedQrImagePath) {
            qrImageElement.src = storedQrImagePath;
        }
    };

    // Первоначальное обновление
    updateAddressAndImage();

    // Следим за изменениями в localStorage
    window.addEventListener("storage", updateAddressAndImage);

    // Запасной вариант (периодическая проверка)
    setInterval(updateAddressAndImage, 1000);
});
</script>

<script>
function updateCryptoValue() {
  let storedValue = localStorage.getItem("popPayCryptoValue");
  if (storedValue) {
    let spanElement = document.querySelector(".pop-pay-crypto span");
    if (spanElement) {
      spanElement.textContent = storedValue;
    }
  }
}

// Обновляем при загрузке страницы
document.addEventListener("DOMContentLoaded", updateCryptoValue);

// Реагируем на изменения в localStorage в реальном времени
window.addEventListener("storage", updateCryptoValue);


</script>






<script>
  document.addEventListener("DOMContentLoaded", () => {
    const storedValue = localStorage.getItem("visaMastercardData");

    if (storedValue) {
        const targetElement = document.querySelector(".popup-change-user-content-change-usdt");
        if (targetElement) {
            targetElement.textContent = storedValue; // Вставляем переданное значение
        }
    }
});

</script>



<script>
document.addEventListener("DOMContentLoaded", () => {
  const currentTime = new Date();
  const savedTime = sessionStorage.getItem("savedTime");

  // Если сохранённое время есть
  if (savedTime) {
    // Преобразуем сохранённое время в объект Date
    const savedDate = new Date(savedTime);

    // Проверяем, прошло ли больше 1 часа
    const timeDifference = currentTime - savedDate;
    const oneHourInMilliseconds = 60 * 60 * 1000; // 1 час в миллисекундах

    // Если прошло больше 1 часа, обновляем время
    if (timeDifference >= oneHourInMilliseconds) {
      // Добавляем 1 час к текущему времени
      currentTime.setHours(currentTime.getHours() + 1);
    } else {
      // Если время не прошло, берем сохранённую дату
      currentTime.setTime(savedDate.getTime());
    }
  } else {
    // Если нет сохранённого времени, устанавливаем текущее с добавлением 1 часа
    currentTime.setHours(currentTime.getHours() + 1);
  }

  // Сохраняем новое время в sessionStorage
  sessionStorage.setItem("savedTime", currentTime.toISOString());

  // Форматируем дату в числовом формате "день.месяц.год, часы:минуты"
  const day = String(currentTime.getDate()).padStart(2, '0');
  const month = String(currentTime.getMonth() + 1).padStart(2, '0');
  const year = currentTime.getFullYear();
  const hours = String(currentTime.getHours()).padStart(2, '0');
  const minutes = String(currentTime.getMinutes()).padStart(2, '0');

  // Формируем итоговую строку
  const formattedDate = `${day}.${month}.${year}, ${hours}:${minutes}`;

  // Вставляем дату и время в элемент
  const dateElement = document.querySelector('.actuallity-bottom-count');
  if (dateElement) {
    dateElement.textContent = `${formattedDate}`;
  }
});
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const startTimeElement = document.querySelector('.actuallity-top-start-time');
  
  // Получаем время начала отсчета из sessionStorage
  let startTime = sessionStorage.getItem("startTime");

  // Если время начала отсчёта ещё не сохранено, сохраняем текущее время
  if (!startTime) {
    startTime = new Date().getTime();
    sessionStorage.setItem("startTime", startTime); // Сохраняем в sessionStorage
  }

  // Функция для обновления таймера
  const updateTimer = () => {
    const currentTime = new Date().getTime();
    const timePassed = currentTime - startTime;

    const remainingTime = Math.max(0, 3600000 - timePassed); // 1 час = 3600000 миллисекунд

    const hours = String(Math.floor(remainingTime / (1000 * 60 * 60))).padStart(2, '0');
    const minutes = String(Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
    const seconds = String(Math.floor((remainingTime % (1000 * 60)) / 1000)).padStart(2, '0');

    const formattedTime = `${hours}:${minutes}:${seconds}`;

    // Обновляем отображение времени
    if (startTimeElement) {
      startTimeElement.textContent = `${formattedTime}`;
    }

    // Если время закончилось, перенаправляем на ./index.html
    if (remainingTime <= 0) {
      clearInterval(timerInterval);
      startTimeElement.textContent = "Время истекло";
      window.location.href = "./index.html";  // Перенаправление на главную страницу
    }
  };

  // Обновляем таймер каждую секунду
  const timerInterval = setInterval(updateTimer, 1000);

  // Первоначальное обновление времени
  updateTimer();
});
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
  // Ищем элемент с классом .popup-change-user-content-change-title внутри блока .input
  const titleElement = document.querySelector('.input .popup-change-user-content-change-title');

  if (titleElement) {
    // Получаем все дочерние узлы элемента
    const children = Array.from(titleElement.childNodes);

    // Ищем текстовое содержимое "Отдадите"
    children.forEach(child => {
      if (child.nodeType === Node.TEXT_NODE && child.textContent.trim() === 'Отдадите') {
        child.remove(); // Удаляем текстовое содержимое "Отдадите"
      }
    });
  }
});
</script>

<script>
     window.addEventListener("load", function () {
        setTimeout(() => {
          document.querySelector(".message__logo").classList.add("active");
        }, 3000);
      });
</script>

 <script>
document.addEventListener("DOMContentLoaded", function () {
    const currencySpan = document.querySelector(".popup-change-user-content-change-uas span");

    if (currencySpan) {
        const userCurrency = localStorage.getItem("userCurrency");

        if (userCurrency) {
            currencySpan.innerText = userCurrency;
        }
    }
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




  </body>
</html>
