<?php

require "setup.php";

  $statement = $connection->prepare("SELECT id, product_name, ingredients, product_weight, cost, product_image FROM products where product_type = 'салата'");
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);

  $salads = $statement->fetchAll();

//   var_dump($salads);

  listSalads($salads);

function listSalads($salads){

    foreach($salads as $salad) {
        
        $saladID = $salad['id'];
        
        echo "<div class='products' align='center'>";

            echo "<div class='product-menu'>";

                echo "<div class='article'>";
                    echo "<div id=\"salad_$saladID\">";
                    echo "</div>";
                        echo "<p class='title'>" . $salad['product_name'] . "</p>";
                echo "<p class='ingredients'> съставки: " . $salad['ingredients'] . "</p> " ;
                echo "<p class='product_weight'> тегло: " . $salad['product_weight'] . " гр.</p> ";
                echo "<p class='product_cost'> цена: " . $salad['cost'] . " лв.</p>";
                echo "</div>";
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
                echo "<button type='submit' value='Купи' class='buyBtn btn-success' id='(\"salad_$saladID\")'>Купи</button>";
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

<script>
  document.querySelectorAll('.buyBtn').forEach(item => {
  item.addEventListener('click', event => {
    alert("Влез в профила си, за да поръчаш!");

  })
})
</script>
</body>
</html>