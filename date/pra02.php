<h1>計算自己的生日</h1>
<?php
$birth='2023/10/7';
$now=strtotime('now');
//echo strtotime($birth).'-'.$now;
$diff=$now-strtotime($birth);
$days=abs(floor($diff/86400));
$hours=abs(floor(($diff%86400)/3600));
$min=abs(floor(($diff%3600)/60));
$sec=abs($diff%60);
echo $days;
?>
<?php 
if($diff>0){
?>
<h3>我的生日 10/7 已經過了<?=$days;?> 天 <?=$hours;?>小時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}else{
?>
<h3>距離我的生日 10/7 還有<?=$days;?> 天 <?=$hours;?>小時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}
?>