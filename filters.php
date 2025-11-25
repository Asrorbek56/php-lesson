<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr."<br>";


$email = "asr(o)r@gm ail.com";
$clean = filter_var($email,FILTER_SANITIZE_EMAIL);
echo $clean."<br>";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo"email xato";
}else{
    echo"o`o`o` mujik !<br>";
}
$age =20;
if(filter_var($age,FILTER_SANITIZE_INT)){
    echo"yosh butun son<br>";
}
$url ="https://www.youtube.com/";
if(filter_var($url,FILTER_VALIDATE_URL)){
    echo "url togri";
}else {
    echo"url xato";
}
?>