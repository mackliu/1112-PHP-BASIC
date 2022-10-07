<h2>利用程式來產生陣列</h2>
<h4>以九九乘法為例</h4>
<?php
$ninenine=[];

for($i=1;$i<=9;$i++){

    for($j=1;$j<=9;$j++){

        $ninenine[$i][$j]=$i*$j;

    }

}


/* echo "<pre>";
print_r($ninenine);
echo "</pre>"; */

echo $ninenine[5][6];
echo "<br>";
foreach($ninenine as $i=>$array){
    
    foreach($array as $j=>$value){
        echo $i."x".$j."=".$value;
    }
    echo "<br>";
}


echo "<hr>";
$ninenine=[];

for($i=1;$i<=9;$i++){

    for($j=1;$j<=9;$j++){

        $ninenine[$i.'x'.$j]=$i*$j;

    }

}
/* echo "<pre>";
print_r($ninenine);
echo "</pre>"; */

echo $ninenine['5x6'];
echo "<br>";
$break=0;
foreach($ninenine as $key => $value){
    $break++;
    echo $key."=".$value;
    echo ($break%9==0)?"<br>":'';
    
}
?>