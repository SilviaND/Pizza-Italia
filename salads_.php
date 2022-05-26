<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Пицария Италия - Вкусът преди всичко - Салати</title>
					<link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles-menu.css">
        <script src="https://kit.fontawesome.com/a6199db291.js" crossorigin="anonymous"></script>
								<style>
       
        #salad_1::before {
        content:url('./img/salads/autumn.jpg');
        }

        #salad_2::before {
        content:url('./img/salads/caesar.jpg');
        }

        #salad_3::before {
        content:url('./img/salads/caprese.jpg');
        }

        #salad_4::before {
        content:url('./img/salads/gradinarian.jpg');
        }

        #salad_5::before {
        content:url('./img/salads/greek.jpg');
        }
 
        #salad_6::before {
        content:url('./img/salads/italian.jpg');
        }

        #salad_7::before {
        content:url('./img/salads/ovcharska.jpeg');
        }

        #salad_8::before {
        content:url('./img/salads/shopska.jpg');
        }

    </style>
</head>
<body>

<?php

require 'setup.php';

$statement = $connection->prepare(
    "SELECT id, product_name, ingredients, product_weight, cost FROM products where product_type = 'салата'"
);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);

$salads = $statement->fetchAll();

//   var_dump($salads);
include './menu-header.php';
listSalads($salads);
?>

   <section id="main-content">

   <div id="page-wrap">
				<div id="guts">
   
   <div class="productcont">

    <?php function listSalads($salads)
    {
        foreach ($salads as $salad) {

            $saladID = $salad['id'];

            echo "<div class='products' align='center'>";

            echo "<div class='product-menu'>";

            echo "<div class='article'";

            echo "<div id=\"salad_$saladID\">";
            echo '</div>';
            ?>

        <div class="product">
            <h3 class="productname">
                <?php echo $salad['product_name']; ?>
            </h3>
            <p>
                <?php
                echo "<p class='ingredients'> съставки: " .
                    $salad['ingredients'] .
                    '</p> ';
                echo "<p class='product_weight'> тегло: " .
                    $salad['product_weight'] .
                    ' гр.</p> ';
                ?>
             </p>
            <p class="price"><?php echo 'цена:' .
                ' ' .
                $salad['cost'] .
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
    <script>

    </script>
  </body>
</html>