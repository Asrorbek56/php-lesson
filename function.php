<?php

// function age($b_year,$year = 2025) {
//     return $year - $b_year;

// }
// echo age(2009);







$sonlar =[0,54,78,99,14];

function num_max($sonlar){
$kattalar = $sonlar[0];

foreach ($sonlar as $son) {
    if($son  > $kattalar){
        $kattalar = $son; 
       
    }
}
    return $kattalar; 

}
echo num_max(
$sonlar);
    
?>