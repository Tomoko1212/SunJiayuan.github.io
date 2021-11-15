
<?php
$n = 10;
$a = 1;
$b = 1;
echo "$a <br>";
echo "$b <br>";
for ($x = 0; $x <= $n; $x++) {
  $c = $a + $b;
  $b = $a;
  $a = $c;
  echo "$c <br>";
}
?>
