// Получаем элементы по селекторам
var menuIcon = document.querySelector('.navbar-toggler');
var menuItems = document.querySelectorAll('.nav-item');

// Добавляем обработчик события click к каждому элементу nav-item
menuItems.forEach(function(item) {
  item.addEventListener('click', function() {
    // Вызываем метод toggle у элемента navbar-toggler
    menuIcon.click();
  });
});
