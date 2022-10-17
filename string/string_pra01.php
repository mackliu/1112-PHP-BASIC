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
<h1>字串函式整合應用</h1>
<?php
$target='程式設計';
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$sub="<span style='font-size: 24px;color:red'>".$target."</span>";
$result=str_replace($target,$sub,$str);
echo $str."<br>";
echo $result."<br>";

//print_r(explode($target,$str));
echo join($sub,explode($target,$str))
?>


<!-- 學會PHP網頁<span style="font-size:24px;color:red">程式設計</span>，薪水會加倍，工作會好找 -->


