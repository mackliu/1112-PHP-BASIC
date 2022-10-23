<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日期函式</title>
</head>
<body>
<h1>日期基礎函式</h1>    
<h2>date()</h2>
<h2>時區設定datedate_default_timezone_set()</h2>
<?php 
date_default_timezone_set("Asia/Taipei");
echo date("西元Y年m月d日 H:i:s l");
?>
<h2>strtotime()</h2>
<?php
$now= strtotime('now');
$now=$now+(60*60*24)*10;
echo $now;
echo "<br>";
echo date("西元Y年m月d日 H:i:s l",$now);
echo "<hr>";

$tomorrow=strtotime("-1 hours");
echo $tomorrow;
echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo "<br>";
echo date("Y-m-d H:i:s",$tomorrow);
echo "<br>";
/* $t=date("Y-m-d",$tomorrow);
echo $t;
echo strtotime($t); */
?>


<h2>練習</h2>
<ul>
    <li><a href="pra01.php">練習一:計算日期間隔</a></li>
    <li><a href="pra02.php">練習二:計算自己的生日還有幾天</a></li>
    <li><a href="pra03.php">練習三:date函式的參數練習</a></li>
    <li><a href="pra04.php">練習四:使用程式流程來產生指定的日期</a></li>
    <li><a href="">練習五:</a></li>
</ul>

</body>
</html>