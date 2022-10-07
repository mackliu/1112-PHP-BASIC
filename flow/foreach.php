<h2>for</h2>
<?php

$amo=[
    '國文'=>88,
    '英文'=>78,
    '數學'=>54,
    '地理'=>81,
    '歷史'=>71
    ];

    $keys=array_keys($amo);
    //print_r($keys);
    echo "<hr>";
for($i=0;$i<count($amo);$i++){
    echo $keys[$i]."=>";
    echo $amo[$keys[$i]]."<br>";
}


echo "<hr>";
echo "<h2>foreach</h2>";

foreach($amo as $key=>$value){
    echo $key . "=>";
    echo $value."<br>";
}

echo rand(1,38).",";
echo rand(1,38).",";
echo rand(1,38).",";
echo rand(1,38).",";
echo rand(1,38).",";
echo rand(1,38);
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

