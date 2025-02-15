<?php
session_start();
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Правила Аккаунта</title>

    <link rel="stylesheet" href="./css/main.css" />

    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />

    <style>
      p {
        margin-top: 20px;
      }

      .aml-rules-content-title {
        text-decoration: underline;
        font-weight: 400;
      }

  @media (max-width: 440px) {
    p {
        font-size: 13px;
      }

      span {
        font-size: 14px;

      }
    
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
                  <a href="./user-panel.php#header" class="header__list-link">Обмен</a>
                </li>

                <li class="header__list-item">
                  <a href="./user-panel.php#service" class="header__list-link">Сервисы</a>
                </li>

                <li class="header__list-item">
                  <a href="./user-panel.php#locations-block" class="header__list-link"
                    >Локации</a
                  >
                </li>

                <li class="header__list-item">
                  <a href="./user-panel.php#how" class="header__list-link">Как это работает?</a>
                </li>

                <li class="header__list-item">
                  <a href="./aml.php" class="header__list-link">AML</a>
                </li>

                <a href="./user-profile.php" class="user-panel bottom-reg-panel">
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

                <a href="./index.html" class="btn-reset logout">
  Выйти
</a>
              </ul>
            </div>

            <div class="end end-user-panel">
              <a href="./user-profile.php" class="user-panel">
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
          <div class="aml-rules">
            <div class="aml-rules-tabs">
              <div class="aml-rules-cont">
              <button
                class="btn-reset aml-rules-btn active"
                data-tab-aml-btn="1"
              >
                Условия использования
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="2">
                Аккаунт
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="3">
                Услуги
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="4">
                Запрещенная деятельность
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="5">
                Контент и права интеллектуальной собственности
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="6">
                Электронные коммуникации
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="7">
                Сторонние сайты и сервисы
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="8">
                Раскрытие информации о рисках
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="9">
                Гарантии и отказ от ответственности
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="10">
                Ограничение ответственности
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="11">
                Возмещение
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="12">
                Применимое право и разрешение споров
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="13">
                Прекращение
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="14">
                Другие условия
              </button>
              <button class="btn-reset aml-rules-btn" data-tab-aml-btn="15">
                Политика AML
              </button>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="1">
              <h2 class="aml-rules-content-title">Условия использования</h2>

              <p>
                Добро пожаловать в SafeExhcangerr, сервис обмена криптовалют,
                доступный на сайте SafeExhcangerr, в физических офисах или с
                помощью других средств связи <b>(«Сервис»)</b>.
              </p>

              <p>
                Используя Сервис, вы соглашаетесь с этими Условиями, а также с
                нашими политиками, включая Политикой ПВК/ФТ, Политикой
                приватности, Политика использования файлов cookie, которые
                вместе составляют полное соглашение между вами (или
                «пользователем») и IOOI Sp. z O.O., регистрационный номер
                0001035434, зарегистрированной по адресу Gęsia 8/205, 31-535
                Kraków, Polska, с лицензией VASP RDWW-853 (далее — SafeExhcangerr,
                «мы», «нас» или «наш»).
              </p>

              <p>
                Если вы не согласны с этими Условиями, удержитесь от
                использования Сервиса.
              </p>

              <div class="aml-list">
                <h2 class="aml-list-title">
                  Получив доступ или используя Сервис, вы подтверждаете, что:
                </h2>

                <ul class="aml-list-content list-reset">
                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Вы прочли, поняли и соглашаетесь с настоящими Условиями.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Вам исполнилось 18 лет или вы достигли иного возраста
                      совершеннолетия в соответствии с законодательством вашей
                      страны.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Вы вправе заключать это соглашение и пользоваться
                      Сервисом.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Вы имеете полномочия налагать обязательства на
                      юридическое лицо или организацию, от имени которой вы
                      используете Сервис, и это юридическое лицо или организация
                      соглашается с настоящими Условиями.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Вы соблюдаете настоящие Условия и все применимые законы и
                      нормативные акты.
                    </span>
                  </li>
                </ul>

                <b class="aml-sup-b">
                  Если у вас есть вопросы об этих Условиях или Сервисе,
                  свяжитесь с нами по адресу
                  <a class="aml-supp" href="mailto:SafeExhcanger@gmail.com"
                    >support@SafeExhcanger.com</a
                  >
                </b>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="2">
              <h2 class="aml-rules-content-title">Аккаунт</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <ul class="aml-list-content list-reset">
                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Чтобы использовать некоторые функции Сервиса, необходимо
                      создать Аккаунт.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Убедитесь, что предоставленная информация является
                      актуальной, достоверной и точной.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Чтобы обеспечить безопасность Аккаунта, не сообщайте свои
                      учетные данные для входа и включите 2FA.
                    </span>
                  </li>
                </ul>
              </div>

              <p>
                Чтобы использовать определенные функции Сервиса, вам необходимо
                зарегистрировать аккаунт («Аккаунт”). Для регистрации требуется
                имя, подтвержденный адрес электронной почты и пароль.
              </p>

              <p>
                Вы имеете право иметь только один Аккаунт в Сервисе. Если вы
                зарегистрируете несколько аккаунтов с нарушением этого пункта,
                SafeExhcanger имеет право закрыть ваши аккаунты и взыскать
                полную сумму средств с баланса как штраф.
              </p>

              <div class="aml-list">
                <ul class="aml-list-content list-reset">
                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Актуальность, достоверность и точность предоставленной
                      информации.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Информирование нас относительно любых ошибок, обновлений
                      или изменений в информации или документах, предоставленных
                      ранее.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span>
                      Сохранение конфиденциальности данных для входа в Аккаунт.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span> Настройка двухфакторной аутентификации. </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span>
                      Защита данных для входа и поддержания безопасности
                      Аккаунта.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span>
                      Использование своего Аккаунта исключительно в законных
                      целях.
                    </span>
                  </li>
                </ul>
              </div>

              <p>
                Если вы считаете, что к вашему Аккаунту был получен доступ без
                вашего разрешения или если ваши данные для входа
                скомпрометированы, свяжитесь с нами немедленно.
              </p>
              <p>
                Мы оставляем за собой право приостановить или прекратить
                действие Аккаунта, если мы обоснованно считаем, что им
                пользуется лицо, отличное от того, на имя которого он
                зарегистрирован.
              </p>
              <p>Прекращение действия Аккаунта</p>
              <p>
                Чтобы прекратить действие Аккаунта, ознакомьтесь с разделом
                Прекращение и удалите свой Аккаунт с помощью настроек.
              </p>
            </div>

            <div class="aml-rules-content" data-tab-content="3">
              <h2 class="aml-rules-content-title">Услуги</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <ul class="aml-list-content list-reset">
                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Услуги SafeExhcangerr включают онлайн и офлайн обмен
                      виртуальной валюты, между виртуальной и фиатной валютами и
                      операции с виртуальными валютными кошельками.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >В некоторых случаях мы можем потребовать прохождения
                      проверки KYC/KYB/AML, предусмотренной законодательством.
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span>Мы можем взимать с вас комиссию за транзакции. </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >Операции с виртуальной валютой не подлежат отмене и
                      возмещению.
                    </span>
                  </li>
                </ul>
              </div>

              <p>
                Для предоставления Сервиса вы позволяете нам получать фиатные и
                виртуальные валюты, временно хранить, обменивать и выплачивать
                их, а также отчислять соответствующие комиссии и другие расходы
                от вашего имени, а также выполнять все действия, которые мы
                считаем необходимыми или желанными для предоставления наших
                услуг для вас и для соблюдения действующего законодательства и
                настоящих Условий.
              </p>

              <p>
                Чтобы предоставить вам некоторые услуги, по закону мы обязаны
                проводить все необходимые проверки безопасности и надлежащей
                проверки клиента относительно вас и других сторон, вовлеченных в
                ваши операции. Проверки проводятся сторонним поставщиком услуг в
                соответствии с нашей Политикой ПВК/ФТ и Политикой приватности.
              </p>

              <div class="aml-list">
                <ul class="aml-list-content list-reset">
                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >обмен децентрализованных цифровых активов (“виртуальная
                      валюта») на фиатную валюту;
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span
                      >обмен виртуальной валюты на другую виртуальную валюту;
                    </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span> обмен фиатной валюты на виртуальную валюту; </span>
                  </li>

                  <li class="aml-list-item">
                    <div class="sep-circles">
                      <div class="circles"></div>
                    </div>
                    <span>операции с виртуальными валютными кошельками. </span>
                  </li>
                </ul>
              </div>

              <p>
                Мы можем потребовать документацию для проверки источника
                денежных средств перед проведением транзакций. При внесении
                средств для обмена со стороннего счета такие транзакции могут
                быть заблокированы.
              </p>
              <p>
                Мы можем в любое время без предупреждения отклонить депозит или
                наложить ограничения на депозиты, которые вы можете сделать.
              </p>
              <p>
                Внесенные денежные средства будут доступны для транзакций после
                того, как мы получим необходимое количество подтверждений сети.
              </p>
              <p>
                Если вы вносите или снимаете средства с помощью сторонних
                сервисов, ваши транзакции регулируются условиями третьих сторон.
                Вы несете полную ответственность за оплату всех комиссий и
                сборов, связанных с такими переводами.
              </p>

              <p>
                Обмен осуществляется согласно заказам пользователя, оформленным
                в соответствующей форме через Сервис, в том числе через внешние
                мессенджеры. Мы можем отклонить любой заказ на обмен или другую
                транзакцию по своему усмотрению, независимо от вашего
                согласования, и мы не несем ответственности перед вами за такое
                отклонение.
              </p>
              <p>
                Операция обмена осуществляется после получения средств от
                пользователя в полном объеме в соответствии с заявкой, поданной
                в SafeExhcangerr. Если средства обмена не поступили в течение
                срока и на счет, указанный в заказе SafeExhcangerr, заказ
                автоматически отменяется.
              </p>
              <p>
                Если сумма полученных средств отличается от заказа или
                перечислена несколькими транзакциями, автоматический обмен не
                будет произведен. В некоторых случаях обмен может быть
                осуществлен вручную с дополнительной комиссией по обслуживанию.
                Пожалуйста, обратитесь в нашу службу поддержки для получения
                дополнительной информации.
              </p>
              <p>
                SafeExhcangerr осуществляет операцию обмена в пределах 3 рабочих
                дней, за исключением случаев, когда пользователь не удается
                перевести полную сумму средств или пройти проверку KYC/AML, или
                если срок зависит от скорости транзакций в сети виртуальной
                валюты или других обстоятельств вне нашего контроля. Мы не несем
                ответственности за задержки в обработке платежей, вызванные
                банками или другими финансовыми учреждениями или за задержек в
                сети блокчейн.
              </p>
              <p>
                По истечении этого периода вы можете подать запрос на возврат
                средств, если обмен не инициирован SafeExhcangerr. Возмещение
                будет обработано в течение 3 рабочих дней. В случаях, когда
                пользователь не прошел проверку KYC/AML, возмещение будет
                доступно после предоставления пользователем необходимых
                документов и может продолжаться до 30 календарных дней.
              </p>
              <p>
                Обмен считается завершенным в момент зачисления средств на
                указанные вами платежные реквизиты или в момент передачи вам
                средств курьером.
              </p>
              <p>
                Мы можем использовать спотовый обменный курс данной торговой
                пары, который может отличаться и не совпадать с курсом на других
                биржах, на конвертационных сервисах и у поставщиков рыночных
                данных. Курс обмена колеблется в соответствии с рынком, поэтому
                он действует только в течение ограниченного времени. Обменный
                курс для конкретной операции фиксируется на момент получения
                средств от пользователя, если другое не определено SafeExhcangerr.
              </p>

              <p>
                Используя Сервис, вы можете создавать кошельки для виртуальных
                валют, которые позволят вам снимать, вносить, хранить и
                обменивать виртуальные валюты.
              </p>
              <p>
                Мы храним фиатные и виртуальные валюты исключительно для вас и
                от вашего имени. Вы остаетесь владельцем фиатных и виртуальных
                валют, которыми вы управляете с помощью Сервиса.
              </p>
              <p>
                Для перевода средств вы должны предоставлять действительный
                адрес кошелька и поддерживать актуальность такой информации. Мы
                не несем ответственности за какие-либо задержки или ошибки,
                вызванные третьими лицами, а также за ошибки в адресе кошелька и
                информации о сети, которую вы нам предоставили.
              </p>

              <p>
                Вы несете ответственность за обеспечение точности платежных
                данных (например, кредитной карты, дебетовой карты, адреса
                кошелька, сети), которые вы предоставляете для операций в
                Сервисе. Убедитесь, что вы не присылаете средства по
                смартконтракту.
              </p>
              <p>
                SafeExhcangerr не несет ответственности за ошибки, допущенные вами
                в платежных реквизитах, а также в выборе сети (стандарте
                токена).
              </p>
              <p>
                Если вы укажете недействительные, неправильные или
                заблокированные платежные реквизиты, обмен прекращается без
                обязательств SafeExhcangerr по возмещению.
              </p>
              <p>
                Пожалуйста, обратитесь в нашу службу поддержки, если у вас
                возникла одна из указанных выше проблем. В некоторых случаях
                транзакции могут производиться вручную с взысканием
                дополнительной комиссии по обслуживанию SafeExhcangerr в размере
                от 5 долларов США и комиссии сети.
              </p>
              <p>
                Мы можем устанавливать ежедневные, месячные и годовые
                ограничения объема транзакций для каждого Аккаунта. Если вы
                хотите совершить транзакцию сверх лимита, вам может
                потребоваться предоставить дополнительную информацию и
                документацию. Чтобы внести изменения в ваши индивидуальные
                лимиты, пожалуйста, обратитесь в нашу службу поддержки.
              </p>
              <p>
                Обратите внимание, что могут применяться лимиты наличных сделок
                в соответствии с требованиями законодательства места проведения
                операции.
              </p>
              <p>
                Операции обмена, совершенные через Сервис, окончательны и не
                подлежат возмещению.
              </p>
              <p>
                Мы можем время от времени изменять список услуг, комиссий и
                поддерживаемых виртуальных валют без предварительного
                уведомления. Пожалуйста, посетите наш сайт, чтобы быть в курсе.
              </p>
            </div>

            <div class="aml-rules-content" data-tab-content="4">
              <h2 class="aml-rules-content-title">Запрещенная деятельность</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы можем отказать или ограничить предоставление услуг,
                        если вы используете Сервис для какой-либо из
                        перечисленных запрещенных деятельностей.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  SafeExhcangerr сохраняет за собой право отказать вам в
                  предоставлении своих услуг или наложить постоянные или
                  временные ограничения на использование Сервиса
                  (приостановить/прекратить действие Аккаунта, заморозить
                  активы, установить лимиты на услуги и транзакции без
                  какой-либо ответственности перед вами или третьими лицами),
                  если вы или связанное с вами лицо:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >не предоставили документы и данные, требуемые
                        SafeExhcangerr, необходимые для выполнения мер проверки,
                        или предоставили ложные или противоречивые данные;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >подозреваетесь в совершении операций, которые могут
                        быть связаны с отмыванием денег, финансированием
                        терроризма, мошенничеством или другими преступлениями и
                        противоправной деятельностью;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >находитесь в списке санкций, проживаете, находитесь или
                        зарегистрированы в стране или на территории, подпадающей
                        под санкции, или иным образом не прошли наши проверки;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >нарушаете права интеллектуальной собственности
                        SafeExhcangerr или третьего лица;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >совершаете клевету, преследование, унижение, угрозы или
                        обман в отношении других, собираете или пытаетесь
                        собрать личную информацию о других без их согласия;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >находитесь под контролем или являетесь гражданином или
                        резидентом любой страны, где операции с виртуальными
                        активами прямо запрещены, неподдерживаемой страны
                        (например, Соединенные Штаты Америки, включая все
                        территории США) в соответствии с нашей Политикой ПВК/ФТ,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >осуществляете без соответствующего разрешения
                        деятельность, подлежащую лицензированию;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >занимаетесь одним из таких видов предпринимательской
                        деятельности: нерегулируемые азартные игры и лотереи,
                        торговля оружием, торговля наркотическими веществами,
                        токсичными/радиоактивными материалами, пирамиды и
                        инвестиционные схемы, кредитные и коллекторские услуги.
                      </span>
                    </li>
                  </ul>

                  <p>
                    Этот список не является исчерпывающим. SafeExhcangerr по
                    своему усмотрению определяет, относится ли деятельность к
                    одной из запрещенных категорий.
                  </p>
                </div>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="5">
              <h2 class="aml-rules-content-title">
                Контент и права интеллектуальной собственности
              </h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы можем отказать или ограничить предоставление услуг,
                        если вы используете Сервис для какой-либо из
                        перечисленных запрещенных деятельностей.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  SafeExhcangerr сохраняет за собой право отказать вам в
                  предоставлении своих услуг или наложить постоянные или
                  временные ограничения на использование Сервиса
                  (приостановить/прекратить действие Аккаунта, заморозить
                  активы, установить лимиты на услуги и транзакции без
                  какой-либо ответственности перед вами или третьими лицами),
                  если вы или связанное с вами лицо:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >не предоставили документы и данные, требуемые
                        SafeExhcangerr, необходимые для выполнения мер проверки,
                        или предоставили ложные или противоречивые данные;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >подозреваетесь в совершении операций, которые могут
                        быть связаны с отмыванием денег, финансированием
                        терроризма, мошенничеством или другими преступлениями и
                        противоправной деятельностью;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >находитесь в списке санкций, проживаете, находитесь или
                        зарегистрированы в стране или на территории, подпадающей
                        под санкции, или иным образом не прошли наши проверки;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >нарушаете права интеллектуальной собственности
                        SafeExhcangerr или третьего лица;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >совершаете клевету, преследование, унижение, угрозы или
                        обман в отношении других, собираете или пытаетесь
                        собрать личную информацию о других без их согласия;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >находитесь под контролем или являетесь гражданином или
                        резидентом любой страны, где операции с виртуальными
                        активами прямо запрещены, неподдерживаемой страны
                        (например, Соединенные Штаты Америки, включая все
                        территории США) в соответствии с нашей Политикой ПВК/ФТ,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >осуществляете без соответствующего разрешения
                        деятельность, подлежащую лицензированию;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >занимаетесь одним из таких видов предпринимательской
                        деятельности: нерегулируемые азартные игры и лотереи,
                        торговля оружием, торговля наркотическими веществами,
                        токсичными/радиоактивными материалами, пирамиды и
                        инвестиционные схемы, кредитные и коллекторские услуги.
                      </span>
                    </li>
                  </ul>

                  <p>
                    Этот список не является исчерпывающим. SafeExhcangerr по
                    своему усмотрению определяет, относится ли деятельность к
                    одной из запрещенных категорий.
                  </p>
                </div>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="6">
              <h2 class="aml-rules-content-title">Электронные коммуникации</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы будем общаться с вами по электронной почте и
                        push-уведомлениям.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Ожидайте обновления по Сервису, настоящим Условиям и
                        подробностям о ваших транзакциях.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Если вы не хотите получать электронную почту, следуйте
                        инструкциям в этих сообщениях.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Пользуясь Сервисом и предоставляя нам свои контактные данные,
                  вы соглашаетесь получать электронные сообщения по электронной
                  почте, мессенджерам или push-сообщения касательно, без
                  ограничений:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>подтверждения электронной почты; </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>входа в Аккаунт и его безопасности; </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>использования вами Сервиса; </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >транзакций, проведенных через Сервис, и их статусов;
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>обновлений Сервиса и настоящих Условий. </span>
                    </li>
                  </ul>

                  <p>
                    Некоторые оповещения можно настроить с помощью Аккаунта.
                  </p>

                  <p>
                    Однако следует отметить, что некоторые электронные письма
                    могут рекламировать наши услуги или предложения. Если вы не
                    заинтересованы, вы можете отказаться, следуя инструкциям в
                    этих электронных письмах. Подробнее о том, как мы
                    обрабатываем персональные данные, ознакомьтесь в Политике
                    приватности.
                  </p>
                </div>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="7">
              <h2 class="aml-rules-content-title">Сторонние сайты и сервисы</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Некоторые функции Сервиса зависят от сторонних
                        сервисов, которые мы не контролируем, поэтому мы не
                        можем гарантировать бесперебойную работу всех функций.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Некоторые функции Сервиса доступны в совместимости со
                  сторонними сайтами, сервисами, инструментами или контентом. Мы
                  стремимся к бесперебойной работе, но поскольку не контролируем
                  эти внешние сервисы, мы не можем гарантировать бесперебойную
                  работу всех функций.
                </p>

                <p>
                  Операции в рамках Сервиса могут производиться с использованием
                  услуг третьих лиц (партнеров, финансовых учреждений и т.п.), в
                  том числе в определенных валютах (гривне, тенге). Инициируя
                  транзакции через Сервис, вы предоставляете нам право и
                  указание передавать таким третьим лицам вашу личную информацию
                  и средства, необходимые для выполнения инициированной вами
                  транзакции.
                </p>

                <p>
                  Помните, что когда вы получаете доступ к этим сторонним
                  сайтам, сервисам, инструментам или контенту и используете их,
                  применяются их условия и политика приватности, и SafeExhcangerr
                  не несет ответственности за какие-либо убытки, убытки или
                  другие обязательства, возникающие в результате вашего
                  взаимодействия с ними. SafeExhcangerr не несет ответственности
                  за действия таких третьих лиц.
                </p>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="8">
              <h2 class="aml-rules-content-title">
                Раскрытие информации о рисках
              </h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Считается, что инвестиции в виртуальные активы связаны
                        с определенными рисками. Пожалуйста, проведите
                        собственное исследование, прежде чем принимать
                        какие-либо решения по операциям с виртуальной валютой.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Из-за потенциальных убытков инвестиции в виртуальную валюту,
                  как правило, считаются высокорисковыми. Основные риски:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы можете потерять все инвестированные деньги из-за
                        высокой волатильности виртуальных активов.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Рынок виртуальных валют в значительной степени
                        нерегулируемый, поэтому вы можете потерять деньги из-за
                        кибератак или финансовых преступлений.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Возможно, вы не сможете продать свои инвестиции, если
                        захотите, из-за сбоев в работе технологий, кибератаки,
                        смешивания средств и других проблем, вызывающих
                        задержку.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Виртуальные валюты не обязательно имеют определенную
                        форму защиты или регулирования каким-либо
                        государственным органом, а значит, обменивая
                        криптоактивы, вы не сможете обеспечить соблюдение
                        каких-либо гарантий или мер безопасности, ожидаемых от
                        регулируемых финансовых услуг.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Вы должны провести собственное исследование, прежде чем
                  инвестировать. SafeExhcangerr не предоставляет и не будет
                  предоставлять инвестиционные или юридические консультации
                  относительно вашего обмена. Этим вы подтверждаете свои
                  понимания, что только вы несете ответственность за свои
                  решения и действия, выполняемые в рамках Сервиса.
                </p>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="9">
              <h2 class="aml-rules-content-title">
                Гарантии и отказ от ответственности
              </h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>Сервис предоставляется "как есть". </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы отказываемся от всех гарантий функционирования
                        Сервиса, кроме прямо предусмотренных настоящими
                        Условиями в течение периода действия вашей лицензии.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Программное обеспечение Сервиса может работать с
                        ошибками, в этом случае мы приложим все усилия, чтобы
                        восстановить его правильную работу.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы гарантируете, что не будете использовать Сервис для
                        каких-либо противоправных действий.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Если иное четко не предусмотрено настоящими Условиями,
                  SafeExhcangerr отказывается от всех гарантий, в максимально
                  допустимой законодательством степени, в отношении Сервиса, его
                  функционала и Контента, включая, без ограничений, гарантии
                  коммерческой пригодности, пригодности для определенной цели и
                  ненарушения прав интеллектуальной собственности третьих лиц
                  или других прав.
                </p>

                <p>
                  Если иное четко не предусмотрено настоящими Условиями,
                  SafeExhcangerr отказывается от всех гарантий, в максимально
                  допустимой законодательством степени, в отношении Сервиса, его
                  функционала и Контента, включая, без ограничений, гарантии
                  коммерческой пригодности, пригодности для определенной цели и
                  ненарушения прав интеллектуальной собственности третьих лиц
                  или других прав.
                </p>
                <p>
                  Мы не гарантируем непрерывный, безопасный доступ к Сервису или
                  его безошибочную работу. Несмотря на то, что мы стремимся
                  исправлять дефекты и предотвращать такие вредные элементы, как
                  вирусы, мы не можем гарантировать абсолютный иммунитет Сервиса
                  от таких проблем.
                </p>
                <p>
                  Мы не даем никаких обещаний или гарантий, в частности,
                  относительно точности, полезности, надежности и корректности
                  работы, функций и Контента Сервиса.
                </p>
                <p>
                  Мы можем прервать предоставление Сервиса для технического
                  обслуживания или обновления или, если это необходимо, из
                  соображений безопасности.
                </p>

                <p>
                  Мы заранее сообщим вам о запланированном прекращении работы
                  Услуги, причинах такого перерыва и ожидаемом времени
                  восстановления Услуги. О внеплановых работах мы сообщим вам
                  как можно скорее.
                </p>
                <p>
                  Без ущерба другим гарантиям в соответствии с настоящими
                  Условиями, используя Сервис, вы заверяете и гарантируете, что:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы не будете использовать Сервис в связи с какой-либо
                        незаконной деятельностью или в криминальных целях,
                        включая отмывание денег, налоговое мошенничество,
                        финансирование терроризма или другую злонамеренную
                        деятельность.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы несете ответственность за законность всех операций и
                        действий.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Выполнение Условий не нарушает и не будет нарушать
                        каких-либо других заключенных вами соглашений.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы владеете достаточным знанием о виртуальной валюте,
                        чтобы пользоваться нашим Сервисом, и понимаете, что вы
                        несете полную ответственность за определение характера,
                        пригодности, рисков и соответствия нашего Сервиса.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Средства, которые вы переводите через Сервис,
                        происходят из законных источников.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы не будете выдавать себя за любое физическое лицо или
                        представителя юридического лица, а также не будете
                        совершать другие мошеннические, ложные или обманчивые
                        действия.
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="10">
              <h2 class="aml-rules-content-title">
                Ограничение ответственности
              </h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Ответственность SafeExhcangerr ограничена согласно этому
                        разделу, поэтому внимательно прочтите его, чтобы
                        понимать, чего ожидать.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  SafeExhcangerr, а также наши связанные юридические лица,
                  директора, партнеры, сотрудники, подрядчики или агенты не
                  несут ответственность за какие-либо косвенные, случайные,
                  специальные, штрафные или косвенные убытки, причиненные
                  использованием или невозможностью использования Сервиса. Это
                  включает убытки, возникшие в результате использования
                  Контента, потери прибыли, ущерба деловой репутации, или сбоев,
                  вызванных ошибками, дефектами, технологическими атаками,
                  вирусами или хакерством, даже если SafeExhcangerr был уведомлен
                  о возможности такого ущерба.
                </p>

                <p>
                  SafeExhcangerr не несет ответственности за какие-либо неточности
                  или упущения в Контенте.
                </p>
                <p>
                  Указанные ограничения могут не применяться, если это запрещено
                  законом.
                </p>
                <p>
                  Если какая-либо часть гарантийных оговорок или ограничений
                  ответственности будет признана недействительной или не
                  подлежащей исполнению, и если будет определено, что
                  SafeExhcangerr несет перед вами ответственность, наша полная
                  ответственность ограничивается общей суммой комиссий,
                  полученных SafeExhcangerr в связи с использованием вами Сервиса
                  в течение одного года, предшествовавшего претензиям.
                </p>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="11">
              <h2 class="aml-rules-content-title">Возмещение</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Если вы нарушаете эти Условия, неправильно используете
                        Сервис, нарушаете какой-либо закон или права третьих
                        лиц, вы соглашаетесь возместить ущерб и защитить
                        SafeExhcangerr.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Вы соглашаетесь защищать, возмещать убытки и освободить
                  SafeExhcangerr, наши дочерние компании, директоров, партнеров,
                  сотрудников, подрядчиков и агентов от любых претензий,
                  ответственности, убытков и расходов, включая обоснованные
                  юридические и бухгалтерские расходы, возникающие в результате:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>нарушения вами настоящих Условий, </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >вашего использования/злоупотребления Сервисом,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >нарушение вами действующего законодательства, прав
                        интеллектуальной собственности третьих сторон,
                        обязательств по конфиденциальности, публичности или
                        других прав, заключенных вами с третьей стороной
                        соглашений или договоренностей,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >вашего мошенничества, халатности и неправомерного
                        поведения,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>осуществление Запрещенной деятельности. </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Мы оставляем за собой право выбирать способы юридической
                  защиты, которые мы сочтем нужными, включая случаи, в которых
                  вы освобождаете нас от ответственности. Поэтому вы
                  соглашаетесь сотрудничать с нами по реализации нашей стратегии
                  защиты своих прав.
                </p>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="12">
              <h2 class="aml-rules-content-title">
                Применимое право и разрешение споров
              </h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Настоящие Условия регулируются законодательством
                        Республики Польша. При использовании Сервиса на
                        территории Турецкой Республики применяются законы
                        Турецкой Республики.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы надеемся решить все вопросы мирным путем, но если
                        между нами возникнет серьезный спор, его должен решать
                        компетентный суд.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  Настоящие Условия регулируются законодательством Республики
                  Польша, за исключением коллизионных норм. При использовании
                  Сервиса на территории Турецкой Республики применяются законы
                  Турецкой Республики.
                </p>

                <p>
                  Если Сервис или его использование противоречит местному
                  законодательству страны, в которой вы получаете к нему доступ,
                  воздержитесь от его использования. Вы несете ответственность
                  за соблюдение местных норм.
                </p>

                <p>
                  Без ограничения каких-либо законных прав потребителей, вы
                  соглашаетесь, что любые споры, конфликты, претензии или
                  противоречия, прямо или косвенно возникающие в связи с
                  Сервисом или настоящими Условиями, включая, без ограничения,
                  касающиеся их действительности, трактования или возможности
                  выполнения сначала решаются путем мирных переговоров с
                  SafeExhcangerr в соответствии с принципами добросовестности и
                  сотрудничества.
                </p>

                <p>
                  Все претензии должны быть поданы в течение одного года с
                  момента возникновения, если специальные законы не
                  предусматривают более длительный период.
                </p>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="13">
              <h2 class="aml-rules-content-title">Прекращение</h2>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Чтобы прекратить действие этого соглашения, вы должны
                        извлечь все активы, удалить Аккаунт и больше не
                        пользоваться Сервисом.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы можем прекратить ваш доступ к Сервису по
                        соображениям безопасности, если вы нарушаете настоящие
                        Условия, законодательство или по требованию компетентных
                        органов.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  SafeExhcangerr оставляет за собой право приостановить или
                  прекратить действие вашего Аккаунта и отказать вам в
                  предоставлении услуг в следующих случаях:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >фактическое или подозреваемое нарушение вами настоящих
                        Условий,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >предоставление ложной, неполной, обманчивой или
                        неточной информации,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>осуществление Запрещенной деятельности, </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >мы обоснованно подозреваем вас в использовании Сервиса
                        с мошеннической целью, нарушении законов или прав,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >ваши действия или поведение составляют для нас
                        регулятивные риски,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >мы обоснованно считаем, что ваш Аккаунт был взломан,
                        используется неверифицированным лицом или по другим
                        причинам безопасности,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >по требованию компетентного суда, государственного
                        органа, агентства или правоохранительного органа.
                      </span>
                    </li>
                  </ul>

                  <p>
                    Вы можете прекратить это соглашение в любое время путем
                    удаления вашего Аккаунта и прекращение использования
                    Сервиса. Пожалуйста, выведите перед этим все активы на
                    внешние счета.
                  </p>
                  <p>
                    Если ваш Аккаунт или действие настоящего соглашения
                    прекращается по какой-либо причине, вы соглашаетесь:
                  </p>

                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>немедленно прекратить использование Сервиса, </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >оплатить непогашенные обязательства перед SafeExhcangerr,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >что действие всех разрешений и лицензий,
                        предоставленных в соответствии с настоящими Условиями,
                        прекращается,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >что мы будем хранить определенную информацию и данные
                        Аккаунта в соответствии с действующими законами и
                        правилами, а также
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >что мы не несем ответственности перед вами или третьими
                        лицами за прекращение действия Аккаунта и услуг или
                        сохранение информации или данных Аккаунта.
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="aml-rules-content" data-tab-content="14">
              <h2 class="aml-rules-content-title">Другие условия</h2>

              <p>
                Мы оставляем за собой право в любое время по своему усмотрению,
                предварительно известив: изменить, приостановить или прекратить
                предоставление Сервиса, Контента, функций или услуг,
                предлагаемых через Сервис. Вы соглашаетесь с тем, что мы не
                несем ответственности перед вами или какой-либо третьей
                стороной, в любом из вышеперечисленных случаев.
              </p>
              <p>
                Мы можем передать наши права и обязанности по настоящим Условиям
                третьей стороне, если это не повлияет на ваши права или наши
                обязательства.
              </p>
              <p>
                Мы оставляем за собой право в любое время по своему усмотрению
                изменять настоящие Условия. В случае существенных изменений,
                влияющих на использование вами Сервиса, мы уведомим вас до даты
                вступления в силу изменений. Продолжая пользоваться Сервисом, вы
                соглашаетесь с обновленной версией этих Условий.
              </p>
              <p>
                Если какое-либо положение настоящих Условий будет признано
                незаконным, недействительным или не имеющим исковой силы,
                остальные положения этих Условий будут оставаться полностью
                действительными и подлежат исполнению.
              </p>
              <p>
                Печатная версия этих Условий приемлема в судебном или
                административном производстве, связанном с использованием
                Сервиса в том же объеме и на тех же условиях, что и другие
                деловые документы и записи, первоначально созданные и
                сохраненные в печатном виде.
              </p>
            </div>

            <div class="aml-rules-content" data-tab-content="15">
              <h2 class="aml-rules-content-title">Политика AML</h2>

              <p>
                SafeExhcangerr является обменником криптовалют, который очень
                серьезно относится к вопросу безопасности своих клиентов и
                соблюдению законов в сфере финансовых операций. Мы считаем, что
                защита клиентских данных и финансовых средств - это наивысший
                приоритет, и поэтому он предпринимает все возможные меры, чтобы
                обеспечить максимальную безопасность.
              </p>
              <p>
                Одной из наиболее важных мер является соблюдение политики AML
                (Anti-Money Laundering - борьба с отмыванием денег) и KYC (Know
                Your Customer - знай своего клиента). Эти политики помогают
                защитить нас от возможного использования платформы для
                финансовых преступлений, таких как отмывание денег,
                финансирование терроризма или других незаконных операций.
              </p>

              <p>
                Используя наш сервис для обмена криптовалют, вы соглашаетесь с
                следующими правилами и гарантиями:
              </p>

              <div class="aml-list">
                <h2 class="aml-list-title">Если коротко:</h2>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Чтобы прекратить действие этого соглашения, вы должны
                        извлечь все активы, удалить Аккаунт и больше не
                        пользоваться Сервисом.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы можем прекратить ваш доступ к Сервису по
                        соображениям безопасности, если вы нарушаете настоящие
                        Условия, законодательство или по требованию компетентных
                        органов.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  SafeExhcangerr оставляет за собой право приостановить или
                  прекратить действие вашего Аккаунта и отказать вам в
                  предоставлении услуг в следующих случаях:
                </p>

                <div class="aml-list">
                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы гарантируете, что вы не являетесь гражданином и не
                        проводите операции от имени граждан стран, которые
                        находятся под черным и серым списком Financial Action
                        Task Force (FATF), а также следующих стран: Афганистан,
                        Американское Самоа, Виргинские острова США, территория
                        Гуам, Иран, Йемен, Ливия, Государство Палестина,
                        Пуэрто-Рико, Сомали, Корейская Народно-Демократическая
                        Республика, Северные Марианские острова, США, Сирия,
                        Российская Федерация, Республика Беларусь, Республика
                        Судан, Приднестровье, временно оккупированные территории
                        Грузии, Турецкая Республика Северного Кипра, Западная
                        Сахара, Федеративная Республика Амбазония, Косово, Южный
                        Судан, Канада, Никарагуа, Тринидад и Тобаго, Венесуэла,
                        и временно оккупированные территории Украины.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы обязуетесь соблюдать все применимые законы и
                        нормативные акты в вашей стране, связанные с обменом
                        криптовалют.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Ваши средства, используемые для обмена криптовалют,
                        должны быть законно приобретены, и вы не можете
                        использовать средства, происходящие из незаконных
                        источников.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Вы соглашаетесь соблюдать наши правила и процедуры
                        проверки личности, включая предоставление необходимых
                        документов и информации при необходимости.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >В случае подозрения на незаконную или мошенническую
                        деятельность, мы оставляем за собой право приостановить
                        операции и сообщить о них соответствующим органам
                        власти.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Все операции, проводимые через наш сервис, подлежат
                        мониторингу на предмет соблюдения нормативных требований
                        и безопасности.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Мы рекомендуем вам принимать дополнительные меры
                        безопасности, такие как использование надежных
                        кошельков, двухфакторной аутентификации и обновление
                        программного обеспечения.
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >Платежи с бирж, таких как Garantex и Commex, а также
                        следующих сервисов - Tornado Cash, Hydra, Blender.io,
                        Lazarus Group, Genesis Market, ChipMixer, Shinbad.io,
                        строго запрещены. Транзакции с указанными платформами
                        будут немедленно заблокированы.
                      </span>
                    </li>
                  </ul>

                  <p>
                    Вы можете прекратить это соглашение в любое время путем
                    удаления вашего Аккаунта и прекращение использования
                    Сервиса. Пожалуйста, выведите перед этим все активы на
                    внешние счета.
                  </p>
                  <p>
                    Если ваш Аккаунт или действие настоящего соглашения
                    прекращается по какой-либо причине, вы соглашаетесь:
                  </p>

                  <ul class="aml-list-content list-reset">
                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span>немедленно прекратить использование Сервиса, </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >оплатить непогашенные обязательства перед SafeExhcangerr,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >что действие всех разрешений и лицензий,
                        предоставленных в соответствии с настоящими Условиями,
                        прекращается,
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >что мы будем хранить определенную информацию и данные
                        Аккаунта в соответствии с действующими законами и
                        правилами, а также
                      </span>
                    </li>

                    <li class="aml-list-item">
                      <div class="sep-circles">
                        <div class="circles"></div>
                      </div>
                      <span
                        >что мы не несем ответственности перед вами или третьими
                        лицами за прекращение действия Аккаунта и услуг или
                        сохранение информации или данных Аккаунта.
                      </span>
                    </li>
                  </ul>
                </div>

                <p>
                  В случае возникновения каких-либо вопросов или сомнений,
                  связанных с использованием нашего сервиса, обратитесь к нашей
                  службе поддержки.
                </p>
                <p>
                  SafeExhcangerr также сильно заинтересован в безопасной торговле
                  криптовалютой. Он проводит строгие проверки каждой транзакции,
                  чтобы убедиться, что средства, используемые для покупки или
                  продажи криптовалюты, не связаны с преступными действиями. Все
                  сделки подвергаются проверке и анализу с использованием
                  передовых технологий, что позволяет SafeExhcangerr оперативно
                  выявлять и предотвращать возможные финансовые преступления.
                </p>
                <p>
                  В случае нарушения положений нашей политики AML и
                  предотвращения мошенничества, мы оставляем за собой право
                  временно заморозить вашу транзакцию на срок 30 дней с целью
                  проведения необходимых проверок и расследований.
                </p>
                <p></p>
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
    <div class="overlay"></div>

    <script src="./js/user.js"></script>

 

    <script>
      // Находим все кнопки и элементы табов
      const tabs = document.querySelectorAll(".how__tabs-btn");
      const tabContents = document.querySelectorAll(".how__list");

      // Добавляем обработчик событий для каждой кнопки
      tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
          // Убираем активный класс у всех кнопок
          tabs.forEach((item) => item.classList.remove("active"));

          // Добавляем активный класс на текущую кнопку
          tab.classList.add("active");

          // Скрываем все контенты табов
          tabContents.forEach((content) => {
            content.style.display = "none";
          });

          // Показываем контент для выбранного таба
          const targetTab = tab.getAttribute("data-btn");
          const activeTabContent = document.querySelector(
            `[data-tabs="${targetTab}"]`
          );
          activeTabContent.style.display = "flex";
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
          document.querySelectorAll(".user-panel-mail").forEach((element) => {
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
