<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>字串取代</title>
</head>
<body>
    <h1>字串取代</h1>
    <h3>
    將”aaddw1123”改成”*********”
    </h3>
    <?php
    
    $str='aaddw1123';
    echo str_repeat("*",strlen($str));
    
    echo "<hr>";
    echo str_replace(['a','d','w','1','2','3'],'*',$str);
    echo "<hr>";

    $array=[];
    for($i=0;$i<strlen($str);$i++){
        $s=substr($str,$i,1);
        if(!in_array($s,$array)){
            $arry[]=$s;
        }
        
    }
    echo str_replace($array,'*',$str);
    echo "<br>";
    
    // print_r(explode("",$str));
    // 把每個字元拆開
    ?>
</body>
</html>