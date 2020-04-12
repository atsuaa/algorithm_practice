<?php
$MOJI= ['a', 'b', 'a', 'a', 'a', 'b', 'b', 'a', 'a', 'b'];  //0~9
$PTN= ['a', 'a', 'b'];  //0~2

$M= count($MOJI);  //10 (max:9)
$N= count($PTN);  //3 (max:2)

$cnt= 0;
$i= 0;

while ($i < $M- $N+ 1) {              //9-2+1-1=7 ([7],[8],[9])
  $flg= true;
  $j= 0;
  while ($j < $N) {
    if ($MOJI[$i] !== $PTN[$j]) {
      $flg= false;
      $i= $i- $j+ 1;                //$i番目startで不一致なら次は$i+1番目からstart
      break;
    }
    ++$i;
    ++$j;
  }
  $flg === true ? $cnt++: null;    //一致sしたらカウントを１あげる
}

print $cnt;                       //2
