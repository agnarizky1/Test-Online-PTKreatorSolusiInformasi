<?php
$a = array(790, 483, 281, 224, 198, 60, 698, 400, 709, 168);
$c = 0;
foreach ($a as $b) {
    if ($b > $c)
        $c = $b;
}
echo "Nilai Terbesar : " . $c;
