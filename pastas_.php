<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Пицария Италия - Вкусът преди всичко - Паста</title>
					<link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles-menu.css">
        <script src="https://kit.fontawesome.com/a6199db291.js" crossorigin="anonymous"></script>
								<style>

        #pasta_16::before {
        content:url('./img/pasta/tagliatelle-with-pork.jpg');
        width: 100%;
        }

        #pasta_17::before {
        content:url('./img/pasta/spaghetti-with-bacon.jpg');
        }

        #pasta_18::before {
        content:url('./img/pasta/tagliatelle-chorizo.jpg');
        }

        #pasta_19::before {
        content:url('./img/pasta/spaghetti-tradizione.jpg');
        }

        #pasta_20::before {
        content:url('./img/pasta/pene.jpg');
        }
 
        #pasta_27::before {
        content:url('./img/pasta/spaghetti-bolognese.jpg');
        }

      </style>
</head>
<body>
<?php
require 'setup.php';

$statement = $connection->prepare(
    "SELECT id, product_name, ingredients, product_weight, cost FROM products where product_type = 'паста'"
);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);

$pastas = $statement->fetchAll();

//   var_dump($pastas);
include './menu-header.php';
listPastas($pastas);
?>
  <section id="main-content">
		
			<div id="page-wrap">
				<div id="guts">
        <div class="productcont">
											<?php function listPastas($pastas)
           {
               foreach ($pastas as $pasta) {

                   $pastaID = $pasta['id'];

                   echo "<div class='products' align='center'>";

                   echo "<div class='product-menu'>";

                   echo "<div class='article'";

                   echo "<div id=\"pasta_$pastaID\">";
                   echo '</div>';
                   ?>

        <div class="product">
            <h3 class="productname">
                <?php echo $pasta['product_name']; ?>
            </h3>
            <p>
                <?php
                echo "<p class='ingredients'> съставки: " .
                    $pasta['ingredients'] .
                    '</p> ';
                echo "<p class='product_weight'> тегло: " .
                    $pasta['product_weight'] .
                    ' гр.</p> ';
                ?>
             </p>
            <p class="price"><?php echo 'цена:' .
                ' ' .
                $pasta['cost'] .
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