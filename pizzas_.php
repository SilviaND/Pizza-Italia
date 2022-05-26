<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Пицария Италия - Вкусът преди всичко - Пици</title>
		<link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles-menu.css">
        <script src="https://kit.fontawesome.com/a6199db291.js" crossorigin="anonymous"></script>
		<style>

            #pizza_9::before {
            content:url('./img/pizza/Pizza Capri.jpg');
            width: 100%;
            }

            #pizza_10::before {
            content:url('./img/pizza/Pizza Salsicce.jpg');
            }

            #pizza_11::before {
            content:url('./img/pizza/Pizza prosciutto.jpg');
            }

            #pizza_12::before {
            content:url('./img/pizza/Pizza Veritas.jpg');
            }

            #pizza_13::before {
            content:url('./img/pizza/Pizza Castello.jpg');
            }
    
            #pizza_14::before {
            content:url('./img/pizza/Pizza Siena.jpg');
            }

            #pizza_15::before {
            content:url('./img/pizza/Pizza Speciale.jpg');
            }

        </style>
	</head>
    <body>

<?php
require 'setup.php';

$statement = $connection->prepare(
    'SELECT id, product_name, ingredients, product_weight, cost FROM products where product_type = "пица" '
);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);

$pizzas = $statement->fetchAll();

//   var_dump($pizzas);
include './menu-header.php';
listPizzas($pizzas);
?>
		<section id="main-content">
		    
			<div id="page-wrap">
				<div id="guts">
                <div class="productcont">

<?php function listPizzas($pizzas)
{
    foreach ($pizzas as $pizza) {

        $pizzaID = $pizza['id'];

        echo "<div class='products' align='center'>";

        echo "<div class='product-menu'>";

        echo "<div class='article'";
        echo "<div id=\"pizza_$pizzaID\">";
        echo '</div>';
        ?>

        <div class="product">
            <h3 class="productname">
                <?php echo $pizza['product_name']; ?>
            </h3>
            <p>
                <?php
                echo "<p class='ingredients'> съставки: " .
                    $pizza['ingredients'] .
                    '</p> ';
                echo "<p class='product_weight'> тегло: " .
                    $pizza['product_weight'] .
                    ' гр.</p> ';
                ?>
             </p>
            <p class="price"><?php echo 'цена:' .
                ' ' .
                $pizza['cost'] .
                ' ' .
                'лв.'; ?></p>
            <button class="addtocart buyBtn">Купи</button>
        </div>

        <?php
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

    }
} ?>
		</div>
        <?php include './cart.php'; ?>
</div>
<footer>
			<div id="footer" class="white-background xl-col-12 sm-col-6">
				<p>2022 Design by Silvia Dimova &copy;</p>
			</div>
		</footer>
        <script  src="./js/addToCart.js"></script> 
  </body>
</html>