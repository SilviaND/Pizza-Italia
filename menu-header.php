<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a6199db291.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="icon-bar">
        <a href="#" class="social"><i class="fa fa-facebook"></i></a>
        <a href="#" class="social"><i class="fa fa-instagram"></i></a> 
        <a href="#" class="social"><i class="fa fa-pinterest"></i></a>  
      </div>
    <div class="container">
        <header>
            <div id="main-nav" class="xl-col-12 p-2 d-flex flex-wrap flex-row justify-content-center">
                    <div id="div-logo">
                    <a href="./home.php"><img id ="logo" src="./img/pizza-logo-1.png" class="logo" alt="pizza-logo"></a>
                    </div>
                    <div id="nav" class="sm-col-6 d-flex flex-wrap flex-row justify-content-between sm-order-1 mx-auto align-items-center">
                        <div class="menu"><a href="./home.php">Начало</a></div>
                        <div class="menu"><a href="./menu_.php" style="color: white">Меню</a></div>
                        <div class="menu"><a href="./delivery_.php">Доставка</a></div>
                        <div class="menu"><a href="./about-us_.php">За нас</a></div>
                        <div class="menu"><a href="./contacts_.php">Контакти</a></div>
                    </div>
                    <div id="nav-login-reg" class="sm-col-6 d-flex flex-wrap flex-row justify-content-between sm-order-2 mx-auto align-items-center">
                    <div class="menu" id="user-profil"><a href ="dashboard.php">Моят профил</a></div>
                    <div class="menu" id="logout"><a href ="index.php">Изход</a></div>
                    </div>
                </div>
                <div id="bonus-info" class="xl-col-12 sm-col-6">
                    <p><em><a href="tel:+359-89-3456-322" id="make-a-call">Поръчай на 089 3456 322</a></em></p>
                    <p><em>Безплатна доставка за поръчки над 30 лв. в рамките на гр. Варна</em></p>
                    <p><em>Безплатен десерт за поръчки над 25 лв.</em></p>
                </div>
            </div>
        </header>

        <div class="body xl-col-12 sm-col-6">

            <div id="vegetables" class="xl-col-12 sm-col-6">
            
                <img id="m2" src="./img/small-imgs/m2.png">
                <img id="m3" src="./img/small-imgs/m3.png">
                <img id="m4" src="./img/small-imgs/m4.png">
                <img id="m5" src="./img/small-imgs/m5.png">
                <img id="m6" src="./img/small-imgs/m6.png">
                <img id="m1" src="./img/small-imgs/m1.png">
                <img id="m8" src="./img/small-imgs/m8.png">
                <img id="m9" src="./img/small-imgs/m9.png">
                <img id="m10" src="./img/small-imgs/m10.png">
                <img id="m7" src="./img/small-imgs/m7.png">

            </div>

<div class="white-background xl-col-12 sm-col-6 page-wrap">
    <div class="xl-col-8 sm-col-4 d-flex flex-wrap flex-row justify-content-between group">
        <div class="menu-dishes-main-img">
            <a href="./salads_.php"  >
            <img src="./img/salads/salad-main-img.jpg" width="200" height="170px">
            <h2>Салати</h2>
            </a>
        </div>
        <div class="menu-dishes-main-img">
            <a href="./pizzas_.php" >
            <img src="./img/pizza/pizza-main-img.jpg" width="200" height="170px">
            <h2>Пици</h2>
            </a>
        </div>
        <div class="menu-dishes-main-img">
            <a href="./pastas_.php" >
            <img src="./img/pasta/pasta-main-img.jpg" width="200" height="170px">    
            <h2>Паста</h2>
        </a>
        </div>
        <div class="menu-dishes-main-img">
            <a href="./desserts_.php" >
            <img src="./img/desserts/dessert-main-img.jpg" width="200" height="170px">   
            <h2>Десерти</h2></a>
        </div>
    </div>
    <span id="group">
    <button type="button" onclick="openCart()" id="myCartBtn" title="Open-cart" class="btn btn-info"><i class="fa-solid fa-cart-shopping fa-xl"></i></button>
    <span class="badge badge-light" id="cart-count"><a id="clicks">0</a></span>
    </span>
    
</div>
</body>
</html>