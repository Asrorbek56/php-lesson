<?php
class Car{
    public $model;

    public $color;
    public $probeg;
    public function __construct($color,$probeg) {
        $this->color =$color ;
        $this->probeg = $probeg;
    }
    public function drive(){
        echo" mashina yurmoqda";
    }
    public function setProbeg($probeg){
        $this->probeg =$probeg;
    }
    public function getProbeg():int{
        return $this->probeg;
    }        
}

$bmw = new Car("blac",0);
$bmw->model= "BMW";
$bmw->color="black";
$bmw->setprobeg(20109);
echo $bmw->model;
echo "probeg:".$bmw->probeg."<br>";
echo "probeg:".$bmw->getProbeg()."<br>";

$bmw->drive();"<br>";

$damas=new Car("black",0);
$damas->model="damas";
$damas->color="white";
echo $damas->model;
?>