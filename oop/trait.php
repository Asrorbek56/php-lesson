<?php
trait Logger{
    public function Log($msg){
        file_put_contents('data.log',date("d-m-y h:i:s")." - ".$msg."\n<br>",FILE_APPEND);
    }
    public function getLog(){
        $data = file_get_contents("data.log");
        return $data;
    }
} 
trait Notifier{
    public function notify($msg){
        echo "Notification $msg<br>";
    }
    public function sent(){
        echo "bu notify ichida";
    }
}
class User{
    use Logger,Notifier;
    public function sent(){
        echo "bu user ishida";
    }
}
$u= new User();
$u->log("foydalanvchi id:101");
echo $u->getLog();
$u->notify("Xariding uchun rahmat");
$u->sent();