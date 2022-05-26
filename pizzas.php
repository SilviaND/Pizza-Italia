<?php

require "setup.php";

    $statement = $connection->prepare(
        'SELECT id, product_name, ingredients, product_weight, cost FROM products where product_type = "пица" ' 
    );
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);

    $pizzas = $statement->fetchAll();

    //   var_dump($pizzas);

    listPizzas($pizzas);
    
function listPizzas($pizzas)
{
    foreach ($pizzas as $pizza) {
        $pizzaID = $pizza['id'];

            echo "<div class='products' align='center'>";

                echo "<div class='product-menu'>";

                    echo "<div class='article'";
                        echo "<div id=\"pizza_$pizzaID\">";
                            echo "<p class='title'>" . $pizza['product_name'] . "</p>";
                    echo "<p class='ingredients'> съставки: " . $pizza['ingredients'] . "</p> " ;
                    echo "<p class='product_weight'> тегло: " . $pizza['product_weight'] . " гр.</p> ";
                    echo "<p> цена: " . $pizza['cost'] . " лв.</p>";
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

 <script>
  document.querySelectorAll('.buyBtn').forEach(item => {
  item.addEventListener('click', event => {
    alert("Влез в профила си, за да поръчаш!");

  })
})
</script>   
</body>
</html>