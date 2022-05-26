<?php
session_start();
require_once 'config.php';

if (isset($_POST['submit'])) {
    if (
        isset(
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['password'],
            $_POST['address'],
            $_POST['additional_information'],
            $_POST['phone_number']
        ) &&
        !empty($_POST['first_name']) &&
        !empty($_POST['last_name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password']) &&
        !empty($_POST['address']) &&
        !empty($_POST['additional_information']) &&
        !empty($_POST['phone_number'])
    ) {
        $firstName = trim($_POST['first_name']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $address = trim($_POST['address']);
        $additional_information = trim($_POST['additional_information']);
        $phone_number = trim($_POST['phone_number']);

        $options = ['cost' => 4];
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        $date = date('Y-m-d H:i:s');

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = 'select * from users where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email' => $email];
            $stmt->execute($p);

            if ($stmt->rowCount() == 0) {
                $sql =
                    'insert into users (first_name, last_name, email, `password`, address, additional_information, phone_number) values(:fname,:lname,:email,:pass,:address,:additional_information,:phone_number)';

                try {
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname' => $firstName,
                        ':lname' => $lastName,
                        ':email' => $email,
                        ':pass' => $hashPassword,
                        ':address' => $address,
                        ':additional_information' => $additional_information,
                        ':phone_number' => $phone_number,
                    ];

                    $handle->execute($params);

                    $success = 'Профилът е създаден успешно';
                } catch (PDOException $e) {
                    $errors[] = $e->getMessage();
                }
            } else {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;
                $valAddress = $address;
                $valAdditional_information = $additional_information;
                $valPhone_number = $phone_number;

                $errors[] = 'Съществуващ Email';
            }
        } else {
            $errors[] = 'Невалиден Email';
        }
    } else {
        if (!isset($_POST['first_name']) || empty($_POST['first_name'])) {
            $errors[] = 'Име - задължително поле';
        } else {
            $valFirstName = $_POST['first_name'];
        }
        if (!isset($_POST['last_name']) || empty($_POST['last_name'])) {
            $errors[] = 'Фамилия - задължително поле';
        } else {
            $valLastName = $_POST['last_name'];
        }

        if (!isset($_POST['email']) || empty($_POST['email'])) {
            $errors[] = 'Email - задължително поле';
        } else {
            $valEmail = $_POST['email'];
        }

        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $errors[] = 'Password is required';
        } else {
            $valPassword = $_POST['password'];
        }
        
        if (!isset($_POST['address']) || empty($_POST['address'])) {
            $errors[] = 'Адрес - задължително поле';
        } else {
            $valAddress = $_POST['address'];
        }
        if (!isset($_POST['phone_number']) || empty($_POST['phone_number'])) {
            $errors[] = 'Номер за връзка - задължително поле';
        } else {
            $valPhone_number = $_POST['phone_number'];
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пицария Италия - Вкусът преди всичко - Регистрация</title>
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
            <div id="register-form" class="xl-col-6 sm-col-4">
		<div>
			<h1>Регистрация</h1>
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
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" id="form-container">
                <div class="form-group">
					<label for="email"></label>
					<input type="text" name="first_name" placeholder="Име" class="form-control" value="<?php echo ($valFirstName??'')?>">
				</div>
                <div class="form-group">
					<label for="email"></label>
					<input type="text" name="last_name" placeholder="Фамилия" class="form-control" value="<?php echo ($valLastName??'')?>">
				</div>

                <div class="form-group">
					<label for="email"></label>
					<input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo ($valEmail??'')?>">
				</div>
				<div class="form-group">
				<label for="email"></label>
					<input type="password" name="password" placeholder="Парола" class="form-control" value="<?php echo ($valPassword??'')?>">
				</div>
                <div class="form-group">
				<label for="address"></label>
					<input type="text" name="address" placeholder="Адрес за доставка" class="form-control font-numbers" value="<?php echo ($valAddress??'')?>">
				</div>
                <div class="form-group">
				<label for="additional_information"></label>
					<input type="text" name="additional_information" placeholder="Допълнителна информация" class="form-control font-numbers" value="<?php echo ($valAdditional_information??'')?>">
				</div>
                <label for="phone_number"></label>
					<input type="text" name="phone_number" placeholder="Телефон за контакт" class="form-control font-numbers" value="<?php echo ($valPhone_number??'')?>">
				</div>
				<button type="submit" name="submit" id="btn-register">Регистрация</button>
				<p class="pt-2"><a href="login.php">Вход</a></p>
				
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
</body>
</html>


