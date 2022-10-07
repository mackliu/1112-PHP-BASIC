<h2>找出五百年內的閏年</h2>
<?php
$years=[];

for($i=2022;$i<=2522;$i++){
    if($i%4==0 && $i%100!=0 || $i%400==0){
        $years[]=$i;
    }
}

$testYear=2320;
if(in_array($testYear,$years)){

    echo $testYear ."是閏年";
}else{   
    echo $testYear ."不是閏年";
}

?>
<h3>五百年內的閏年</h3>
<table>
<?php
foreach($years as $idx => $year){
    
    if($idx%5==0){
        echo "<tr>";
        echo "<td>{$year}</td>";
    }else if($idx%5==4)
    {
        echo "<td>{$year}</td>";
        echo "</tr>";
    }else{
        echo "<td>{$year}</td>";
    }
}
?>

</table>