<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>威力彩號碼</h1>
    <p>按一下下面的按鈕選出號碼</p>
    <button><a href="?do=pra03_again_php">push</a></button>

    <div class="container">
        <?php
        $do=isset($_GET['do'])?$_GET['do']:'';
        $file=$do.".php";
        if(file_exists($file)){
            include $file;
        }else{
            "plz push th button";
        }

        ?>
    </div>
</body>
</html>