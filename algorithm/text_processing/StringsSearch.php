<?php
$MOJI = ['b', 'a', 'a', 'b', 'a', 'b', 'a', 'b', 'a', 'a'];
$PTN = ['a', 'b', 'a'];

$M = count($MOJI);
$N = count($PTN);

$cnt=0;
for ($i=0; $i < $M-$N; $i++) {
  $flg = true;

  for ($j=0; $j < $N; $j++) {
    if ($MOJI[$i+$j] !== $PTN[$j])  $flg = false;
    if ($flg == false)              break;
  }

  if ($flg == true)
    ++$cnt;
}

print $cnt;   // Desplay "3",check the pattern of a word in the row MOJI.
