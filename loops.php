<?php
// $i = 0;

// while($i < 6){
//     echo $i." ,";
//     $i++;
// }
// while(true){
//     if($i == 10)
//         break;
//     $i++;
//     if($i == 8)
//         continue;
//     echo $i." ,";
// }
// $array = ['ali','volli','akmal','bekki','kommi'];
// foreach($array as $item){
//     echo $item;
// }
$son = 91551;
$yigindi = 0;
$temp = $son;

// while($temp > 0){
//     $yigindi += $temp %10;
//     $temp = (int)($temp / 10);
// }
// echo "$son ning yigindisi $yigindi ga teng";
// echo "\n";


// for ($i = 1; $i <= 100; $i++) {
//     echo $i . " ";


//     if (($i + 1) % 10 == 1) {
//         echo "\n";
//     }
// }

function age($b_year,$year = 2025) {
    return $year - $b_year;

}
echo age(2009);
?>
