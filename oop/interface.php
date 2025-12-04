<?php
interface Payment{
    public function pay($amount);
}
interface Payment1{
    public function chek();
}
class Payme implements Payment, Payment1{
    public function pay($amount){
        echo "kurrang:$amount sum tolandi<br>";
    }
     public function chek(){
        echo " chek chiqarildi <br>";
    }
}
class Click implements Payment{
    public function pay($amount){
        echo "click:$amount sum tolandi<br>";
    }
     public function chek(){
        echo " chek chiqarildi <br>";
    }
}
$pay1=new Payme();
$pay1->pay(500000);
$pay1->chek();


$pay2=new Click();
$pay2->pay(500000);
