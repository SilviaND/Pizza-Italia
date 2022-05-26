<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пицария Италия - Вкусът преди всичко - Десерти</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles-menu.css">
    <script src="https://kit.fontawesome.com/a6199db291.js" crossorigin="anonymous"></script>
<style>



        #dessert_21::before {
        content:url('./img/desserts/apple-pie.jpg');
        }

        #dessert_22::before {
        content:url('./img/desserts/chocolate-souffle.jpg');
        }

        #dessert_23::before {
        content:url('./img/desserts/cream-caramel.jpg');
        }

        #dessert_24::before {
        content:url('./img/desserts/forest-fruits-and-yoghurt-cream.jpg');
        }

        #dessert_25::before {
        content:url('./img/desserts/roasted-pumpkin-with-walnuts.jpg');
        }

        #dessert_26::before {
        content:url('./img/desserts/tiramisu.jpg');
        }
        .product {
            width: 50%;
            padding: 20px;
           
        }
    </style>
 </head>
 <body>

<?php

require "setup.php";
  
  $statement = $connection->prepare("SELECT id, product_name, product_weight, cost FROM products where product_type = 'десерт'");
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);

  $desserts = $statement->fetchAll();

//   var_dump($desserts);
include('./menu-header.php');
listDesserts($desserts);
?>
<section id="main-content">

<div id="page-wrap">
             <div id="guts">

<div class="productcont">
<?php

function listDesserts($desserts){

    foreach($desserts as $dessert) 
    {
        
        $dessertID = $dessert['id'];
        

        echo "<div class='products' align='center'>";

        echo "<div class='product-menu'>";

        echo "<div class='article'";
        echo "<div id=\"dessert_$dessertID\">";
        echo '</div>';
            ?>

        <div class="product">
            <h3 class="productname">
                <?php echo $dessert['product_name']; ?>
            </h3>
        
                <?php
                echo "<p class='product_weight'> тегло: " .
                    $dessert['product_weight'] .
                    ' гр.</p> ';
                ?>
             </p>
            <p class="price"><?php echo 'цена:' .
                ' ' .
                $dessert['cost'] .
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
}




?>

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