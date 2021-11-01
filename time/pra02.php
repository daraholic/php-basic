<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>距離生日還有幾天</title>
    <link rel="stylesheet" href="./styles.css">

</head>
<body>
    <h1>距離生日還有幾天</h1>
    <sapan>
        開始日期:2021-10-25
    </sapan>
    <span>
        結束日期:2022-01-25
    </span>
    <hr>
    <?php
        date_default_timezone_set('Asia/Taipei');
        $now=strtotime('now');
        $nextBirthday=strtotime('2022-01-25');
        $gap=($nextBirthday-$now)/86400;
        echo floor($gap). "天";
        // floor 無條件捨去
        echo "<br>";

        $year=floor(floor($gap)/365);
        echo $year;
        $month=floor(floor(floor($gap)%365)/30);
        echo $month;
        $days=floor(floor($gap)%365%30);
        echo $days;
        echo "<br>";
        echo "距離我的生日還有".$year."年".$month."個月".$days."天";
    ?>

</body>
</html>
