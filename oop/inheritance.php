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