<h1>字串練習</h1>
<?php
$str="aaddw1123";
//$str=str_replace(['a','d','w',1,2,3],'*',$str);

/* for($i=0;$i<mb_strlen($str);$i++)
{
    echo "*";
} */


echo str_repeat("*",mb_strlen($str));

echo "<hr>";
$array=explode(",","this,is,a,book");
print_r($array);
echo "<hr>";
echo join(" ",$array);
echo "<hr>";
echo mb_substr("The reason why a great man is great is that he resolves to be a great man",0,10)."...";

?>
