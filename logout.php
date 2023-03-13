<?php 
setcookie('login','',time()-(3600*24),'localhost');
header("location: login.php");
?>