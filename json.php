<?php
// php ni jsonga otirish
$data = [
    "name"=>"sarvar",
    "age"=>29,
    "city"=>"oxayo"

];
$json = json_encode($data);
echo $json;
// jsonni php ga otkazish
$json ='{
    "name":"ali",
    "age":24,
    "city":"tashkent"
}';
$array =json_decode($json,true);
print_r($array);
echo "<br>";
$object = json_decode($json);
print_r($object);

$jsonText =file_get_contents('data.json');
$data = json_decode($jsonText);
print_r($data);

$data = [
    "name" => "sarvar",
    "age"=>29,
    "city"=>"oxayo"
];
file_put_contents("user.json",json_encode($data,JSON_PRETTY_PRINT));
?>