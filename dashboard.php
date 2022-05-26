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

#user-details {
    text-align: left;
    margin: 10px 50px;
}

input {
    width: 50%;
    font-size: 0.8em;
    padding: 5px;
    margin: 10px;
    border: 1px solid #61120E;
    border-radius: 7px;
    font-family: myChalkFont;
}

a {
    text-decoration: none;
    color: #61120E;
    font-weight: bold;
}

a:hover {
    opacity: 0.8;
}

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
            <div class="white-background xl-col-12 sm-col-6">
            <div id="user-details" class="xl-col-6 sm-col-4 text-center">
		<div>
        <h1>Здравей, <?php echo ucfirst($_SESSION['first_name']); ?>!</h1>

<div id="user-details">
    <div id="user-firstname">
        <p>Име: <?php echo ucfirst($_SESSION['first_name']); ?></p>
    </div>
    <div id="user-lastname">
        <p>Фамилия: <?php echo ucfirst($_SESSION['last_name']); ?></p>
    </div>
    <div id="user-email">
        <p>E-mail: <?php echo ucfirst($_SESSION['email']); ?></p>
    </div>   
    <div id="user-address">
        <p>Адрес: <?php echo ucfirst($_SESSION['address']); ?></p>
    </div>
    <div id="user-additional_information">
        <p>Допълнителна информация: <?php echo ucfirst($_SESSION['additional_information']); ?></p>
    </div>
    <div id="user-phone_number">
        <p>Телефон за контакт: <?php echo "0" . ucfirst($_SESSION['phone_number']); ?></p>
    </div>

</div>


		<div>
	</div>
</div>



<script>

    <footer>
    <div id="footer" class="white-background xl-col-12 sm-col-6">
    <p>2022 Design by Silvia Dimova &copy;</p>  
        </div>
    </footer>
</div>
<script src="./js/script.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>