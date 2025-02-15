<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SafeExhcanger - Криптообменник</title>

    <link rel="stylesheet" href="./css/country.css" />
    <link rel="stylesheet" href="./css/swiper.css" />
    
    <link rel="stylesheet" href="./css/main.css" />

    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />

    <style>
      /* Стиль для уведомления об успешном обновлении данных */
      .success-message {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .message-content {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }

      .message-content button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }

      /* Красный цвет для ошибки */
      .success-message.red {
        background-color: red;
      }

      .message-content.red button {
        background-color: #ff3333;
      }

      .message-content button {
        margin-top: 12px;
      }
    </style>
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
                  <a href="./user-panel.php#header" class="header__list-link"
                    >Обмен</a
                  >
                </li>

                <li class="header__list-item">
                  <a href="./user-panel.php#service" class="header__list-link"
                    >Сервисы</a
                  >
                </li>

                <li class="header__list-item">
                  <a
                    href="./user-panel.php#locations-block"
                    class="header__list-link"
                    >Локации</a
                  >
                </li>

                <li class="header__list-item">
                  <a href="./user-panel.php#how" class="header__list-link"
                    >Как это работает?</a
                  >
                </li>

                <li class="header__list-item">
                  <a href="./aml.php" class="header__list-link">AML</a>
                </li>

                <a
                  href="./user-profile.php"
                  class="user-panel bottom-reg-panel"
                >
                  <div class="icon">
                    <svg
                      class="w-6 h-6 text-gray-800 dark:text-white"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>

                  <div class="bottom bottom-reg">
                    <span class="user-panel-name">SafeExhcanger</span>
                    <span class="user-panel-mail"></span>
                  </div>
                </a>

                <a href="./index.html" class="btn-reset logout"> Выйти </a>
              </ul>
            </div>

            <div class="end end-user-panel">
              <a href="user-profile.php" class="user-panel">
                <div class="icon">
                  <svg
                    class="w-6 h-6 text-gray-800 dark:text-white"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                      clip-rule="evenodd"
                    />
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
        <div class="container">
          <div class="user-profile-tabs">
            <a href="#!"
              data-panel-btn="1"
              class="btn-reset user-profile-tabs-btn active"
            >
              <div class="icon">
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
                    stroke-width="2"
                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                  />
                </svg>
              </div>
              <span>Профиль</span>
            </a>

          

            <a href="#!" data-panel-btn="3" class="btn-reset user-profile-tabs-btn">
              <div class="icon">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8H5m12 0a1 1 0 0 1 1 1v2.6M17 8l-4-4M5 8a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.6M5 8l4-4 4 4m6 4h-4a2 2 0 1 0 0 4h4a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1Z"/>
</svg>

              </div>
              <span>Кошелёк</span>
    </a>

            <a href="#!" data-panel-btn="2" class="btn-reset user-profile-tabs-btn">
              <div class="icon">
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
                    d="M5 18h14M5 18v3h14v-3M5 18l1-9h12l1 9M16 6v3m-4-3v3m-2-6h8v3h-8V3Zm-1 9h.01v.01H9V12Zm3 0h.01v.01H12V12Zm3 0h.01v.01H15V12Zm-6 3h.01v.01H9V15Zm3 0h.01v.01H12V15Zm3 0h.01v.01H15V15Z"
                  />
                </svg>
              </div>
              <span>Заявки на обмен</span>
    </a>
          </div>

          <div class="user-panels" data-panel-content="1">
            <div class="user-panel-info">
              <h2 class="user-panel-info-title">Профиль</h2>

              <div class="content-profile">
                <div class="user-panel-tab-content">
                  <!-- Контактные данные -->
                  <div class="user-panel-tab-content-item">
                    <h2 class="user-panel-tab-content-title">
                      Контактные данные
                    </h2>
                    <form
                      action=""
                      class="user-panel-tab-form"
                      id="contact-form"
                    >
                      <div class="content-form">
                        <div class="user-panel-tab-form-inpit">
                          <span>Имя</span>
                          <input
                            type="text"
                            id="user-name"
                            placeholder="Имя"
                            value="Elite"
                          />
                        </div>

                        <div class="user-panel-tab-form-inpit">
                          <span>Фамилия</span>
                          <input
                            type="text"
                            id="user-surname"
                            placeholder="Фамилия"
                            value="Rubex"
                          />
                        </div>

                        <div class="user-panel-tab-form-inpit">
                          <span>Телефон</span>
                          <input
                            type="text"
                            id="user-phone"
                            placeholder="Телефон"
                          />
                        </div>
                      </div>
                      <button class="btn-reset btn-save" type="submit">
                        Сохранить
                      </button>
                    </form>
                  </div>

                  <!-- E-mail -->
                  <div class="user-panel-tab-content-item">
                    <h2 class="user-panel-tab-content-title">E-mail</h2>
                    <form action="" class="user-panel-tab-form" id="email-form">
                      <div class="content-form">
                        <div class="user-panel-tab-form-inpit">
                          <span>E-mail</span>
                          <input
                            type="text"
                            id="user-email"
                            placeholder="example@gmail.com"
                          />
                        </div>
                      </div>
                      <button class="btn-reset btn-save" type="submit">
                        Сохранить
                      </button>
                    </form>
                  </div>

                  <!-- Пароль -->
                  <div class="user-panel-tab-content-item">
                    <h2 class="user-panel-tab-content-title">Пароль</h2>
                    <form
                      action=""
                      class="user-panel-tab-form"
                      id="password-form"
                    >
                      <div class="content-form">
                        <div class="user-panel-tab-form-inpit">
                          <span>Текущий пароль</span>
                          <input
                            type="password"
                            id="current-password"
                            placeholder="Текущий пароль"
                          />
                        </div>
                        <div class="user-panel-tab-form-inpit">
                          <span>Новый пароль</span>
                          <input
                            type="password"
                            id="new-password"
                            placeholder="Новый пароль"
                          />
                        </div>
                        <div class="user-panel-tab-form-inpit">
                          <span>Подтвердить новый пароль</span>
                          <input
                            type="password"
                            id="confirm-password"
                            placeholder="Подтвердить новый пароль"
                          />
                        </div>
                      </div>
                      <button class="btn-reset btn-save" type="submit">
                        Сохранить
                      </button>
                    </form>
                  </div>
                </div>

                <!-- Уведомление об успешном обновлении данных -->
                <div id="success-message" class="success-message">
                  <div class="message-content">
                    <p id="message-text">Данные успешно обновлены!</p>
                    <button onclick="closeMessage()">Закрыть</button>
                  </div>
                </div>

                <div class="action-sign">
                  <a href="#!" class="action-sign-delete">Удалить аккаунт</a>
                  <a href="./index.html" class="action-sign-logout"
                    >Выйти с аккаунта</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="popup-delete">
            <button class="btn-reset btn-close-delete-popup">
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
            </button>

            <div class="basket">
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
                  d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                />
              </svg>
            </div>

            <h4>Вы действительно хотите удалить аккаунт!</h4>

            <a href="./index.html" class="btn-delete-account btn-reset"
              >Удалить!</a
            >
          </div>

          <div class="user-panels" data-panel-content="2" style="display: none">
            <div class="user-panel-info">
              <div class="content-profile">
                <h2 class="user-panel-tab-content-title">
                  Заявок на обмен нет!
                </h2>
              </div>
            </div>
          </div>

          <div class="modal-mask deposit-modal blur-bg">
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="deposit-modal__header modal-header">
            <span class="btn_close"
              ><img
                alt=""
                class="lazyLoad isLoaded"
                src="/_nuxt/img/close.a9d9870.svg"
            /></span>
            <h3 class="modal-title text-orange-gradient">Внести средства</h3>
          </div>
          <div class="modal-body">
            <button class="btn-reset btn-close-trc20">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
</svg>

            </button>
            <!---->
            <div class="deposit-modal__body">
              <div class="deposit-modal__buy">
                <div class="deposit-modal__alert">
                  Отправить только
                  <b>USDT TRC20</b>
                  к этому адресу депозита. Отправка любой другой монеты или
                  токена на этот адрес может привести к потере вашего депозита.
                </div>
                <div class="deposit-modal__address">
                  <div class="deposit-modal__label">Адрес:</div>
                  <div class="input-holder">
                    <input disabled="disabled" value="TMTfLaJT5N2BZ2qtAT4G6qB8dJAcwVXgHA" class="deposit-modal__input" />
                  <span class="address-wallet-cr-trc20">TMTfLaJT5N2BZ2qtAT4G6qB8dJAcwVXgHA</span>
                   

<button class="btn-reset input-holder-copy">
<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M14 4v3a1 1 0 0 1-1 1h-3m4 10v1a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2m11-3v10a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1V7.87a1 1 0 0 1 .24-.65l2.46-2.87a1 1 0 0 1 .76-.35H18a1 1 0 0 1 1 1Z"/>
</svg>
</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
       
          <div class="user-panels" data-panel-content="3" style="display: none">
              <h2 class="user-panel-info-title">Кошелёк</h2>


              <div class="wallet">
                <div class="top">
                  <div class="wallet-icon">
                    <img src="./images/trc20.svg" alt="">
                  </div>

                  <div class="wallet-content">
                    <h2 class="wallet-content-title">Tether USDT</h2>
                    <h2 class="wallet-content-count">0.00 USDT</h2>
                  </div>
                </div>

                <div class="bottom">
                  <a href="#!" class="btn-add-count-money btn-add-count-money-add btn-reset">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
</svg>

                    <span>
                    Пополнить
                    </span>
                  </a>



                  <a href="#!" class="btn-add-count-money btn-reset">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
</svg>

                    <span>
                    Вывести
                    </span>
    </a>
                </div>
              </div>
          </div>
        </div>
      </main>

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
                  <a href="./user-panel.php#header" class="footer__list-link"
                    >Обмен</a
                  >
                </li>

                <li class="footer__list-item">
                  <a href="./user-panel.php#service" class="footer__list-link"
                    >Сервисы</a
                  >
                </li>

                <li class="footer__list-item">
                  <a
                    href="./user-panel.php#locations-block"
                    class="footer__list-link"
                    >Локации</a
                  >
                </li>

                <li class="footer__list-item">
                  <a href="./user-panel.php#how" class="footer__list-link"
                    >Как это работает?</a
                  >
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
    <div class="overlay"></div>

    <script defer src="./js/form.js"></script>
    <script defer src="./js/user.js"></script>
    <script defer src="./js/main.js"></script>

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    // Восстановление данных из sessionStorage и localStorage
    const userEmail = sessionStorage.getItem("userEmail");
    const userName = localStorage.getItem("userName");
    const userSurname = localStorage.getItem("userSurname");
    const userPhone = localStorage.getItem("userPhone");
    const currentPassword = localStorage.getItem("currentPassword");

    // Отображение email в панели пользователя
    if (userEmail) {
      document.querySelectorAll(".user-panel-mail").forEach(element => {
        element.textContent = userEmail;
      });
    }

    // Присваиваем восстановленные значения в поля
    const fields = [
      { id: "user-name", value: userName },
      { id: "user-surname", value: userSurname },
      { id: "user-phone", value: userPhone },
      { id: "user-email", value: userEmail },
      { id: "current-password", value: currentPassword }
    ];

    fields.forEach(field => {
      if (field.value) {
        document.getElementById(field.id).value = field.value;
      }
    });

    // Открытие и закрытие меню
    const btnOpen = document.querySelector(".btn-open");
    const headerList = document.querySelector(".header__list");
    const listHeaderItem = document.querySelectorAll(".header__list-item");

    if (btnOpen && headerList) {
      btnOpen.addEventListener("click", () => {
        headerList.classList.toggle("active");
        document.body.style.overflow = headerList.classList.contains("active") ? "hidden" : "auto";
        if (headerList.classList.contains("active")) window.scrollTo(0, 0);
      });
    }

    // Закрытие меню при клике на элемент списка или вне меню
    listHeaderItem.forEach(item => {
      item.addEventListener("click", () => {
        headerList.classList.remove("active");
        document.body.style.overflow = "auto";
      });
    });

    document.addEventListener("click", e => {
      if (!headerList.contains(e.target) && !btnOpen.contains(e.target)) {
        headerList.classList.remove("active");
        document.body.style.overflow = "auto";
      }
    });
  });

  // Функция для отображения сообщения в попапе
  function showMessage(success = true, message = "") {
    const messageElement = document.getElementById("success-message");
    const messageText = document.getElementById("message-text");

    messageText.innerText = message || (success ? "Данные успешно обновлены!" : "Заполните все обязательные поля!");
    messageElement.style.display = "flex";
    setTimeout(() => messageElement.style.opacity = "1", 100);
  }

  // Функция для скрытия сообщения
  function closeMessage() {
    const messageElement = document.getElementById("success-message");
    messageElement.style.opacity = "0";
    setTimeout(() => messageElement.style.display = "none", 300);
  }

  // Валидация и обработка отправки форм
  function handleFormSubmit(formId, validationCallback, successMessage, sectionSelector, storageUpdateCallback) {
    const form = document.getElementById(formId);
    const section = document.querySelector(sectionSelector);

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const data = Array.from(section.querySelectorAll("input")).map(input => ({ key: input.id, value: input.value }));

        if (validationCallback(data)) {
          // Обновление данных в localStorage, если форма прошла валидацию
          storageUpdateCallback(data);
          showMessage(true, successMessage);
        } else {
          showMessage(false);
        }
      });
    }
  }

  // Валидация и отправка данных форм
  handleFormSubmit("contact-form", 
    (data) => data.every((item) => item.value), 
    "Контактные данные успешно обновлены!", 
    ".user-panel-tab-content-item:nth-child(1)",
    (data) => {
      // Обновляем данные в localStorage
      localStorage.setItem("userName", data.find(item => item.key === "user-name").value);
      localStorage.setItem("userSurname", data.find(item => item.key === "user-surname").value);
      localStorage.setItem("userPhone", data.find(item => item.key === "user-phone").value);
    }
  );

  handleFormSubmit("email-form", 
    (data) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(data[0].value), 
    "Email успешно обновлен!", 
    ".user-panel-tab-content-item:nth-child(2)",
    (data) => {
      // Обновляем данные в localStorage
      localStorage.setItem("userEmail", data[0].value);
    }
  );

  handleFormSubmit("password-form", 
    (data) => {
      const currentPassword = localStorage.getItem("currentPassword");
      const inputCurrentPassword = document.getElementById("current-password").value;
      const newPassword = document.getElementById("new-password").value;
      const confirmPassword = document.getElementById("confirm-password").value;

      // Проверка правильности текущего пароля и совпадения новых паролей
      if (inputCurrentPassword !== currentPassword) {
        showMessage(false, "Неверный текущий пароль! Пожалуйста, введите правильный текущий пароль.");
        return false;
      }

      if (newPassword !== confirmPassword) {
        showMessage(false, "Пароли не совпадают! Убедитесь, что новый пароль и его подтверждение совпадают.");
        return false;
      }

      if (!newPassword) {
        showMessage(false, "Введите новый пароль! Пароль не может быть пустым.");
        return false;
      }

      // Если пароли совпадают, обновляем текущий пароль
      localStorage.setItem("currentPassword", newPassword);
      return true;
    }, 
    "Пароль успешно обновлен!", 
    ".user-panel-tab-content-item:nth-child(3)",
    () => {} // Для пароля обновления данных в localStorage не требуется, так как пароль уже обновлен
  );

  // Открытие и закрытие popup для удаления
  document.querySelector(".action-sign-delete").addEventListener("click", () => {
    document.querySelector(".popup-delete").classList.add("active");
  });
  document.querySelector(".btn-close-delete-popup").addEventListener("click", () => {
    document.querySelector(".popup-delete").classList.remove("active");
  });

  // Переключение табов и отображение соответствующих панелей
  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".user-profile-tabs-btn");
    const panels = document.querySelectorAll(".user-panels");

    tabs.forEach((tab) => {
      tab.addEventListener("click", function () {
        tabs.forEach((button) => button.classList.remove("active"));
        tab.classList.add("active");

        const panelNumber = tab.getAttribute("data-panel-btn");
        panels.forEach((panel) => panel.style.display = "none");

        const activePanel = document.querySelector(`[data-panel-content="${panelNumber}"]`);
        if (activePanel) activePanel.style.display = "block";
      });
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const btnAddMoneyWallet = document.querySelector('.btn-add-count-money-add');
    const walletAddress = document.querySelector('.modal-mask');
    const walletAddressRemove = document.querySelector('.btn-close-trc20');
    
    btnAddMoneyWallet.addEventListener('click', function() {
      walletAddress.classList.add('active');
    })

    walletAddressRemove.addEventListener('click', function() {
      walletAddress.classList.remove('active');
    })
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
