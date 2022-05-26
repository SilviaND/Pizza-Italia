<?php
session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from users where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:menu_.php');
					exit();
				}
				else
				{
					$errors[] = "Грешен Email или парола";
				}
			}
			else
			{
				$errors[] = "Грешен Email или парола";
			}
			
		}
		else
		{
			$errors[] = "Невалиден Email";	
		}

	}
	else
	{
		$errors[] = "Email и Парола са задължителни";	
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пицария Италия - Вкусът преди всичко - Вход</title>
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
                    <a href="./index.php"><img id ="logo" src="./img/pizza-logo-1.png" class="logo" alt="pizza-logo"></a>
                    </div>
                    <div id="nav" class="sm-col-6 d-flex flex-wrap flex-row justify-content-between sm-order-1 mx-auto align-items-center">
                        <div class="menu"><a href="./index.php">Начало</a></div>
                        <div class="menu"><a href="./menu.php">Меню</a></div>
                        <div class="menu"><a href="./delivery.php">Доставка</a></div>
                        <div class="menu"><a href="./about-us.php">За нас</a></div>
                        <div class="menu"><a href="./contacts.php">Контакти</a></div>
                    </div>
                    <div id="nav-login-reg" class="sm-col-6 d-flex flex-wrap flex-row justify-content-between sm-order-2 mx-auto align-items-center">
                        <div class="menu"><a href="./login.php">Вход</a></div>
                        <div class="menu"><a href="./register.php">Регистрация</a></div> 
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

            <div class="white-background xl-col-12 sm-col-6">
            <div id="login-form" class="xl-col-6 sm-col-4">
		<div>
			<h1>Вход</h1>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-container">
				
					<label for="email"></label>
					<input type="text" name="email" placeholder="Email" class="form-control">
			
					<label for="email"></label>
					<input type="password" name="password" placeholder="Парола" class="form-control">
				

				<button type="submit" name="submit" id="btn-login">Вход</button>
				
				<p class="pt-2"><a href="register.php">Регистрация</a></p>
			</form>
		</div>
		</div>
			
		</div>
	
		</div>
		
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