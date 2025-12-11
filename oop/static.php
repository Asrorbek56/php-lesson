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

class Counter{
    public static $count = 0;
    public static function increment(){
        self::$count++;
    }
}

Counter::increment();
Counter::increment();
echo Counter::$count;

class A{
    public static function test(){
    self::who();
    }
}

class B extends A {
    public static function who(){
        echo "class  b <br>";
    }
}
B::test();
B::test1();

?>