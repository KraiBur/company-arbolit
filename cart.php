<?php
	include "controllers/check.php";

	include "connect.php";

	$sql = sprintf("SELECT `order_id`, `product_id`, `orders`.`count`, `name`, `price`, `path` FROM `orders` INNER JOIN `products` USING(`product_id`) WHERE `user_id`='%s'", $_SESSION["user_id"]);
	$result = $connect->query($sql);

	$products = "";
	while($row = $result->fetch_assoc())
		$products .= sprintf('
		<div class="col2">
		<img src="%s" alt="">
		<div class="row">
			<a href="product.php?id=%s">%s</a>
			<p>%s руб./шт</p>
		</div>
		<div class="sum">
		<p><a href="controllers/delete_cart.php?id=%s">-</a></p>
		<p>%s00 штук</p>
		<p><a href="controllers/add_cart.php?id=%s">+</a></p>
	</div>
	</div>
', $row["path"], $row["product_id"], $row["name"], $row["price"],$row["product_id"], $row["count"], $row["product_id"]);

	if($products == "")
		$products = '<h3 class="text-center">Корзина пуста</h3>';

	$sql = sprintf("SELECT * FROM `orders` WHERE `user_id`='%s' AND `number` IS NOT NULL AND `product_id`=0 ORDER BY `created_at` DESC ", $_SESSION["user_id"]);
	$result = $connect->query($sql);

	$orders = "";
	while($row = $result->fetch_assoc()) {
		$del = ($row["status"] == "Новый") ? '<p class="text-right"><a onclick="return confirm(\'Вы действительно хотите удалить этот заказ?\')" href="controllers/delete_order.php?id='.$row["order_id"].'" class="text-small">Удалить заказ</a></p>' : '';
		$orders .= sprintf('
			<div class="col">
				<div class="row">
					<p class="ttt" >Заказ: %s</p>
					%s
				</div>
				<div class="row">
					<p class="ttt" >Статус: <b>%s</b></p>
				<p class="ttt" >Количество: %s</p>
				</div>
			</div>
		', $row["number"], $del, $row["status"],$row["count"]);
	}

	if($orders == "")
		$orders = '<h3 class="text-center">Список заказов пуст</h3>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>АРБОЛИТ ДОМСТРОЙ</title>
	<script>
		let role = "<?= (isset($_SESSION["role"])) ? $_SESSION["role"] : "guest" ?>";
	</script>
	<link rel="stylesheet" href="asset/css/cart.css">
	<link rel="stylesheet" href="asset/css/adapIndex.css">
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
	<main>

			<div class="head">Ваша корзина</div>
			<div class="row2">
				<?= $products ?>
			</div>
			<br>
			<div class="wrap">
				<form action="controllers/checkout.php" class="f__cart" method="POST">
					<input type="password" placeholder="Ваш пароль" name="password" required>
					<button class="knop2">Сформировать заказ</button>
				</form>
			</div>

			<div class="head">Ваши заказы</div>
			<div class="row">
				<?= $orders ?>
			</div>
	</main>

<!--Начало футера-->
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
	