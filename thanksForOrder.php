<?php 
    session_start();
  
    if(!$_SESSION['id']){
        header('location:login.php');
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пицария Италия - Вкусът преди всичко - Потребителски профил</title>
<style>


</style>
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
                        <div class="menu"><a href="./menu_.php">Меню</a></div>
                        <div class="menu"><a href="./delivery_.php">Доставка</a></div>
                        <div class="menu"><a href="./about-us_.php">За нас</a></div>
                        <div class="menu"><a href="./contacts_.php">Контакти</a></div>
                    </div>
                    <div id="nav-login-reg" class="sm-col-6 d-flex flex-wrap flex-row justify-content-between sm-order-2 mx-auto align-items-center">
                    <div class="menu" id="user-profil"><a href ="dashboard.php" style="color: white">Моят профил</a></div>
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
 
            </div>
            
            <?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success))
                {
                    
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
            <div class="white-background xl-col-12 sm-col-6" id="thanks-for-order-page">

        <p>Благодарим за поръчката, <?php echo ucfirst($_SESSION['first_name']); ?>!</p><br/<br/>

        <p>Скоро ще бъде при теб!<p>
        

</div>

</div>
<script src="./js/script.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>