<?php
	include "controllers/check_admin.php";
	include "connect.php";

	$sql = "SELECT * FROM `products` WHERE `product_id`=".$_GET["id"];
	$product = $connect->query($sql)->fetch_assoc();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование товара</title>
	<script src="asset/js/admin.js"></script>
	<link rel="stylesheet" href="asset/css/admin.css">
</head>
<body>
<?php
$m = '';
if(isset($_SESSION["role"])) {
	$m .= ($_SESSION["role"] == "admin") ? '<a href="admin.php" class="underline-one">Заказы</a>' : '';
} else 	$m = '<a href="cart.php">Корзина</a>';
$m .= '<a href="controllers/logout.php">Выход</a>';
$menu = sprintf($m);
?>
	
<div class="menu1">
        <div class="logo"><img src="asset/img/logo.svg" alt=""></div>
        <div class="links">
            <a href="index.php">Главная</a>
            <a href="projects.php">Проекты</a>
            <a href="uslugi.php">Услуги</a>
            <a href="catalog.php">Товары</a>
            <a href="aboutus.php">О нас</a><?= $menu ?>
        </div>
 

    <!-- выдвижное меню -->
<div class="menu">
    <nav class="nav-menu">
        <ul class="nav-menu-list">
            <li class="nav-menu-list-item">Главная</li>
            <li class="nav-menu-list-item">О нас</li>
            <li class="nav-menu-list-item">Проекты</li>
            <li class="nav-menu-list-item">Услуги</li>
            <li class="nav-menu-list-item">Товары2</li>
        </ul>
        <div class="acc">
            <a href="logreg.php">    <img src="asset/img/acc.png" alt=""></a>
<a href=""> <img src="asset/img/telegram.png" alt=""></a>
   
    <a href=""> <img src="asset/img/whatsapp.png" alt=""></a>
   
    <a href="">  <img src="asset/img/vk.png" alt=""></a>
  
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
    <a href=""><img src="asset/img/telegram.png" alt=""></a>
    <a href="">   <img src="asset/img/whatsapp.png" alt=""></a>
 <a href="">  <img src="asset/img/vk.png" alt=""></a>
  
</div>
    </div>
	<main>
		<div class="content">
			
			<div class="head">Изменить товар</div>
			<form enctype="multipart/form-data" action="controllers/update_product.php" method="POST">
				<input type="hidden" name="id" value="<?= $product["product_id"] ?>">
				<input type="hidden" name="path" value="<?= $product["path"] ?>">
				<input type="text" placeholder="Название" name="name" value="<?= $product["name"] ?>" required>
				<input type="number" placeholder="Цена" name="price" value="<?= $product["price"] ?>" required>
				<input type="number" placeholder="Количество на складе" name="count" value="<?= $product["count"] ?>" required>
				<p class="text-left">Фотография товара</p>
				<input type="file" name="image">
				<button>Изменить</button>
			</form>

		</div>
	</main>



	<footer>
<div class="about">
    <img src="asset/img/логоарболит.svg" alt="">
    <h1>КОРОТКО О НАС</h1>
    <p>работаем на рынке общего строительства работы c 2019 года. Основным видом деятельности на начальном этапе являлось ремонт жилых и нежилых помещений, строительство малоэтажных домов/ коттеджей. Сейчас же дополнительно открыли свой цех по производству арболитовых блоков.
</p>
</div>
<div class="footer__menu">
    <h1>МЕНЮ</h1>
    <div class="decoration"></div>
    <a href="">Главная</a>
    <a href="">Проекты</a>
    <a href="uslugi.php">Услуги</a>
    <a href="">Товары</a>
    <a href="">О нас</a>
    <a href="">Аккаунт</a>
</div>
<div class="social">
<h1>СОЦИАЛЬНЫЕ СЕТИ</h1>
    <div class="decoration"></div>
    <p>Следите за нами в социальных сетях, чтобы не пропустить новые проекты, разработанные для наших клиентов.</p>
    <div class="footer__acc">
        <img src="asset/img/telegram.png" alt="">
        <img src="asset/img/whatsapp.png" alt="">
        <img src="asset/img/vk.png" alt="">
    </div>
</div>
        </footer>
</body>
</html>