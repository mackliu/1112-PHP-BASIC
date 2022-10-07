<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表練習</title>
</head>
<body>
<h1>練習1</h1>
<table border=1 style="background-color:#eef">
    <?php
    for($j=1;$j<=9;$j++){
        echo "<tr>";
        for($i=1;$i<=9;$i++){
            echo "<td style='width:80px;background-color:#9ef'>";
            echo $i . "*" . $j . "=".( $j*$i);
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<h1>練習2</h1>
<table border=1 style="background-color:#eef">
    <?php
    $num=9;
    for($j=0;$j<=$num;$j++){
        echo "<tr>";
        for($i=0;$i<=$num;$i++){
            if($i==0 && $j==0){
                echo "<td style='width:40px;'></td>";
            }else if($i==0){
                echo "<td style='width:40px;'>$j</td>";
            }else if($j==0){
                echo "<td style='width:40px;'>$i</td>";
            }else{                
                echo "<td style='width:40px;background-color:#9ef'>";
                echo $j*$i;
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
<h1>練習3</h1>
<table border=1 style="background-color:#eef">
    <?php
    $num=9;
    for($j=0;$j<=$num;$j++){
        echo "<tr>";
        for($i=0;$i<=$num;$i++){
            if($i==0 && $j==0){
                echo "<td style='width:40px;'></td>";
            }else if($i==0){
                echo "<td style='width:40px;'>$j</td>";
            }else if($j==0){
                echo "<td style='width:40px;'>$i</td>";
            }else if($j>=$i){                
                echo "<td style='width:40px;background-color:#9ef'>";
                echo $j*$i;
                echo "</td>";
            }else{
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


</body>
</html>