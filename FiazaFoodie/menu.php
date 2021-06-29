<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .container-zone{

        display: grid;
        grid-template-columns: 25% 25% 25% 25%;


    }

    .cards {
        border: 4px solid black;

        margin: 4px;
    }

    .cards img {
        height: 50%;
        width: 100%;

    }

    #h1{

text-align:center;
font-size:45px;
    }
.h2{

    text-align:center;
margin-left:15%;
margin-top:-3%;
font-size:30px;
}
</style>

<body>

<?php
require "navbar.php";


?>

<h1 id="h1">TAKE OUT</h1>
<h2 class="h2">Specials</h2>
    <div class="container-zone">
        <div class="cards">
            <img src="images\pizza-4855618_1920.jpg">
            <h1>Pizza's</h1>
            <p>Classic Veg – Rs. 99<br>
                Premium Veg – Rs. 129<br>
                Classic Non Veg – Rs. 139</p>

        </div>


        <div class="cards">
            <img src="images\paneer-tikka-4929034_1920.jpg">
            <h1>Paneer Tikka</h1>
            <p>₹ 120 / </p>

        </div>




        <div class="cards">
            <img src="images\bowl-1932375_1920.jpg">
            <h1>Ice cream</h1>
            <p>₹ 30 / </p>

        </div>




        <div class="cards">
            <img src="images\drink-462776_1920.jpg">
            <h1>Coca Cola</h1>
            <p>₹ 20 / </p>

        </div>



        <div class="cards">
            <img src="images\food-1216048_1920.jpg">
            <h1>Chinese</h1>
            <p>₹ 50 / </p>

        </div>




        <div class="cards">
            <img src="images\fried-chicken-690039_1920.jpg">
            <h1>Chicken</h1>
            <p>₹ 100 / </p>

        </div>

        <div class="cards">
            <img src="images\chips-843993_1920.jpg">
            <h1>Chips</h1>
            <p>₹ 20 / </p>

        </div>

        <div class="cards">
            <img src="images\food-2933528_1920.jpg">
            <h1>Indian Food</h1>
            <p>₹ 50 / </p>

        </div>

        <div class="cards">
            <img src="images\momo-5948840_1920.jpg">
            <h1>Momos</h1>
            <p>₹ 30 / </p>

        </div>

        <div class="cards">
            <img src="images\cocktail-3408834_1920.jpg">
            <h1>Juice</h1>
            <p>₹ 20 / </p>

        </div>

        <div class="cards">
            <img src="images\cookie-756601_1920.jpg">
            <h1>Cookies</h1>
            <p>₹ 50 / </p>

        </div>



        <div class="cards">
            <img src="images\donuts-3195564_1920.jpg">
            <h1>Donuts</h1>
            <p>₹ 60 / </p>

     </div>


















    </div>
</body>

</html>