<?php
$y = 2020;
isleap($y);
print '<br>';
$y = 2021;
isleap($y);
print '<br>';
$y = 2022;
isleap($y);
print '<br>';
$y = 2023;
isleap($y);
print '<br>';
$y = 2024;
isleap($y);


function isleap($y)
{
  if ($y % 400 === 0) {
    $leap = true;
  } else {
    if ($y % 4 === 0) {
      if ($y % 100 !== 0) {
        $leap = true;
      }
    }
  }
  if ($leap) {
    print 'うるう年';
  }else {
    print 'うるう年でない';
  }
}
 ?>
