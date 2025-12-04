<?php
class Car{
    public $model;
    public $color;
    public $probeg;
    public $power;

     public function getPowerType(){
        echo "benzinda yurirdi";
    }

}
class eCar extends Car{
    public function getPowerType(){
        echo "tokda yurirdi";
    }
}


// +------------------+

class Animal {
    protected $name;
    public function sound(){
        echo "biror ovoz ber";
    }
    final public function run(){
        echo"yugurr"; 
    }
}

class Dog extends Animal{
    public function setName($name){
        return $this->name= $name;
    }
    public function getName(){
        return $this->name;
    }
    public function sound(){
        echo"vov<br>";
    }
}

class Cat extends Animal{
    public function sound(){
        echo"miyov ";
    }
}
$it = new Dog();
$it->sound();
$it->setName("bobka");
echo $it->getName()."<br>";
$cat = new Cat();
$cat->sound();