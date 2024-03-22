<?php
$input = "Kd brg=7328482, NmBrg=Buavita Jambu, HrBrg:8.500, QtyBrg=2, TtlBayar:17.000";

$items = explode(", ", $input);

$Kd_Brg = "";
$NmBrg = "";
$HrBrg = "";
$QtyBrg = "";
$TtlBayar = "";

foreach ($items as $item) {
    if (strpos($item, "=") !== false) {
        list($key, $value) = explode("=", $item);
    } elseif (strpos($item, ":") !== false) {
        list($key, $value) = explode(":", $item);
    } else {
        continue;
    }

    $value = trim($value);

    if ($key == "Kd brg") {
        $Kd_Brg = $value;
        continue;
    }
    
    if ($key == "NmBrg") {
        $value = str_replace("'", "", $value);
    }
    
    if ($key == "HrBrg" || $key == "TtlBayar") {
        $value = str_replace(".", "", $value);
        $value = str_replace(",", ".", $value);
    }
    
    ${$key} = $value;
}

echo "\$Kd_Brg = " . $Kd_Brg . ";<br>";
echo "\$NmBrg = " . $NmBrg . ";<br>";
echo "\$HrBrg = " . $HrBrg . ";<br>";
echo "\$QtyBrg = " . $QtyBrg . ";<br>";
echo "\$TtlBayar = " . $TtlBayar . ";<br>";
?>
