<?php

class Animal{
    protected $name;
    public function sound(){
        echo 'birorta ovoz';
    }
    public function run(){
        return "yugirmoq";
    }
}
class Dog extends Animal{
    public function setName($name){
        return $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function sound(){
        echo "wow<br>";
    }
}
class Cat extends Animal{
    public function sound(){
        echo"miyov";
    }
}
$it = new Dog();
$it->sound();
$it->setName("bobik");
echo $it->getName()."<br>";
$cat =new cat();
$cat->sound();
