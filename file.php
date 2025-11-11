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

?>