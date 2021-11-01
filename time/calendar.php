<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <link rel="stylesheet" href="./styles.css">
    <style>
        table{
            width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
        }
        td{
            padding: 5px;
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <h1>線上月曆</h1>
    

    <?php

    $firstDay=date("T-m-01");
    $month=date("m");
    $firstWeekfirstday=date("w",strtotime($firstDay));
    echo "<table>";
    echo "<tr>";

    echo "<table>";

    for($i=0;$i<6;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            if($i==0 && $j <5 || ($i==5 && $j >0)){
                echo "<td>";
                echo "&nbsp";
                echo "<td>";
            }else{
                echo "<td>";
                echo $i*7+$j+1;
                echo "</td>";
            }
            

        }
        echo "</tr>";
    }
    echo "</table>";
    


    ?>

</body>
</html>
