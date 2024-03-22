<?php
$input = "Saya sangat suka coding\tphp dan\tpython";

$output = preg_replace('/\t/', ' ', $input);

echo $output;
?>
