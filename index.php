
<?php

$book=10;
echo "book" . $book;

echo "<br />";

$name="劉勤永";

echo "我的名字是" .$name;

$second=60*60*24;
echo "<br/>";
echo "一天有".$second."秒";
echo "<br/>";
$name="劉老師";
echo "我的名字是" .$name;

define("COMPANY","泰山訓練場");

echo COMPANY;

echo COMPANY.$name;


?>

<H2>運算子</H2>
<?php
$op=true;

echo !$op;

echo "<br />";

$price=51;

$mod=$price%4;
$avg=($price-$mod)/4;
echo "平均每人分".$avg;
echo "<br>";
echo "還有".$mod."元沒有分配";

$a=100;
$b=50;

$a && $b 



?>
<h1>變數交換</h1>

<?php
$a = 140;
$b =200;

echo "<br>";
echo '$a='.$a;
echo "<br>";
echo '$b='.$b;

$tmp=$a;
$a=$b;
$b=$tmp;

echo "<br>";
echo '$a='.$a;
echo "<br>";
echo '$b='.$b;

?>