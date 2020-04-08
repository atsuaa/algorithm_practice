<?php
$MOJI= ['b', 'a', 'a', 'b', 'a', 'b', 'a', 'b', 'a', 'a'];
$PTN= ['a', 'b', 'a'];

$M=count($MOJI);
$N=count($PTN);

$count=0;
$i=0;

while ($i<$M - $N) {
  $flg= true;
  for ($j=0; $j < $N; $j++) {
    if ($MOJI[$i + $j] <> $PTN[$j])  $flg= false;
    if ($flg <> false)               break;
  }
  if ($flg= true) {
    ++$count;
    $i= $i+ $N+ 1;
  } else {
    ++$i;
  }
}
var_dump($count);
