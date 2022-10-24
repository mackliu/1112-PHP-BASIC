<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP月曆</title>
    <style>
        table{
            border:3px double blue;
        }
        td{
            border:1px solid #ccc;
        }
        td:nth-child(6),
        td:nth-child(7){
            background-color: pink;
        }
    </style>
</head>
<body>
<?php
$sec=strtotime('2022-2-31');
echo $sec;
echo "<br>";
echo date("Y-m-d",$sec);
?>
<h1>月曆</h1>
<?php
$year=date("Y");
$month=10;
$today=date("Y-n-j");
echo "今天是$today 號";
echo "<br>";
//echo $year.'-'.$month;
$firstDate=$year.'-'.$month.'-1';
//$firstDate=date("Y-10-1");
$firstDateWeek=date('N',strtotime($firstDate));
$monthDays=date("t",strtotime($firstDate));
$lastDate=$year.'-'.$month.'-'.$monthDays;

echo "本月最後一天是$lastDate 號";
echo "<br>";
echo $monthDays;
echo "<br>";
echo $firstDate;
echo "<br>";
echo "本月第一天是星期:";
echo $firstDateWeek;
echo "<br>";
$weeks=ceil(($monthDays+($firstDateWeek-1))/7);
echo "本月一共有".$weeks."周";
?>



<table>
<tr>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
    <td>日</td>
</tr>
<?php
for($i=1;$i<=$weeks;$i++){
    echo "<tr>";
    for($j=1;$j<=7;$j++){
        $date=$year.'-'.$month.'-'.(($i-1)*7+$j-($firstDateWeek-1));
        //echo $date . '<br>';
        if($i==1){
            if($j>=$firstDateWeek){
                if($date==$today){
                    echo "<td style='background-color:lightblue'>";
                    echo date("d",strtotime($date));
                    echo "</td>";
                }else{
                    echo "<td>";
                    echo date("d",strtotime($date));
                    echo "</td>";
                }
            }else{
                echo "<td></td>";
            }
        }else{
            //echo $date ."=> ".strtotime($date)."<=".strtotime($lastDate)."<br>";
            if(strtotime($date) && date("n",strtotime($date))==$month){
                if($date==$today){
                    echo "<td style='background:lightblue'>";
                        echo date("d",strtotime($date));
                    echo "</td>";
                }else{
                    echo "<td>";
                    echo date("d",strtotime($date));
                    echo "</td>";
                }
            }else{
                echo "<td></td>";
            }
        }
    }
    echo "</tr>";
}

?>

</table>
</body>
</html>