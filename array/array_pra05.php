<?php
$a=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$b=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];

/* $years=[];

for($i=0;$i<60;$i++){
    $years[$a[$i%10]][$b[$i%12]]=$i;
}


echo "<pre>";
print_r($years);
echo "</pre>";

echo "丁亥".$years['丁']['亥']; */

/* $years2=[];

for($i=0;$i<60;$i++){
    $years2[$a[$i%10].$b[$i%12]]=$i;
}
echo "<pre>";
print_r($years2);
echo "</pre>";
echo "丁亥".$years2['丁亥']; */

/* $years3=[];

for($i=0;$i<60;$i++){
    $years3[$i]=$a[$i%10].$b[$i%12];
}
echo "<pre>";
print_r($years3);
echo "</pre>"; */

$years4=[];
$startYear=1024;
$inputYear=98;

for($i=0;$i<60;$i++){
    $years4[$i]=$a[$i%10].$b[$i%12];
}


echo "<pre>";
print_r($years4);
echo "</pre>";

echo "西元{$inputYear}年是".$years4[($inputYear-$startYear)%60]."年";

?>