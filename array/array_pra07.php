<h1>旋轉陣列</h1>
<h3>給定一個陣列有Ｋ個元素及旋轉Ｎ的次數，回傳旋轉完成後的陣列</h3>
<?php

$array=[3,2,1,5,6];  //=>[1,5,6,3,2];
$n=3;
$t=0;
$k=count($array);
echo "原陣列=>[".join(',',$array)."]<br>";

for($i=0;$i<$n;$i++){
    $t=$array[$k-1];
    for($j=0;$j<$k;$j++){
        if(($k-2-$j)>=0)
        {
            $array[$k-1-$j]=$array[$k-2-$j];
        }else{
            $array[$k-1-$j]=$t;
        }
    }
    // echo "[".join(',',$array)."]<br>";
}

echo "旋轉後=>[".join(',',$array)."]<br>";
?>