<?php
	session_start();
	include "connect.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АРБОЛИТ ДОМСТРОЙ</title>
    <link rel="stylesheet" href="asset/css/uslugi.css">	
    <link rel="stylesheet" href="asset/css/projects.css">	
    <link rel="stylesheet" href="asset/css/adapIndex.css">	
	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>

</head><?php
$m = '';
if(isset($_SESSION["role"])) {$m = '<a href="cart.php">Корзина</a>';
	$m .= ($_SESSION["role"] == "admin") ? '<a href="admin.php" class="underline-one">Заказы</a>' : '';
$m .= '<a href="controllers/logout.php">Выход</a>';}

$menu = sprintf($m);
?>
	
<div class="menu1">
        <div class="logo"><a href="index.php"><img src="asset/img/logo.svg" alt=""></a> </div>
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
 <main>
    <div class="zag">
        <h1>Наши услуги</h1>
        <h4>Основной вид деятельности: Строительство жилых и нежилых зданий
Дополнительные виды деятельности:</h4>
    </div>
    <div class="uslugi">
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>41.20</h3>
            <p>Строительство жилых и нежилых зданий</p>
        </div>
        <div class="row__img"><img src="asset/img/image(1).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>42.21</h3>
            <p>Строительство инженерных 
            коммуникаций</p>
        </div>
        <div class="row__img"><img src="asset/img/image(3).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>43.13</h3>
            <p>Разведочное бурение</p>
        </div>
        <div class="row__img"><img src="asset/img/image(2).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>43.11</h3>
            <p>Разборка и снос зданий</p>
        </div>
        <div class="row__img"><img src="asset/img/image(4).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>43.12</h3>
            <p>Подготовка строительной площадки</p>
        </div>
        <div class="row__img"><img src="asset/img/image(5).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>43.21</h3>
            <p>Производство электромонтажных работ</p>
        </div>
        <div class="row__img"><img src="asset/img/image(6).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>43.22</h3>
            <p>Производство монтаж отопительных систем
            и кондиционирования воздуха</p>
        </div>
        <div class="row__img"><img src="asset/img/image(7).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>43.31</h3>
            <p>Производство штукатурных работ</p>
        </div>
        <div class="row__img"><img src="asset/img/image(8).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>43.32</h3>
            <p>Работы столярные и плотничные</p>
        </div>
        <div class="row__img"><img src="asset/img/image(9).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>43.33</h3>
            <p>Работы по устройству покрытий полов и облицовке стен</p>
        </div>
        <div class="row__img"><img src="asset/img/image(10).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>43.34</h3>
            <p>Производство малярных и стекольных работ</p>
        </div>
        <div class="row__img"><img src="asset/img/image(11).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>43.39</h3>
            <p>Производство прочих отделочных и завершающих работ</p>
        </div>
        <div class="row__img"><img src="asset/img/image(12).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>43.91</h3>
            <p>Производство кровельных работ</p>
        </div>
        <div class="row__img"><img src="asset/img/image(13).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>43.99</h3>
            <p>Работы строительные, 
            не включенные в другие группировки</p>
        </div>
        <div class="row__img"><img src="asset/img/image(14).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>49.41</h3>
            <p>Деятельность автомобильного грузового транспорта</p>
        </div>
        <div class="row__img"><img src="asset/img/image(15).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>81.10</h3>
            <p>Деятельность по комплексному обслуживанию помещений</p>
        </div>
        <div class="row__img"><img src="asset/img/image(16).png" alt=""></div>
        
        </div>
      </div>
      <div class="row">
        <div class="row__cart">
        <div class="row__text">
            <h3>81.22</h3>
            <p>Деятельность по чистке и уборке 
            зданий</p>
        </div>
        <div class="row__img"><img src="asset/img/image(17).png" alt=""></div>
        
        </div>
        <div class="row__cart">
        <div class="row__text">
            <h3>81.30</h3>
            <p>Деятельность по благоустройству ландшафта</p>
        </div>
        <div class="row__img"><img src="asset/img/image(18).png" alt=""></div>
        
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
<body>
    </html>