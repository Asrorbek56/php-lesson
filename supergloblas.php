<?php
$x = 12;
function test()   {
    $GLOBALS['c']  = 15;
    echo $GLOBALS['x'];
}

test();
echo $c;



?>
