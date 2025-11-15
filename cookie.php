<?php
if($_SERVER['REQUEST_METHOD']==  "POST"){
    $name = $_POST['name'];
    setcookie('name', $name,time() + 60);
    echo "Cookie saqladi! <a href='cookie.php'>Sahifani yangilash </a>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
     <?php
        // if(!isset($_COOKIE['ism'])){
        //     echo "ism yoq ";
        // } else{
        //     echo   'ism ';
        //     echo "Value is: ". $_COOKIE["ism"];
        // }
    if(isset($_COOKIE['name'])){
        echo "<h2> Assalomu aleykum ".$_COOKIE['name']. ". </h2>";
        echo '
        <form action="" method= "POST">
            <input type="" name="delete" id="">
            <button type = "submit" name=dalete >ortga</button>
        </from>';

    } else{
        echo'
        <form cookie action="" method= "POST">
            <label for =""> isminggizni kiriting!</lable><br>
            <input type="text" name="name" id="">
            <button type ="submit">saqlash</button>
        </form>';
    }
    ?>
</body>
</html>