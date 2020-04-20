<?php
//二分木の例
              $TREE[1]['data'] = 80;
             $TREE[1]['l-pointer'] = 2;
               $TREE[1]['r-pointer'] = 3;
      $TREE[2]['data'] = 60;
     $TREE[2]['l-pointer'] = 4;
       $TREE[2]['r-pointer'] = 'nil';
                              $TREE[3]['data'] = 100;
                             $TREE[3]['l-pointer'] = 5;
                               $TREE[3]['r-pointer'] = 'nil';
$TREE[4]['data'] = 55;
$TREE[4]['l-pointer'] = 'nil';
$TREE[4]['r-pointer'] = 'nil';
                    $TREE[5]['data'] = 90;
                   $TREE[5]['l-pointer'] = 'nil';
                     $TREE[5]['r-pointer'] = 'nil';
//木っぽい？

//phpで二分木を表現する
$i = 'ROOT';
while ($i <> 'nil' && $TREE[$i]['data'] <> $NUM) {
  if ($TREE[$i]['data'] > $NUM) {
    $i = $TREE[$i]['l-pointer'];
  } else {
    $i = $TREE[$i]['r-pointer'];
  }
}
if ($i <> 'nil') {
  print '一致データあり';
} else {
  print '一致データなし';
}
