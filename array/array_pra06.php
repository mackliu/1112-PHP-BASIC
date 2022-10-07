<h2>反轉陣列</h2>
<?php
$array=[2,4,6,1,8,9];
echo  "原陣列 => [".join(',',$array)."]"."<br>";
for($i=0;$i<floor(count($array)/2);$i++){
    $t=$array[$i];
    $array[$i]=$array[count($array)-1-$i];
    $array[count($array)-1-$i]=$t;
}

echo "反轉後 => [".join(',',$array)."]"."<br>";

?>