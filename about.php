<?php
	session_start();
	include "connect.php";
    $role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АРБОЛИТ ДОМСТРОЙ</title>
    <link rel="stylesheet" type="text/css" href="asset/css/about.css" />
<script type="text/javascript" src="asset/js/jquery.js"></script>
<link rel="stylesheet" href="asset/css/projects.css">
<link rel="stylesheet" href="asset/css/adapIndex.css">	
	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
</head>
<body><?php
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
<script type="text/javascript">
		$(function(){
					$("#about-button").css({
				opacity: 1
			});
			$("#contact-button").css({
				opacity: 1
			});
		            $("#page-wrap div.js-click").click(function(){
            	            	$clicked = $(this);
            	                       	if ($clicked.css("opacity") != "2" && $clicked.is(":not(animated)")) {
            		            		$clicked.animate({
            			opacity: 1,
            			borderWidth: 5
            		}, 600 );
            		var idToLoad = $clicked.attr("id").split('-');
            		$("#content").find("div:visible").fadeOut("fast", function(){
            			$(this).parent().find("#"+idToLoad[0]).fadeIn();
            		})
            	}
            	$clicked.siblings(".button").animate({
            		opacity: 1,
            		borderWidth: 1,
                    
                  
            	}, 600 );
            });
		});
        $( ".js-click" ).click(function() {
    $( ".js-click" ).css('background', 'green');
  });
	</script>
    <main>
    <div id="page-wrap">
<div class="bok">
<div class="zag">
   Разделы
</div>    
<div id="home-button" class="js-click">
<p>Об организации</p>
</div>
<div id="about-button" class="js-click">
<p>Новости</p>
</div>
</div>




<div id="content">

<div id="home">

<h1>Об организации “Арболит ДомСтрой”</h1>
<p>ООО «АРБОЛИТ ДОМСТРОЙ» работает на рынке общего строительства работы c 2019 года. Основным видом деятельности компании на начальном этапе являлось ремонт жилых и нежилых помещений, строительство малоэтажных домов/ коттеджей. Сейчас же компания дполнительно открыла свой цех по производству арболитовых блоков.
</p>
<img src="asset/img/installation.png" alt="">
<p>Мы готовы предложить Вам помощь в решении самых серьезных задач, связанных с проектированием, производством и строительством домов из арболитовых блоков, а также домов по каркасной технологии. 
    <br><br>
    «АРБОЛИТ ДОМСТРОЙ» зарекомендовал себя на рынке строительства как надежная, ответственная компания. Сделав заказ у нас, Вы будете приятно удивлены низкими ценами, быстрыми сроками производства и высоким качеством строительства. На сегодняшний день у нас имеется широкий ассортимент проектов городской архитектуры города Ишимбай и Ишимбайского района.
<br><br>
ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ АРБОЛИТ ДОМСТРОЙ находится в Башкирии по адресу 453211, Респ Башкортостан, Ишимбайский р-н, г Ишимбай, ул Губкина, д 48, офис 3.  Руководитель: Буранбаев Радик Робертович. Также ООО "АРБОЛИТ ДОМСТРОЙ" работает по следующим направлениям: Строительство инженерных коммуникаций для водоснабжения и водоотведения, газоснабжения, Разведочное бурение, Разборка и снос зданий, Подготовка строительства.

</p>
</div>

<div id="about">

<p>Содержание для пункта новостей(в разработке)</p>

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