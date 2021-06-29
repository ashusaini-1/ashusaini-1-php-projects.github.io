<?php

require "navbar.php";



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }
h1{

text-align: center;
}
.card{

border: 20px solid #f1f1f1;


}
.row{

display: grid;

grid-template-columns: 75% 25%;
}

.left-column{
display: grid;
grid-template-rows:50%;



}


.right-card{
    position:relative;
width: 100%;
}

.footer{
border: 20px solid #7a3131;

text-align: center;
padding: 15px;

}

</style>

<body>
    <h1>THE BLOG</h1>
<hr>
    <div class="row">
        <div class="left-card">
            <div class="card">
                <h2>Chicken Adobo</h2>
                <h5>Title description, june 1, 2021</h5>
                <div class="image">
                    <img src="images\fried-chicken-690039_1920.jpg" style="height: 200px;">
                </div>
                <p>Chicken Adobo</p>
                <p>Chicken Adobo is a famous Filipino dish that is very loved by many people. The ingredients are very simple: chicken (breasts, thighs, legs or wings), bay leaves, black peppercorn and lots of garlic. Not only is it so easy to make but because it’s incredibly flavorful, all the family will love it!</p>


            </div>

            <div class="card">
                <h2>Momos</h2>
                <h5>Title description, june 5, 2021</h5>
                <div class="image">
                    <img src="images\momo-5948840_1920.jpg" style="height: 200px;">
                </div>
                <p>Momos</p>
                <p>Biting into hot steamy Momos, with a lipsmacking, spicy chutney, in the lap of  the majestic mountains  are the stuffs dreams are made of. Momos are dumplings native to Tibet, Nepal, Bhutan, and the Himalayan states of India. My love affair with the Momos began when I was already having an affair with Darjeeling and the regal Himalayas. Today I have a long tale of  an early romance and of unleashed memories.

</p>


            </div>

        </div>

        <div class="right-card">
            <div class="card">
                <h2>About Me</h2>
                <div class="fakeimg" style="height:100px;">Gordon James Ramsay</div>
                <img src="images\smiling-888532_1920.jpg" style="height: 200px;">

                <p>Gordon James Ramsay OBE (/ˈræmziː/; born 8 November 1966) is a British chef, restaurateur, television personality, and writer. He was born in Johnstone, Scotland, and raised in Stratford-upon-Avon, England. Ramsay founded his global restaurant group,</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">Mac and Cheese</div><br>
                <div class="fakeimg">Roman-Style Chicken</div><br>
                <div class="fakeimg">No-Peek Tomato Chicken
</div>
            </div>

 
            <div class="card">
                <h3>Follow Me</h3>
                <p>Follow me on Instagram,FaceBook etc...</p>
            </div>

        </div>
    </div>

        <div class="footer">
          <h2>Weeknight cooking just got a whole lot easier. Take a family favorite protein and pop it in the oven for a low-maintenance meal that everyone will love.</h2>
        </div>
</body>

</html>