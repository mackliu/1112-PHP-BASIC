<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閏年判斷</title>
</head>
<body>
 <?php
 $year=3200;

 if($year%4==0 && $year%100!=0 || $year%400==0){
    //true
    echo $year."是閏年";
}else{
    //false
    if($year%400==0){
        echo $year."是閏年";
        
    }else{
        echo $year."不是閏年";
    }

 }
 

 ?>
</body>
</html>