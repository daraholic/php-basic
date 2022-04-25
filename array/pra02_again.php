<!-- 九九乘法表的練習 -->
<?php
//  make a array
// 0~8 change line

$nine=[];

for($i=1;$i<10;$i++){
    for($j=1;$j<10;$j++){
        $nine[]="$i"."X"."$j"."=".$i*$j." ";
    }

}

echo "<pre>";
print_r($nine);
echo "</pre>";

for($i=0;$i<count($nine);$i++){
    echo $nine[$i];
    if($i%9==8){
        echo "<br>";
    }
}
?>