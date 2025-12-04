<?php

class Math{
    public static function add($a,$b){
        return  $a+$b;
    }
    public static function info(){
        echo "bu matematik amallarni bajarish klasi";
    }
}

echo Math::add(10,15);//25
echo"<br>";
echo Math::info();