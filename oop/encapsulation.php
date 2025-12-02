<?php
class Car{
    private $model;

    protected $color;
    public $probeg;
    public function __construct($color,$probeg) {
        $this->color =$color ;
        $this->probeg = $probeg;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function getModel(){
        return $this->model;
    }
    public function drive(){
        echo" mashina yurmoqda<br>";
    }
    public function setProbeg($probeg){
        $this->probeg =$probeg;
    }
    public function getProbeg():int{
        return $this->probeg;
    }        
}
$onix = new Car("oq","0");
$onix-> setModel("onix");
echo $onix->getModel();
?>