<?php 
//  從字串找出字
// 中文是三個字元
// subsur($變數,開始的數字,結束的)
// 估狗一下可以用的函數
// 힌트:mb_substr, strpos , strsearch
// substr( $string原始字串 , $start開始 , $length長度 )
// echo strpos($str,$find);
$str="今天天氣很好";
echo $str;

// $sub=mb_substr($str,3,1);
// echo "<hr>";
// echo $sub;



$find="天";
$pos=0;

while(mb_substr($str,$pos,1)!=$find){
    $pos=$pos+1;
    
}

echo "<hr>";
echo "你要找的字：".$find;
echo " , 位置在：".$str."的第".($pos+1)."的位置";
// echo "<hr>";

// while(沒有找到的條件): 條件不滿足跳出
// 用for 寫：如果找到就停止跳出
// 全部跑 跑比while多次 比較耗能
echo "<hr>";

for($i=0;$i<mb_strlen($str);$i++){
    
    if(mb_substr($str,$i,1)==$find){
        echo "<hr>";
        echo "你要找的字：".$find;
        echo " , 位置在：".$str."的第".($i+1)."的位置";  
        break;
    }
    echo $i;
}

?>