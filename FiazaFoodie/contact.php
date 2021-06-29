<?php
$login=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

include "_dbconnect.php";


$name=$_POST["name"];
$phoneno=$_POST["phoneno"];

$email=$_POST["email"];
$query=$_POST["query"];


$conn;
$sql="INSERT INTO `contact details` (`Name`, `Phone Number`, `Email`, `Querry`, `date`) VALUES ('$name', '$phoneno', '$email', '$query', current_timestamp())";

$Result=mysqli_query($conn,$sql);




}













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
h1{

    text-align: center;
}
.txt{
display: block;
margin: 10px;

}

button{

width: 50%;
padding: 10px;
}
input[type=text],input[type=email],input[type=number]{
padding: 10px;
width:75%;

}


</style>
<body>

<?php

require "navbar.php";



?>


    <div class="container">
        <h1>Contact Details</h1>
        <hr>
        <div class="form-method">
            <form action="contact.php" method="POST">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter Name" name="Name" class="txt" required>
                <label for="phoneno">Phone No</label>
                <input type="number" placeholder="Enter Number" class="txt" name="phoneno" required>

                <label for="email">Email</label>
                <input type="email" placeholder="Enter Your Email" class="txt" name="email" required>

                <label for="query">Querry</label>
               <textarea  cols="62" rows="10" placeholder="Enter Your querry" name="query" class="txt"></textarea>

                <button type="submit" class="txt">Submit</button>



            </form>


        </div>

    </div>


</body>

</html>