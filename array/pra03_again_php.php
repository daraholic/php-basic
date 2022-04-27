<?php
    $num=[];
    $i=0;
    while(count($num)<6){
        $t=rand(1,38);
        if(!in_array($t,$num)){
            $num[]=$t;
        }
        $i++;
    }

    echo "<pre>";
    print_r($num);
    echo "</pre>";

    foreach($num as $nu){
        echo "$nu";
    }
    
?>