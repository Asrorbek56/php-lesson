<!-- <?php
// $ism ="sarvar";
// $familiya ="ruziboyev";

// echo "salom \t$ism";
// echo "\n";
// echo $familiya." ".$ism;
// echo  "\n";
// echo strlen($familiya);
// echo  "\n";
// echo $familiya[1]; 
// echo  "\n";
// //********************* */
// echo  "\n";
// echo strtoupper($familiya);
// echo  "\n";
// echo str_replace('test','TEST',$familiya);
// echo  "\n";
// echo strrev("hello");

// $a =" hello\nWorld ";
// echo trim($a);
// echo "\n";
// echo str_replace('\n','<br>',$a);
// echo "\n";
// $text = "assalomu aleykum";
// echo $text[0];
// echo "\n";
// echo substr($text, 9,4)
// $x = "dars: PHP asoslar";
// echo substr($x,6,3 )
// $int =6;
// $kasr= 4.6;
// $number_string = "45";
// var_dump(is_int($int));
// var_dump(is_float($number_string));
// var_dump(is_string($number_string));
$a =45;
var_dump($a);
$a = (string) $a;
var_dump($a);
$b = "ggg";
$b = (int) $b;
var_dump($b);
$b = (float) $a;
//---------------------\\
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
//--------------------------\\

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (Float) $a;
$b = (Float) $b;
$c = (Float) $c;
$d = (Float) $d;
$e = (Float) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "\n";
echo "\n";
echo "\n";

//////////////////////////////////////////////

echo pi();
echo "\n";
echo(min(-230,150,30,20,-8,-200));
echo "\n";
echo(max(0,150,30,20,-8,-200));
echo "\n";
echo abs(-9);
echo "\n";
echo sqrt(64);
echo "\n";
echo round(5.6);
echo "\n";
echo rand(1,200);


$x = 20;  
$x += 100;

echo $x;
echo "\n";
$x = 100;  
$y = "100";

var_dump($x === $y);
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";

$a = -2;
$b = 4;
if ($a > 0){
    echo "bu son noldan katta";
}
if($a < 0){
    echo "bu son noldan kichik";
}
echo "\n";
if ($a < 0 && $b > 0){
    echo "ikkala shart ham bajarildi";
}

if ($t < 22) {
    echo "HAVe a good morning";
} elseif ($t > 10){
    echo "Have a good day";
} else{
    echo "Have a good Morning";
}
// 



?> -->