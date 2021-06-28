<?php
$login=false;
$showerror=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

include "_dbconnect.php";


$username=$_POST["username"];
$password=$_POST["password"];

$sql="Select * from users where username='$username' AND password='$password'";

$Result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($Result);

if($num==1){


    $login=true;
session_start();
$_SESSION['loggedin']=true;
$_SESSION['username']=$username;




}
else{

$showerror="Invalid Credentials";

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

.txt{

display:block;
margin: 10px;
width: 75%;
padding:5px;
background-color: aliceblue;
}
button, .check{
display: block;
margin: 10px;


}
button{

    background-color: aquamarine;
    width: 50%;
padding: 8px;

}
.cnc{
display: inline;

}
span{
float: right;

}
    </style>
<body>


    <div class="container">
    <?php

require "navbar.php";



?>
<?php
if($login){
echo 'Login Successfully';


}

if($showerror){
echo 'Login Unsucessfull';
}

?>


<h1>Login Details</h1>
<hr>
<div  class="form-method">
    <form action="login.php" method="POST">
<label for="username">Username</label>
<input type="text" placeholder="Enter Username" name="username" class="txt">
<label for="password">password</label>
<input type="password" placeholder="Enter Password" class="txt" name="password">
<button type="submit">Login</button>
<label class="check">
    <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>

<div class="cancel">
    <button type="button" class="cnc">Cancel</button>

</span>
</div>
    </form>


</div>

    </div>

</body>
</html>