<?php
$c = ['A', 'B', 'C', 'D'];
$n = count($c);

permutation($c, 0, $n);


function permutation($c = [], $L, $R)
{
  if ($L === $R-1) {
    foreach ($c as $val) {
      print $val. '　';
    }
    print '<br>';
  } else {
    for ($i=$L; $i < $R ; $i++) {
      $tmp = $c[$i];
      $c[$i] = $c[$L];
      $c[$L] = $tmp;
      // list($c[$i], $c[$L]) = array($c[$L], $c[$i]);

      permutation($c, $L+1, $R);

      $tmp = $c[$i];
      $c[$i] = $c[$L];
      $c[$L] = $tmp;
    }
  }
}
 ?>
