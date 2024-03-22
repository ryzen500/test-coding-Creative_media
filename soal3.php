<?php
$count = 0;

for ($i = 1; $i <= 100; $i++) {
    $num_str = (string)$i;
    
    for ($j = 0; $j < strlen($num_str); $j++) {
        if ($num_str[$j] == '8') {
            $count++;
        }
    }
}

echo "Jumlah kemunculan angka 8 dari 1 sampai 100 adalah: " . $count;
?>
