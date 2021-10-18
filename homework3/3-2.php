<?php
$arr = array();
while(count($arr) < 10)
{
  $arr[] = rand(10, 100);    // 范围1-10
  $arr = array_unique($arr); // 防止重复
}
sort($arr);
print_r($arr);
?>
