<?php
$num=100;
function sum($n){
    if($n>1){
        $s=sum($n-1)+$n;
    }else{
        $s=1;
    }
    return $s;
}
echo "1到$num 的求和为： " . sum($num)."";
?>