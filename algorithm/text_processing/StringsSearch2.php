<?php
// Checking characters equal to PTN[] in the arrray of MOJI[].
// If matching, response the first order of MOJI[].

$MOJI= ['a', 'b', 'c', 'a', 'b', 'c'];
$PTN= ['b', 'c'];

$M= count($MOJI);
$N= count($PTN);

$c = -1;                              //カウント
for ($i=0; $i < $M - $N; $i++) {      //MOJIの頭から順に
  for ($j=0; $j < $N; $j++) {         //PTNと１文字ずつ照らし合わせる
    if ($MOJI[$i + $j] !== $PTN[$j])
      break;                          //一致しなかったら照合をやめる
  }
  if ($j > $N-1) {                    //最後まで一致していたら
    $c = $i;
    break;                            //終了
  }
}

var_dump($c);  //display "1"         //最初に一致した先頭
