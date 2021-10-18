<?php
header("Content-type:text/html;charset=utf-8");
function Factorial($n) {
$sum = 1;
for ($i = 1; $i <= $n; $i++) {
$sum *= $i;
}
echo "$n 的阶乘为： " . $sum."
";
}
Factorial(5);
?>
