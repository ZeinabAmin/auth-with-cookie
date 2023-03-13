<?php 
if (empty($_COOKIE['login'])) {
    header("location: login.php");
}
echo "<a href='logout.php'>logout</a>";
echo "<br>";
//print_r($_COOKIE['login']); die;
echo "<br>";
echo "welcome";


?>
