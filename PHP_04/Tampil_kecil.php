<?php
function nilaiMin($array)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
            $min = $array[$i];
    return $min;
}
$array = array(790, 483, 281, 224, 198, 60, 698, 400, 709, 168);
echo "<br>";
echo "Nilai Minimum : " . nilaiMin($array);
