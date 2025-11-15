<?php
//
$file = fopen('test.txt', "r+");
$content =fread($file,filesize("test.txt"));
fclose($file);
echo $content;
//   
$file = fopen('data.txt','w');
fwrite($file,"xumoyun liptoooon");
fclose($file);
echo "isop";
$file= fopen("data.txt" , 'a');
fwrite( $file, "sommakim");
fclose($file);   
echo "isop";

$file = fopen('test.txt','r');
while(!feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);

if(file_exists("data1.txt")){
    unlink('data1.txt');
    echo "fayl o`chirildi";

}else{
    echo "fayl yoq";

}

$content =file_get_contents('test.txt');
echo $content;
file_put_contents('data.txt',"test text kirishi");
file_put_contents('data.txt',"text kritilsin uka",FILE_APPEND);


$log = date("Y.m.d H:i:s");
file_put_contents("log.txt",$log, FILE_APPEND);

?> 












