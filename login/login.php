<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    if($_POST['login']=='admin' && $_POST['password']=="12345"){
        $_SESSION['login'] = 'admin';
        echo "login qilindi! <a href='home.php'>Home</a>";
    }else{
        echo"login yoki parol xato";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">login</label><br>
        <input type="text" name= login> <br>
        <label for="">parol</label><br>
        <input type="password" name= 'password'><br>
        <input type="submit" value='saqlash'>
    </form>    

</body>
</html>