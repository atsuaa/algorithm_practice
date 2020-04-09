<style media="screen">
  span{
    background-color: silver;
  }
</style>
<?php
//N以下の素数を出力する。
$N= 1000;
print '<span>2</span>　';

for ($i=3; $i < $N; $i=$i+2) {
  $flg= 1;
  for ($j=2; $j < $i; $j++) {
    if ($i- intval($i/$j)* $j == 0) {
      $flg= 0;
      break;
    }
  }
  $flg === 1 ? print '<span>'. $i.'</span>　' : print '　';
}
