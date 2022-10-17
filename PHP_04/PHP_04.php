<?php
$array = [790, 483, 281, 224, 198, 60, 698, 400, 709, 168];
$j = count($array);
$t = $j - 1;
while ($j >= 0) {
    for ($i = 0; $i < $t; $i++) {
        $aux = $array[$i];
        if ($array[$i] > $array[$i + 1]) {
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $aux;
        }
    }
    $j--;
}
print_r($array);
