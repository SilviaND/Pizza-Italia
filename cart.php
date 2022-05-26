<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Количка</title>
    <style>
        #shopping-cart {
            font-family: 'Monotype Corsiva', serif;
            font-size: 1.2em;
            display: none;
            position: fixed;
            bottom: 110px;
            right: 50px;
            background-color: white;
            color:#61120E;
            border: 1px solid #ECA442;
            border-radius: 7px;
            width: 25%;
            height: 80vh;
            opacity: 0.8;
            text-align: justify;
        }
        table {
            width: 100%;
        }
        h4 {
            font-weight: bold;
            border-bottom: 1px double #61120E;
            text-align: center;
        }
        .cart-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            text-align: center;
            position: fixed;
            bottom: 20%;
        }
        #emptycart, #checkout, #close-cart {
            color: #61120E;
            border: 1px solid #61120E;
            width: 22%;
            height: 50px;
            opacity: 1;
            border-radius: 7px;
            font-size: 0.8em;
            font-weight: bold;
            text-align: center;
            margin-left: 4%;
        }
        #emptycart:hover, #checkout:hover, #close-cart:hover{
            cursor: pointer;
            background-color: #ECA442;
            color: #61120E;
            border: 1px solid #61120E;
        }
        a {
          text-decoration: none;
          color: #61120E;
        }
        a:hover {
          cursor: pointer;
          background-color: #ECA442;
          color: #61120E;
        }
        #alerts {
          background-color: whitesmoke;
          position: fixed;
          bottom: 3%;
          left: 40%;
          opacity: 0.9;
          z-index: 200;
        }
    </style>
</head>
<body>


<div class="cart-container" id="shopping-cart">
          <h4>Количка</h4>
          <table>
            <thead>
              <tr>
              <th><strong>Артикули:</strong></th>
              <th><strong>Цена:</strong></th>
            </tr>
            </thead>
            <tbody id="carttable">
            </tbody>
          </table>
          <hr>
          <table id="carttotals">
            <tr>
              <td><strong>Артикули:</strong></td>
              <td><strong>Обща сума:</strong></td>
            </tr>
            <tr>
              <td>x <span id="itemsquantity">0</span></td>
             
              <td>$<span id="total">0</span></td>
            </tr>
        </table>

        
        <div class="cart-buttons">
          <div id="alerts"></div> <br> 
            <button type="button" id="emptycart">Изпразни количката</button>
            <button type="button" id="checkout"><a href="./checkout.php">Завърши поръчката</a></button>
            <button type="button" name="cart" class="btn cancel" id="close-cart" onclick="closeCart()">Затвори</button>
          </div>
</div>
 
        <script src="./js/script.js"></script> 
</body>
</html>