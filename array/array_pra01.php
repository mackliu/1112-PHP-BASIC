<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列練習</title>
    <style>
        table{
            border:1px solid black;
            border-collapse: collapse;
        }
        td{
            border:1px solid #999;
        }
    </style>
</head>
<body>
    <h1>宣告陣列</h1>
<?php
$title=['','國文','英文','數學','地理','歷史'];
$a=['judy',95,64,70,90,84];
$b=['amo',88,78,54,81,71];

?>
<table>
    <tr>
    <?php
            for($i=0;$i<count($title);$i++){
                echo "<td>".$title[$i]."</td>";
            } 
        ?>
    </tr>
    <tr>
        <?php
            for($i=0;$i<count($a);$i++){
                echo "<td>".$a[$i]."</td>";
            } 
        ?>
    </tr>
    <tr>
        <?php
            for($i=0;$i<count($b);$i++){
                echo "<td>".$b[$i]."</td>";
            } 
        ?>
    </tr>
</table>
    <h1>宣告陣列2</h1>
<?php
$scores=[['','國文','英文','數學','地理','歷史'],
         ['judy',95,64,70,90,84],
         ['amo',88,78,54,81,71],
         ['john',45,60,68,70,62]];

?>
<table>

<?php
    for($j=0;$j<count($scores);$j++){
        echo "<tr>";
        for($i=0;$i<count($scores[$j]);$i++){
            echo "<td>".$scores[$j][$i]."</td>";
        } 
        echo "</tr>";
    }
?>
</table>
    <h1>宣告陣列3</h1>
<?php
$scores=[
        '國文'=>[
            'judy'=>95,
            'amo'=>88,
            'john'=>45
            ],
        '英文'=>[
            'judy'=>64,
            'amo'=>78,
            'john'=>60
            ],
        '數學'=>[
            'judy'=>70,
            'amo'=>54,
            'john'=>68
            ],
        '地理'=>[
            'judy'=>90,
            'amo'=>81,
            'john'=>70
            ],
        '歷史'=>[
            'judy'=>84,
            'amo'=>71,
            'john'=>62
            ]
        ];

?>
<table>

<?php
$students=array_keys($scores['國文']);
echo "<tr>";
    echo "<td></td>";
foreach($students as $name){
    echo "<td>$name</td>";
}
echo "</tr>";
foreach($scores as $subject => $students){
    echo "<tr>";
    echo "<td>$subject</td>";
    foreach($students as $name => $score){
        echo "<td>$score</td>";
    }
    echo "</tr>";
}
?>
</table>
<table>
<?php
$students=[
    'judy'=>[
        '國文'=>95,
        '英文'=>64,
        '數學'=>70,
        '地理'=>90,
        '歷史'=>84,
    ],
    'amo'=>[
        '國文'=>88,
        '英文'=>78,
        '數學'=>54,
        '地理'=>81,
        '歷史'=>71
    ],
];

$titles=array_keys($students['judy']);
echo "<tr>";
    echo "<td></td>";
foreach($titles as $title){
    echo "<td>$title</td>";
}
echo "</tr>";
foreach($students as $name => $subjects){
    echo "<tr>";
    echo "<td>$name</td>";

    foreach($subjects as  $score){
        echo "<td>$score</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>