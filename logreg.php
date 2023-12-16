<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АРБОЛИТ ДОМСТРОЙ</title>
    <link rel="stylesheet" href="asset/css/logstyle.css">
    <link rel="stylesheet" href="asset/css/adapIndex.css">

</head>

<body>
<?php
$m = '';
if(isset($_SESSION["role"])) {$m = '<a href="cart.php">Корзина</a>';
	$m .= ($_SESSION["role"] == "admin") ? '<a href="admin.php" class="underline-one">Заказы</a>' : '';
$m .= '<a href="controllers/logout.php">Выход</a>';}

$menu = sprintf($m);
?>
	
<div class="menu1">
        <div class="logo"><a href="index.php"><img src="asset/img/logo.svg" alt=""></a></div>
        <div class="links">
            <a href="index.php">Главная</a>
            <a href="projects.php">Проекты</a>
            <a href="uslugi.php">Услуги</a>
            <a href="catalog.php">Товары</a>
            <a href="about.php">О нас</a><?= $menu ?>
        </div>
 

    <!-- выдвижное меню -->
<div class="menu">
    <nav class="nav-menu">
        <ul class="nav-menu-list">
        <li class="nav-menu-list-item"><a href="index.php">Главная</a></li>
            <li class="nav-menu-list-item"><a href="about.php">О нас</a></li>
            <li class="nav-menu-list-item"><a href="projects.php">Проекты</a></li>
            <li class="nav-menu-list-item"><a href="uslugi.php">Услуги</a></li>
            <li class="nav-menu-list-item"><a href="catalog.php">Товары</a></li>
            <li class="nav-menu-list-item"><a href="catalog.php"> <?= $menu ?></a></li>
        </ul>
        <div class="acc1">
            <a href="logreg.php">    <img src="asset/img/acc.png" alt=""></a>
            <a href="https://t.me/+79869697721"> <img src="asset/img/telegram.png" alt=""></a>
    <a href="https://wa.me/79876265815"> <img src="asset/img/whatsapp.png" alt=""></a>
    <a href="https://vk.com/arbolitrb1">  <img src="asset/img/vk.png" alt=""></a>
  
</div>
    </nav>
</div>


         <!-- Меню-бургер -->
<div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>
<script src="asset/js/script.js"></script>
<div class="acc">
    <a href="logreg.php"><img src="asset/img/acc.png" alt=""></a>
    <a href="https://t.me/+79869697721"> <img src="asset/img/telegram.png" alt=""></a>
    <a href="https://wa.me/79876265815"> <img src="asset/img/whatsapp.png" alt=""></a>
    <a href="https://vk.com/arbolitrb1">  <img src="asset/img/vk.png" alt=""></a>
  
</div>
    </div>

    </div>
    <main>
        <div class="centr">
        <div class="log">
        <div class="head" id="login"><h5>АВТОРИЗАЦИЯ</h5></div>
        <div class="fl1">
        <form action="controllers/login.php" method="POST">
            <input type="text" placeholder="Логин" name="login" required>
            <input type="password" placeholder="Пароль" name="password" required>
            <button class="knop">Войти</button>
        </form>

    </div>
</div>
        <div class="reg">
        <div class="head" id="register"><h3>РЕГИСТАРЦИЯ</h3></div>
        <div class="fl">
        <form action="controllers/register.php" method="POST">
            <input type="text" placeholder="Имя" name="name" pattern="[а-яА-ЯёЁ\s\-]+" required>
            <input type="text" placeholder="Фамилия" name="surname" pattern="[а-яА-ЯёЁ\s\-]+" required>
            <input type="text" placeholder="Отчество" name="patronymic" pattern="[а-яА-ЯёЁ\s\-]+">
            <input type="text" placeholder="Логин" name="login" pattern="[a-zA-Z0-9\-]+" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Пароль" name="password" pattern=".{6,}" required>
            <input type="password" placeholder="Повтор пароля" name="password_repeat" required>
            <button class="knop2">Зарегистрироваться</button>
        </form>
</div>
</div>
</div>



    </main>
    <footer><div class="foot__cont">
<div class="about">
    <img src="asset/img/логоарболит.svg" alt="">
    <h1>КОРОТКО О НАС</h1>
    <p>работаем на рынке общего строительства работы c 2019 года. Основным видом деятельности на начальном этапе являлось ремонт жилых и нежилых помещений, строительство малоэтажных домов/ коттеджей. Сейчас же дополнительно открыли свой цех по производству арболитовых блоков.
</p>
</div>
<div class="footer__menu">
    <h1>МЕНЮ</h1>
    <div class="decoration"></div>
    <a href="index.php">Главная</a>
    <a href="projects.php">Проекты</a>
    <a href="uslugi.php">Услуги</a>
    <a href="catalog.php">Товары</a>
    <a href="about.php">О нас</a>
    <a href="logreg.php">Аккаунт</a>
</div>
<div class="social">
<h1>СОЦИАЛЬНЫЕ СЕТИ</h1>
    <div class="decoration"></div>
    <p>Следите за нами в социальных сетях, чтобы не пропустить новые проекты, разработанные для наших клиентов.</p>
    <div class="footer__acc">
    <a href="https://t.me/+79869697721"> <img src="asset/img/telegram.png" alt=""></a>
    <a href="https://wa.me/79876265815"> <img src="asset/img/whatsapp.png" alt=""></a>
    <a href="https://vk.com/arbolitrb1">  <img src="asset/img/vk.png" alt=""></a>
    </div>
</div></div>
        </footer>
        <div class="btn-up btn-up_hide"></div>

<script>
  const btnUp = {
    el: document.querySelector('.btn-up'),
    scrolling: false,
    show() {
      if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
        this.el.classList.remove('btn-up_hide');
        this.el.classList.add('btn-up_hiding');
        window.setTimeout(() => {
          this.el.classList.remove('btn-up_hiding');
        }, 300);
      }
    },
    hide() {
      if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
        this.el.classList.add('btn-up_hiding');
        window.setTimeout(() => {
          this.el.classList.add('btn-up_hide');
          this.el.classList.remove('btn-up_hiding');
        }, 300);
      }
    },
    addEventListener() {
      // при прокрутке окна (window)
      window.addEventListener('scroll', () => {
        const scrollY = window.scrollY || document.documentElement.scrollTop;
        if (this.scrolling && scrollY > 0) {
          return;
        }
        this.scrolling = false;
        // если пользователь прокрутил страницу более чем на 200px
        if (scrollY > 400) {
          // сделаем кнопку .btn-up видимой
          this.show();
        } else {
          // иначе скроем кнопку .btn-up
          this.hide();
        }
      });
      // при нажатии на кнопку .btn-up
      document.querySelector('.btn-up').onclick = () => {
        this.scrolling = true;
        this.hide();
        // переместиться в верхнюю часть страницы
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
      }
    }
  }

  btnUp.addEventListener();
</script>
</body>
</html>