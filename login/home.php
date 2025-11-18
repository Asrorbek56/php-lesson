<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "avval login qiling <a href= 'login.php'>login</a>";
    exit;
}
?>

<br>
<a href="logout.php">chiqish</a>