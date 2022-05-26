<?php

require "setup.php";

  $statement = $connection->prepare("SELECT id, product_name, ingredients, product_weight, cost FROM products where product_type = 'паста'");
  $statement->execute();
  $statement->setFetchMode(PDO::FETCH_ASSOC);

  $pastas = $statement->fetchAll();

//   var_dump($pastas);

  listPastas($pastas);

function listPastas($pastas){

    foreach($pastas as $pasta) {

        $pastaID = $pasta['id'];
        

            echo "<div class='products' align='center'>";

                echo "<div class='product-menu'>";

                    echo "<div class='article'";
                        echo "<div id=\"pasta_$pastaID\">";
                            echo "<p class='title'>" . $pasta['product_name'] . "</p>";
                    echo "<p class='ingredients'> съставки: " . $pasta['ingredients'] . "</p> " ;
                    echo "<p class='product_weight'> тегло: " . $pasta['product_weight'] . " гр.</p> ";
                    echo "<p> цена: " . $pasta['cost'] . " лв.</p>";
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
     
 <script>
  document.querySelectorAll('.buyBtn').forEach(item => {
  item.addEventListener('click', event => {
    alert("Влез в профила си, за да поръчаш!");

  })
})
</script>    
</body>
</html>