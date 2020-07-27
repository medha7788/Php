<?php

function processMarks($marks){
    $sum=0;
    $i=1;
    foreach($marks as $value) {
        $sum +=$value;
        $i++;
    }
    return $sum/$i;
}
$r=[34,52,45,93,12];
$sumMarks = processMarks($r);
echo "$sumMarks";
?>