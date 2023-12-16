<?php
	session_start();
	include "connect.php";

	$role = (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest";

	?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АРБОЛИТ ДОМСТРОЙ</title>
    <link rel="stylesheet" href="asset/css/adapIndex.css">	
    <link rel="stylesheet" href="asset/css/projects.css">	
    <link rel="stylesheet" href="asset/css/style.css">	

	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
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
            <a href="about.php">О нас</a>	<?= $menu ?>
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
            <a href="logreg.php">    <img src="asset/img/wacc.png" alt=""></a>
            <a href="https://t.me/+79869697721"> <img src="asset/img/wtelegram.png" alt=""></a>
    <a href="https://wa.me/79876265815"> <img src="asset/img/wwhatsapp.png" alt=""></a>
    <a href="https://vk.com/arbolitrb1">  <img src="asset/img/wvk.png" alt=""></a>
  
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
    <a href="logreg.php"><img src="asset/img/wacc.png" alt=""></a>
    <a href="https://t.me/+79869697721"> <img src="asset/img/wtelegram.png" alt=""></a>
    <a href="https://wa.me/79876265815"> <img src="asset/img/wwhatsapp.png" alt=""></a>
    <a href="https://vk.com/arbolitrb1">  <img src="asset/img/wvk.png" alt=""></a>
  
</div>
    </div>
    <div class="banner">
        <img src="asset/img/ban.jpg" alt="">
        <div class="cont__c">
        <div class="qr">
         <div class="photo__qr"> <img src="asset/img/qr.png" alt=""></div>  
            <div class="qr__text">
                <p>Рассчитаем ваш проект! Если вам требуется помощь с расчётом количества арболитовых блоков по готовому проекту – отправьте нам проект на WhatsApp</p>
                <h1>+7 (987) 626 58 15</h1>
                <button class="zayav">ОТПРАВИТЬ ЗАЯВКУ</button>
            </div>
            
        </div></div>
    </div>

    <main>
        <div class="osn__deyat"><div class="z__o">\\основная деятельность</div>
    <div class="text__od">
Основные направления деятельности организации – 
строительство и реконструкция зданий и 
сооружений с выполнением как всего комплекса работ 
«под ключ», так и отдельных видов работ.
</div>
    </div>

    <div class="row__od">
<div class="cart__od">
    <div class="photo__od"><img src="asset/img/icon2.png" alt=""></div>
    <div class="t__od">
        <div class="z__od">Все виды работ</div>
        <div class="tt__od">Клиентам предлагаем полный цикл работ: от проектирования до постройки объекта.</div>
    </div>
</div>
<div class="cart__od">
    <div class="photo__od"><img src="asset/img/icon4.png" alt=""></div>
    <div class="t__od">
        <div class="z__od">Современные технологии</div>
        <div class="tt__od">Используем самые современные технологии строительства и оборудование.</div>
    </div>
</div>
<div class="cart__od">
    <div class="photo__od"><img src="asset/img/icon3.png" alt=""></div>
    <div class="t__od">
        <div class="z__od">Эффективная командная работа</div>
        <div class="tt__od">В нашей компании работают специалисты-строители с большим опытом работы.</div>
    </div>
</div>
    </div>
    <div class="row__od">
<div class="cart__od">
    <div class="photo__od"><img src="asset/img/icon1.png" alt=""></div>
    <div class="t__od">
        <div class="z__od">Ипотека</div>
        <div class="tt__od">Ипотека от ведущих банков</div>
    </div>
</div>
<div class="cart__od">
    <div class="photo__od"><img src="asset/img/icon5.png" alt=""></div>
    <div class="t__od">
        <div class="z__od">Производство арболита</div>
        <div class="tt__od">Производим и продаем собственные арболитовые блоки</div>
    </div>
</div>
<div class="cart__od">
    <div class="photo__od"><img src="asset/img/icon6.png" alt=""></div>
    <div class="t__od">
        <div class="z__od">Гарантия</div>
        <div class="tt__od">На свою работу даем гарантию 3-5 лет по договору. На используемые материалы гарантию дает производитель.</div>
    </div>
</div>
    </div>

  
</main>  <div class="z__oa">\\коротко об арболите</div>  
    <header>
        <div class="cont__c">
    <div class="content__header">
                <img src="asset/img/arb.png" alt="">
                <div class="block__text-arbolit">
                    <div class="zag__arbolit">Арболит<div class="line__center"></div>
                    </div>
                    <div class="text-arbolit">это экологичный строительный
                        материал, прочный, с отличными
                        звукоизоляционными и теплосберегающими качествами,
                        арболит не подвержен поражению грибками и
                        гниению.</div>
                </div>
            </div>
</div>
    </header>

<div class="cont__c2">
<div class="one__block">
    <div class="zag__preim">Преимущество<br/>арболитового<br/>блока</div>
    <div class="obsh">   
    <div class="con__preim">
        <div class="tt__gr">Прекрасно переносит транспортировку</div>
        <div class="line__gr"></div>
        <div class="tt__gr">Облегчённый, экономичный фундамент</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Возможность отказаться от армирования кладки и устройства монолитных поясов</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Не даёт массивные трещины при колебаниях фундамента</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Быстрое возведение стен</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Легкость в обработке и монтажа. Можно разобраться самому</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Не требуется дополнительное утепление</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Проводить отделку можно практически сразу</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Не поддерживает огонь</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Не гниет, не плесневеет, не боится грызунов</div>
        <div  class="line__gr"></div>
        <div class="tt__gr">Отличное крепление конструкций к стене шурупами, гвоздями, обычными дюбелями</div>
    </div>
</div>
</div>

<div class="gre">
    <img src="asset/img/blocks(2).png" alt="">
    <div class="zag__cha">АРБОЛИТ</div>
    <div class="ye">
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
    </div>
</div>

<div class="grey">
<img src="asset/img/blocks(4).png" alt="">
    <div class="zag__cha">БРУС</div>
    <div class="ye">
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
    </div>
</div>

<div class="grey">
<img src="asset/img/blocks(3).png" alt="">
    <div class="zag__cha">КИРПИЧ</div>
    <div class="ye">
    <div class="green"><img src="asset/img/yes.png" alt=""></div>
    <div class="red"><img src="asset/img/no.png" alt=""></div>
    <div class="red"><img src="asset/img/no.png" alt=""></div>
    <div class="red"><img src="asset/img/no.png" alt=""></div>
    <div class="red"><img src="asset/img/no.png" alt=""></div>
    <div class="red"><img src="asset/img/no.png" alt=""></div>
    <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
    </div>
</div>

<div class="grey">
<img src="asset/img/blocks(1).png" alt="">
    <div class="zag__cha">ГАЗОБЕТОН</div>
    <div class="ye">
    <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="green"><img src="asset/img/yes.png" alt=""></div>
        <div class="red"><img src="asset/img/no.png" alt=""></div>
    </div>
</div>
</div>

<div class="tech__arb">
    <div class="cont__c">
        <div class="zag__ta">Технология производства блоков по ГОСТу</div>
       
    <div class="row__ta">

<div class="block__ta">
    <div class="photo__ta"><img src="asset/img/milano.png" alt=""></div>
    <div class="text__ta">Использование только из хвойных пород древесины щепы должного размера</div>
</div>

<div class="block__ta">
    <div class="photo__ta"><img src="asset/img/mazzucat.png" alt=""></div>
    <div class="text__ta">Использование высококлассного цемента М500</div>
</div>

<div class="block__ta">
    <div class="photo__ta"><img src="asset/img/fanfani.png" alt=""></div>
    <div class="text__ta">Использование сульфата алюминия (применяется для очистки воды)</div>
</div>

<div class="block__ta">
    <div class="photo__ta"><img src="asset/img/cappelini.png" alt=""></div>
    <div class="text__ta">Воду применяют очищеную от примеси</div>
</div>
    
    </div>

    </div>
</div>
  
<div class="cont__c4">
    <div class="tu">
    <div class="row1__character">
    <div class="cr"> 
                 
<div class="carttt">   
 <div class="wytt">   <img  src="asset/img/h1.png" alt="">
    <div class="zazag">Экологичный</div>
    </div> 
 <div class="zatt">Благодаря своему составу (древесная щепа, портландцемент и добавка, используемая также при промышленной очистке воды) арболит считается самым безопасным строительным материалом для здоровья человека.</div>
</div> 
    </div>
    <div class="cr"> 
                   
<div class="carttt">   
 <div class="wytt">   <img  src="asset/img/h2.png" alt="">
    <div class="zazag">Огнестойкий</div>
    </div> 
 <div class="zatt">Арболит относится к классу трудновоспламеняемых материалов, этот материал способен противодействовать открытому огню более 1,5ч.</div>
</div> 
    </div></div>
    <div class="row1__character">
    <div class="cr"> 
                 
<div class="carttt">   
 <div class="wytt">  <img  src="asset/img/h3.png" alt="">
    <div class="zazag">Теплый</div>
    </div> 
 <div class="zatt">Арболит морозостойкий и при этом отлично сохраняет тепло. Показатель теплопроводности 30 сантиметровой стены из арболита соответствует показателю теплопроводности метровой стены из обычного кирпича.</div>
</div> 
    </div>
    <div class="cr"> 
                    
<div class="carttt">   
 <div class="wytt">  <img  src="asset/img/h4.png" alt="">
    <div class="zazag">Легкий</div>
    </div> 
 <div class="zatt">Арболит удобен в работе, так как блоки имеют больший размер и меньший вес. Легкость арболита позволяет заложить любой тип мелкозаглубленного фундамента, так же удобно при транспортировке и доставке к месту проведения строительных работ.</div>
</div> 
    </div>
</div>
    
</div>
<div class="tu">
   <div class="row1__character">
    <div class="cr"> 
                 
<div class="carttt">   
 <div class="wytt"> <img  src="asset/img/h5.png" alt="">
    <div class="zazag">Звукоизолирую <br> -щий</div>
    </div> 
 <div class="zatt">Дом из арболита имеет высокие показатели шумоизоляции, благодаря пористой структуре звук гасится внутри арболитовых блоков.</div>
</div> 
    </div>
    <div class="cr"> 
                   
<div class="carttt">   
 <div class="wytt">   <img  src="asset/img/h6.png" alt="">
    <div class="zazag">Прочный</div>
    </div> 
 <div class="zatt">Имеет высокий предел прочности при изгибе благодаря волокнистой структуре древесного наполнителя.</div>
</div> 
    </div></div>
    <div class="row1__character">
    <div class="cr"> 
                 
<div class="carttt">   
 <div class="wytt">  <img  src="asset/img/h7.png" alt="">
    <div class="zazag">Геометрически точный</div>
    </div> 
 <div class="zatt">Используя высокотехнологичное оборудование, мы выдерживаем арболит в специальных формах для обеспечения точной геометрии блоков.</div>
</div> 
    </div>
    <div class="cr"> 
                    
<div class="carttt">   
 <div class="wytt">  <img  src="asset/img/h8.png" alt="">
    <div class="zazag">Долговечный</div>
    </div> 
 <div class="zatt">Благодаря своему натуральному составу арболит не подвержен гниению и образованию грибка и плесени.</div>
</div> 
    </div>
    </div>
</div>
    

</div>

<!--Начало футера-->
    <footer>
        <div class="foot__cont">
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
<!--Конец футера-->
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