<?php
//改行文字をN個の空白文字「 」に変換するアルゴリズム
$A = ['a', 'b', '\n', 'c', '\n', 'd', '\n'];
$M = count($A);
$N = 2;

$i = 0;
while ($i < $M) {
  if ($A[$i] === '\n') {
    for ($j=0; $j < $N; $j++) {
      ++$L;
      $B[$L] = ' ';
    }
  }else {
    ++$L;
    $B[$L] = $A[$i];
  }
  ++$i;
}
//表示する
foreach ($B as $value) {
  print $value. ',';
}
print '<br>'. $L;
