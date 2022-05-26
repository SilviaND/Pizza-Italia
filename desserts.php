<?php

require "setup.php";
  
  $statement = $connection->prepare("SELECT id, product_name, product_weight, cost FROM products where product_type = 'десерт'");
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);

  $desserts = $statement->fetchAll();

//   var_dump($desserts);

  listDesserts($desserts);

function listDesserts($desserts){

    foreach($desserts as $dessert) {
        
        $dessertID = $dessert['id'];
        

        echo "<div class='products' align='center'>";

            echo "<div class='product-menu'>";

                echo "<div class='article'";
                    echo "<div id=\"dessert_$dessertID\">";
                        echo "<p class='title'>" . $dessert['product_name'] . "</p>";
                echo "<p class='product_weight'> тегло: " . $dessert['product_weight'] . " гр.</p> ";
                echo "<p> цена: " . $dessert['cost'] . " лв.</p>";
                echo "<div class='qnt-buy'>";
                echo "<label for='quantity'>количество:</label>
                <select name='quantity' class='quantity'>
                  <option value='1' selected>1</option>
                  <option value='2'>2</option>
                  <option value='3'>3</option>
                  <option value='4'>4</option>
                  <option value='5'>5</option>
                  <option value='6'>6</option>
                  <option value='7'>7</option>
                  <option value='8'>8</option>
                  <option value='9'>9</option>
                  <option value='10'>10</option>
                </select>";
                echo "<button type='submit' value='Купи' class='buyBtn'>Купи</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                
    
    
            echo "</div>";

         echo "</div>";

    }
}


?>

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
        
    </style>
 </head>
 <body>
     
<script>
  document.querySelectorAll('.buyBtn').forEach(item => {
  item.addEventListener('click', event => {
    alert("Влез в профила си, за да поръчаш!");

  })
})
</script>     
</body>
</html>