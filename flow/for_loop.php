<h1>FOR 迴圈 </h1>
<?php
for($i=0;$i<10;$i=$i+1){
    echo $i;
    echo " , ";
}

echo '$i 的最終值為',$i

?>

<h1>數列1,3,5,7,9....n</h1>
<?php
$n=50;
for($i=1;$i<=$n;$i=$i+2){
    echo $i . ",";
}

?>

<h1>數列10,20,30,40,50,60....n</h1>
<?php
$n=10;
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";
}

?>

<h1>1-100的質數 3,5,7,11,13,17……97</h1>
<?php
$n=1000;
for($i=3;$i<=$n;$i++){
    $chk=true;

    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $chk=false;
        }
    }

    if($chk==true){
        echo $i;
        echo " , ";
    }
}

?>