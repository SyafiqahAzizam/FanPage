<?php

session_start();
header('location:Login.php');

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'Loginuser');

$name=$_POST['Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$s="select * from Userinfo where Email ='$email'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);



if ($num == 1)
{
    echo "Email Already Taken";
}
else{
    $reg="insert into Userinfo (Name,Email,Password) values ('$name','$email','$pass')";
    mysqli_query($con,$reg);
    echo "Resgitration Succesful";
}
    
    
    
    ?>