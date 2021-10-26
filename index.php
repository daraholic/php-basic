<?php

// 常數定義通常會放在程式的第一行
// 常數通常用大寫
// 只能被定義一次 之後沒辦法改

define("PI",3.1415926);
echo PI*2;
define("COMPANY_NAME","鴻海科技");
echo COMPANY_NAME;
echo "<hr>";
echo "hello world~";
$a="g";
$b="ood";
$full_name=$a.$b;

echo "it's".$full_name;

$g=34*2;
echo $g;
echo "<hr>";
$cc=rand(1,49);
echo $cc;
echo ",";
$cc=rand(1,49);
echo $cc;
echo ",";
$cc=rand(1,49);
echo $cc;
echo ",";
$cc=rand(1,49);
echo $cc;
echo ",";
$cc=rand(1,49);
echo $cc;
echo ",";
$cc=rand(1,49);
echo $cc;
echo "<hr>";
$cc=rand(1,8);
echo $cc;
echo "<hr>";
// 等號右手邊的處理
// ＋＋放的位置順序 意義不一樣 ＊慎用
$a=10;
echo $a++;
echo ++$a;

?>