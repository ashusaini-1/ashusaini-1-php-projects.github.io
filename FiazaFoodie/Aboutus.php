<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  /*  body {
        background-color: darkslategray;
        opacity: 0.8;

    }*/

    .about-section {

        text-align: center;

    }

    .card {
        
        float: left;
        width: 30.3%;
        margin-bottom: 16px;
        padding: 0 8px;



    }

.card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;


}

button{
color: white;
width: 50%;
padding: 10px;
background-color: rgb(75, 67, 67);
opacity: 0.9;
text-align: center;
}
.card img{

width:30%;


}

</style>



<body>
<?php

require "navbar.php";



?>


    <div class="about-section">
        <h1>About Us</h1>
        <p>Nothing is so embarrasing as watching someone do something that you said could not be done...</p>
    </div>
    <hr>
    <h1 style="text-align: center;">Our Team</h1>
    <div class="container">

        <div class="card">

            <img src="images\portrait-2132190_1920.jpg">


            <h1>Jane Doe</h1>

        
        <h1>CEO & Founder</h1>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>

        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
    </div>



    <div class="card">


        <img src="images\smiling-888532_1920.jpg">


        <h1>Jane Doe</h1>
        <h1>CEO & Founder</h1>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>

        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
    </div>



    <div class="card">

        <img src="portrait-2132190_1920.jpg">

        <h1>Jane Doe</h1>
        <h1>CEO & Founder</h1>
    <p>Some text that describes me lorem ipsum ipsum lorem.</p>

    <p>jane@example.com</p>
    <p><button class="button">Contact</button></p>
    </div>








    </div>


</body>

</html>