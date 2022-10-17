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
?>

<h2>練習</h2>
<ul>
    <li><a href="">練習一:</a></li>
    <li><a href="">練習二:</a></li>
    <li><a href="">練習三:</a></li>
    <li><a href="">練習四:</a></li>
    <li><a href="">練習五:</a></li>
</ul>

</body>
</html>