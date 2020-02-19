<?php

session_start();


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'Loginuser');


$name=$_POST['Name'];
$pass=$_POST['Password'];
$s="select * from Userinfo where Name ='$name' && Password='$pass'";

$result= mysqli_query($con, $s);

$num = mysqli_num_rows($result);



if ($num ==1)
{
    $_SESSION['Name']=$name;
    header('location:index.php');
}
else{
    header('location:login.php');
}
    
    
    
    ?>