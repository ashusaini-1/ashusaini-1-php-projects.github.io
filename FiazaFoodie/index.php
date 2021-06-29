<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
   * {
    box-sizing: border-box;
}


body,
html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}




.nav-bar {

background-color: #555;
padding: 5px;
text-decoration: none;
opacity: 0.6;
}

.container {
background-image: url("images\spaghetti-2931846_1920.jpg");
overflow: hidden;
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-attachment: fixed;
}





a {

    color: white;
    text-decoration: none;

}

li {

    display: inline;
    margin: 6px;


}

.left {

    float: right;

}

.cent-content {
    color: white;
    text-align: center;
    padding-top: 9%;
    font-weight: bolder;
    font-size: 50px;

}

.second-block {
    position: relative;
    display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    margin: 10px;

}

.designing-nav {

    color: white;
    text-align: center;
    font-weight: bold;
    background-color: teal;
    margin: 5px;
    padding: 20px;
    opacity: 0.9;
}

.detailer p {
    color: white;
    font-weight: 200;
    font-size: 30px;
    background-color: #555;
}

img {
    position: absolute;
    width: 24%;
    filter: blur(1px);


}

.title1,
.title2,
.title3 {

    position: relative;
    color: white;
    width: 0px;
    left: 25%;
    top: 20%;
    font-weight: 200;
    font-size: 200;
}


.full-section {

    display: grid;
    grid-template-columns: 50% 50%;
    margin-top: 5%;
    margin-left: 2%;
}


.menu-fav {

    color: white;
    text-align: center;
    font-weight: bold;
    background-color: teal;
    margin: 6%;
    padding: 4%;
    opacity: 0.9;
}

.full-menu {

    color: white;
    border: 2px solid rgb(37, 36, 37);
    background-color: rgb(26, 140, 144);
    width: 55%;
    padding: 2px;
    margin-left: 74%;


}

.full-section .card {


    margin: 5px;
    background-color: rgb(106, 117, 117);

}

.container-4{

display: grid;
grid-template-columns: 50% 50%;
}



.container-4{
margin-top: 8%;
display:grid;
grid-template-columns: 50% 45%;
margin-left:25%;
margin-right: 20%;
}

.image img{

position: absolute;
width:25%;

height:230px;

}


.blog-content h2{
position:absolute;
border: 2px solid black;
color: white;
background-color: rgb(12, 12, 12);
width: 15%;
}

.contain{


display:grid;
grid-template-columns: 35% 35% 35%;



}
.not-fea{
margin-top: 10%;


}
.carder{

margin: 5px;
width: 80%;

}

.container-5{

background-color: black;
color: white;
opacity: 1;
background-size: cover;
height:50%;
}

.cont-img img{

width: 100%;

height: 420px;

}

.cont-details{

background-color: darkslategray;
display:grid;
grid-template-columns: 30% 23% 23% 23%;


}
.copy-write{
text-align: center;
margin-top: -3%;
width: 320%;

}




</style>

<body>


    <div class="container">



    <div class="nav-bar">
    <div class="right">
    <ul>

<li><a href="index.php">Home</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="blog.php">Blogs</a></li>
<li><a href="Gallery.php">Gallery</a></li>
<li><a href="Aboutus.php">About Us</a></li>

<div class="left">
<li><a href="login.php">Login</a></li>
<li><a href="signup.php">Sign Up</a></li>
</div>
</ul>


    </div>
    
    <div class="cent-content">
                <h1>THE FIAZA FOODIE</h1>
                <p>FOOD BLOGGER AND RESTAURANT OWNER</p>



            </div>
        </div>
    </div>



    <div class="container-2">
        <div class="designing-nav">
            <h1>THE FINEST ASIAN FLAVOUR</h1>

        </div>

        <div class="detailer">
            <h1>COLLABORATE WITH ME</h1>
            <p>Want to be featured on Fiaza Foodie? Let's Talk.</p>
        </div>
        <div class="second-block">

            <div class="card">
                <p style="font-weight: bold">SPONSORSHIPS</p>
                <img src="images\images\fruits (1).jpg" style="height: 300px">
                <h1 class="title1">CRAFTED BY OUR MASTER CHEFS</h1>

            </div>


            <div class="card">
                <p style="font-weight: bold">PRODUCT REVIEWS</p>
                <img src="images\images\food-2203671_1920.jpg" style="height: 300px;">
                <h1 class="title2">USING THE FINEST INGREDIENTS</h1>
            </div>



            <div class="card">

                <p style="font-weight: bold">FOOD PHOTOGRAPHY</p>
                <img src="images\images\food-2203697_1920.jpg" style="height: 300px;">
                <h1 class="title3">SERVED WITH CARE AND PASSION</h1>
            </div>

            <div class="card">

                <p style="font-weight: bold">FRESH VEGETABLES</p>
                <img src="images\images\bell-peppers-1302126_1920.jpg" style="height: 300px;">
                <h1 class="title3">USING THE FRESH VEGETABLES</h1>
            </div>



        </div>
    </div>

    <br>


    <div class="container-3">
        <h1 class="menu-fav">Menu Favorites</h1>

        <div class="full-section">


            <div class="card">
                <h1>Pizza's</h1>
                <p>A dish of Italian origin consisting of a flattened disk of bread dough topped with some combination
                    of olive oil, oregano, tomato, olives, mozzarella or other cheese</p>
            </div>

            <div class="card">
                <h1>Starters</h1>
                <p>Starters consist of a wide variety of hot or cold dishes served before the main course of a meal. As
                    part of a formal dinner, they may be preceded by soup and hors d'oeuvres.</p>
            </div>

            <div class="card">
                <h1>Paneer</h1>
                <p>It is a basic kind of non-melting cheese used in Indian cuisine. Apart from lentils, it is a most
                    common source of protein and calcium to the vegetarian Indians.</p>
            </div>


            <div class="card">
                <h1>Noodles</h1>
                <p>It is a type of food made from unleavened dough which is rolled flat and cut, stretched or extruded,
                    into long strips or strings.</p>
            </div>


            <div class="card">
                <h1>Ice Cream</h1>
                <p>Ice cream, frozen dairy food made from cream or butterfat, milk, sugar, and flavourings. ... Frozen
                    custard and French-type ice creams also contain eggs.</p>
            </div>


            <div class="card">
                <h1>Soft drink</h1>
                <p>Soft drink, any of a class of nonalcoholic beverages, usually but not necessarily carbonated,
                    normally containing a natural or artificial sweetening agent, edible acids, natural or artificial
                    flavours, and sometimes juice.</p>
            </div>

            <div class="full-menu">
                <h1><a href="menu.php">VIEW OUR FULL MENU</a></h1>
            </div>


        </div>

    </div>
    <br>

<br>




<div class="container-4">
      

      <div class="image">
          <img src="images\steak-1807532_1920.jpg">
      </div>
      <div class="blog-content">

          <div class="blog">

              <h1 style="color:black">ABOUT THE BLOG</h1>


              <p>
                  The Fiaza Foodie is created by Brigitte Schwartz, a culinary chef and the owner of San Dias Cafe
                  Go on a gastronomic food trip with her one blog post a time!
              </p>
          </div>

          <h2><a href="blog.php">VISIT THE BLOG</a></h2>

      </div>
  </div>

  <br>







  <div class="container-5">
<div class="not-fea">
  <h1>NOTABLE FEATURES</h1>

</div>
  <div class="contain">
    
      <div class="carder">
          <h1>FINE TASTE LOCALE</h1>
          <p>News write-ups offer a great way to let clients know about new products and
              servuices,events,awards,and more!</p>

      </div>

      <div class="carder">
          <h1>TART AND SPICE PRESS</h1>
          <p>News write-ups offer a great way to let clients know about new products and
              servuices,events,awards,and more!</p>

      </div>


      <div class="carder">
          <h1>RESTAURANT WEEKLY
          </h1>
          <p>News write-ups offer a great way to let clients know about new products and
              servuices,events,awards,and more!</p>

      </div>

  </div>
  </div>
  <br>


  <div class="container-6">
     
      <div class="cont-details">
          <h1>REACH OUT TO ME!</h1>
          <div>
              <h1>PHONE NUMBER</h1>
              <h2>(123)456-7890</h2>
          </div>
          <div>
              <h1>EMAIL ADDRESS
                  <h2>hello@fiazafoodiesite.com
          </div>
          <div>
              <h1>MAILING ADDRESS</h1>
              <h2>123 Anywhere St.Any City,ST 12345</h2>
          </div>

          <div class="copy-write">
              <h1>Copyright © 2021-2022 hello@fiazafoodiesite.com</h1>
          </div>
      </div>
  </div>




</body>

</html>