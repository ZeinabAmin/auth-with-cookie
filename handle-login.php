<?php 
$email="ali@gmail.com";
$password=123;

if(isset($_POST['email']))
{
if ($_POST['email']== $email && $_POST['password']==$password)
{
    setcookie('login',true,time()+(3600*24),'localhost');
    header("location: home.php");
}else {
    header("location: login.php");
}
}
?>
