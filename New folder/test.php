#!/usr/bin/php
<?php
$array1 = array("Bitcoin", "Ethereum", "Bitcoin Cash");
$array2 = array("BTC", "ETH", "BTC");
$array3 = array("10000", "3000", "6666");


//Multi Dimensional Array
$multi = array($array1, $array2, $array3);

$json_data = json_encode($multi);
file_put_contents('myfile.json', $json_data);
?>
