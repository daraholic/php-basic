<?php

// 迴圈內外可以通用 穿梭自如




// for(起始值,條件,遞增值){
//     執行星星的程式

// }

for($i=0;$i<6;$i++){
    echo "*";

// }

// 在外面包一個for
// 起始值：$j=6
// 條件：$j>0 或 $j>=1
// 遞增：$j=$j-1
// for 裡面決定的是迴圈的次數
// 起始值可以改 但是後面就要跟著改 從零開始比較簡單
// 倒三角形
for($j=6;$j>0;$j=$j-1){

    for($i=0;$i<$j;$i++){

        echo "*";
    
    }
    echo "<br>";
}

echo "<hr>";
// 正中間三角形
// 暴力解
echo "&ensp;&ensp;&ensp;&ensp;*<br>";
echo "&ensp;&ensp;&ensp;***<br>";
echo "&ensp;&ensp;*****<br>";
echo "&ensp;*******<br>";
echo "*********<br>";
// 用 for 高級法解
// 變數可以重複使用替換 由上往下跑 值會改變
// 看一下規律
// 2x+y=9
echo "<hr>";

for($row=1;$row<=5;$row++){
    for($i=0;$i<(5-$row);$i++){
        echo "&ensp;";
    // 這個for跑完才會往下
    }
    for($i=0;$i<(2*$row-1);$i++){
        echo "*";

    }
    echo "<br>";
}
echo "<hr>";
?>

<!-- // 再加一個變數 -->
<!-- // <span>行內樣式 -->
<!-- // { } 只能放字串或數字 -->
<?php
$row=5;
for($j=1;$j<=5;$j++){
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    // 這個for跑完才會往下
    }
    for($i=0;$i<(2*$j-1);$i++){
        echo "<span style='color;red';>*</span>";

    }
    echo "<br>";
}

?>