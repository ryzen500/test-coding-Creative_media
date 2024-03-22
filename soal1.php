<?php
//Melakukan Perbaikan nilai inputnya di nominal
$input = "Total pembelian baju dinas sebesar Rp.900.000";

echo  $input. "<br>";

$jumlah = str_replace("Total pembelian baju dinas sebesar Rp.", "", $input);

echo  "a.) ".$jumlah . "<br>"; 
$jumlah = str_replace(".", "", $jumlah);

echo "b.) ". (int)$jumlah . "\n"; 
?>
