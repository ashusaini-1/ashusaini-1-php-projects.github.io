<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){

    include
    "_dbconnect.php";
    
    $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
  $exsits=false;  
if(($password==$cpassword)&& ($exsits==false))
{

    $sql="INSERT INTO `users` (`sno`, `username`, `password`, `date`) VALUES (NULL, '$username', '$password', current_timestamp())";
   
    $Result=mysqli_query($conn,$sql);
header("location: login.php");


}
else{
    $showError = "Passwords do not match";
}

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
input[type=text],input[type=password]{

display:block;

margin-top: 5px;
width: 50%;
padding: 10px;
background-color: aliceblue;
}
button{

width: 40%;
padding: 20px;
background-color: aquamarine;
}






</style>
<body>

<?php

require "navbar.php";



?>




    <div class="container">
        <h1>Sign Up</h1>
        <hr>
        <div class="form-method">
            <form action="signup.php" method="post">
                <label>Username</label>
                <input type="text" placeholder="Enter Username" name="username" class="txt">
                <label >password</label>
                <input type="password" placeholder="Enter Password" class="txt" name="password">

                <label >Repeat Password</label>
                <input type="password" placeholder="Enter Password Again" class="txt" name="cpassword">

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <div class="cancel">
                    <button type="button">Cancel</button>
                    <button type="submit">Sign Up</button>
                   
                </div>
            </form>


        </div>

    </div>






</body>

</html>