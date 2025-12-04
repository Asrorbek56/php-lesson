<?php
abstract class Payment{
  public $amount;
  public function __construct($amount){
    $this->amount=$amount;
}
abstract public function pay();
public function info(){
    return "tolov summasi{$this->amount} sum <br>";
}
}
class Payme extends Payment{
  public function pay(){
    return"tolov payme orqali amalga oshdi<br>";
  }
}
class Click extends Payment{
  public function pay(){
    return"tolov click orqali amalga oshdi<br>";
  }
}
$pay1= new Payme(50000);
echo $pay1->info();
echo $pay1->pay();

$pay2= new Click(10000);
echo $pay2->info();
echo $pay2->pay();


?>