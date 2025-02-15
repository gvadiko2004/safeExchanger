const btnUserTab = document.querySelectorAll(".user-profile-tabs-btn");

btnUserTab.forEach((link) => {
  link.addEventListener("click", function () {
    btnUserTab.forEach((linkRemove) => {
      linkRemove.classList.remove("active");
    });

    link.classList.add("active");
  });
});

// Исправленный второй блок

const amlRulesBtn = document.querySelectorAll(".aml-rules-btn");
const amlRulesContent = document.querySelectorAll(".aml-rules-content");

amlRulesBtn.forEach((linkRule) => {
  linkRule.addEventListener("click", function () {
    // Убираем активность у всех кнопок
    amlRulesBtn.forEach((linkRuleRemove) => {
      linkRuleRemove.classList.remove("active");
    });

    // Добавляем активность к текущей кнопке
    linkRule.classList.add("active");

    // Получаем значение data-tab-aml-btn текущей кнопки
    const tabValue = linkRule.getAttribute("data-tab-aml-btn");

    // Скрываем весь контент
    amlRulesContent.forEach((content) => {
      content.style.display = "none";
    });

    // Показываем контент, соответствующий выбранной кнопке
    const activeContent = document.querySelector(`.aml-rules-content[data-tab-content="${tabValue}"]`);
    if (activeContent) {
      activeContent.style.display = "block";
    }
  });
});

// Опционально, можно автоматически открыть первый контент при загрузке страницы
if (amlRulesBtn.length > 0) {
  amlRulesBtn[0].click();
}
