<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
<h1>陣列的宣告</h1>
<?php
$a=[];

if(is_array($a)){
    echo '$a是陣列';
}else{
    echo '$a不是陣列';
}

?>

<h1>陣列宣告時給值</h1>
<?php
$a=['星期一','星期二','星期三'];

if(is_array($a)){
    echo '$a是陣列';
    print_r($a);
    echo "<br>";
    //echo $a[1];
    for($i=0;$i<count($a);$i++){
        echo $a[$i]."<br>";
    }
}else{
    echo '$a不是陣列';
}
echo "<HR>";
echo array_search("星期三",$a);
echo "<HR>";
echo serialize($a);
?>
<h1>陣列宣告時給值並指定鍵值</h1>
<?php
$a=['day1'=>'星期一',
    'day2'=>'星期二',
    'day3'=>'星期三'];

if(is_array($a)){
    echo '$a是陣列';
    print_r($a);
    echo "<br>";
    //echo $a['day1'];
    for($i=1;$i<=count($a);$i++){
        echo $a['day'.$i]."<br>";
    }
}else{
    echo '$a不是陣列';
}

echo "<HR>";
echo array_search("星期四",$a);

//echo serialize($a);

$join=implode("--",$a);
echo $join;

print_r(explode('--',$join));
?>
</body>
</html>