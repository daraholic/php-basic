<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字串與HTML、css整合應用</title>
</head>
<body>
    <h1>尋找字串與HTML、css整合應用</h1>
    <h3>
    給定一個句子，將指定的關鍵字放大
    </h3>
    <li>
        “學會PHP網頁程式設計，薪水會加倍，工作會好找”
    </li>
    <li>
        請將上句中的 “程式設計” 放大字型或變色.
    </li>
    <h2>方法一</h2>
    <?php
    $str='學會PHP網頁程式設計，薪水會加倍，工作會好找';
    $sub='程式設計';
    
    
    $split=explode($sub,$str);
    print_r($split);
    echo "<br>";
    echo $split[0] .
    "<span style='font-size:30px;color:red'>".
    $sub .
    '</span>'.
    $split[1];
    ?>

    <!-- 學會PHP網頁<span style='font-size:30px;color:red'>程式設計</span>薪水會加倍，工作會好找 -->
    <h2>方法二</h2>
    <!-- 加上一些裝飾 -->
    <style>
        .font-effect{
            font-size:30px;
            color:red;
        }
        .font-effect:hover{
            color:green;
        }
    </style>
    <?php
    $style="<span class='font-effect'>".
        $sub.
        '</span>';
    echo str_replace($sub,$style,$str);

    ?>
</body>
</html>