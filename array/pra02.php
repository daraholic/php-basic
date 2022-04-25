<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>利用程式來產生陣列</h1>

<?php
$nine=[];

// 指定變數要用固定值&明確結果
for($j=1;$j<=9;$j++){
    
    for($i=1;$i<=9;$i++){
        $nine[]="$j X $i =".($j*$i)." ";
    }
}
echo "<pre>";
print_r($nine);
echo "</pre>";
echo "<hr>";
// 計算陣列個數函式 count()
// 每九個換行
// 解1
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if($i%9==8){
        echo "<br>";
    }
}
echo "<hr>";
// 解2
for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if(($i+1)%9==0){
        echo "<br>";
    }
}

?>

</body>
</html>