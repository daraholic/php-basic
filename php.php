<?php

// $a = 10;
// $b = 50;

// $a=$b;
// $b=$a;
// echo '$a='.$a;
// echo "<br>";
// echo '$b='.$b;

// echo "<hr>";

// $c=$a;
// $a=$b;
// $b=$c;

// echo '$a='.$a;
// echo "<br>";
// echo '$b='.$b;
// echo "a&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b";
// none break space
// echo "a&lt; a&gt;b";

// $score=45;
// if($score>=60){
//     echo "及格";

// }else{
//     echo "不及格";

// }
// 判斷不只一個
// $score=0;
// if($score＜=90){
//     echo "good";
// }else{
//     echo "oh no...";
// }

// $level="ㄑ";
// echo "成績等級：".$level."<br>";
// switch($level){
//     case "A":
//         echo "表現很讚，keep going";
//     break;
//     case "B":
//         echo " 直得肯定，有進步空間";
//     break;
//     case "C":
//         echo "需要更多練習";
//     break;
//     case "D":
//         echo "需要加強基本功";
//     break;
//     default:
//         echo "是否無心學業";
// }
// echo "<br>";
// php換行不能直接打<br>
// $score=100;
// $level=($score>=60)?"及格":"不及格";
// echo $level;

// echo "<br>";

// $score=85;
// $level=' ';
// level先空 用下面判斷式放東西進去 最後再印出來
// else if 或是 elseif 兩種寫法都可以
// if($score>=70 && $score<=89){
//     $level="A";
// }else if($score>=80 && $score<=89){
//     $level="B";
// ...
// }

// echo "<br>";

$year = 2020;

if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "西元" . $year . "年是閏年";
} else {
    echo "西元" . $year . "年不是閏年";
}

?>

<!--
用迴圈寫九九乘法表
＄後面不能接數字
有運算記得要用（ ）才不會算錯
在外面再包一個迴圈要注意
宣告php要寫到最外面
印出來要用echo
-->
<style>
table{
    border-collapse:collapse;
    width:800px;
}
table td{
    border: 1px solid #ccc;
    padding: 10px;
}

</style>

<table>
<?php
for ($j = 1; $j <= 9; $j++) {
    echo '<tr>';
    for ($i = 1; $i <= 9; $i++) {
        echo "<td>$j x $i =" . ($j * $i) . "</td>";
    }
    echo "</tr>";
}
?>
</table>

<hr>
<!-- 票價表 -->

<table>

<?php
for ($k = 0; $k <= 9; $k++) {
    echo '<tr>';
    for ($g = 0; $g <= 9; $g++) {

        if ($g == 0 && $k == 0) {
            echo "<td></td>";
        } else if ($g == 0) {
            echo "<td> $k </td>";
        } else {
            if ($k == 0) {
                echo "<td> $g </td>";
            } else {
                echo "<td>" . ($k * $g) . "</td>";

            }
        }

    }
    echo "</tr>";
}
?>
</table>

<?php
$row = 5;
for ($j = 1; $j <= 5; $j++) {
    for ($i = 0; $i < ($row - $j); $i++) {
        echo "&ensp;";
        // 這個for跑完才會往下
    }
    for ($i = 0; $i < (2 * $j - 1); $i++) {
        echo "*";

    }
    echo "<br>";
}

?>


