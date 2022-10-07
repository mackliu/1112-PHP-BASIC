<h2>威力彩選號不重覆</h2>
<?php

/* for($i=0;$i<6;$i++){
    $a1[]=rand(1,38);
} */

/* while(count($a1)<6){
    $num=rand(1,38);
    $chk=false;
    for($i=0;$i<count($a1);$i++){
        if($a1[$i]==$num){
            $chk=true;
        }
    }
    
    if($chk==false){
        $a1[]=$num;
    }

} */

/* while(count($a1)<6){
    $num=rand(1,38);
    if(!in_array($num,$a1)){
        $a1[]=$num;
    }
}
 */
/* $num1=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,
       16,17,18,19,20,21,22,23,24,25,26,27,
       28,29,30,31,32,33,34,35,36,37,38]; 

for($i=0;$i<6;$i++){
    $index=rand(0,count($num1)-1);
    $num=$num1[$index];
    $a1[]=$num;
    //unset($num1[array_search($num,$num1)]);
    array_splice($num1,array_search($num,$num1),1);
    echo "<pre>";
    print_r($num1);
    echo "</pre>"; 
} */

$num1=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,
       16,17,18,19,20,21,22,23,24,25,26,27,
       28,29,30,31,32,33,34,35,36,37,38]; 

/* for($i=0;$i<6;$i++){
    shuffle($num1);
    $a1[]=array_pop($num1);
} */

shuffle($num1);


echo "<br>";
echo "第一區:".join(",",array_slice($num1,0,6));
echo "<br>";
echo "第二區:".rand(1,8);
?>