<?php

$score=-150;

if($score >= 0 && $score <=100){
     
    if($score >=60){
        echo "及格";
    }else{
        echo "不及格";
    }


}else{
    echo "成績資料有誤，應該在０—１００";
}

?>