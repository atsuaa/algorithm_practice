<?php
//データを保持するために
session_start();
// unset($_SESSION['key']);  //リセット用

$k = 0;
$k = count($_SESSION['key']);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPで二分探索木</title>
    <style media="screen">
      body {background-color: silver;}
      table { text-align: center; }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="main">
<!-- ここからメイン -->

<form action="tree_insert.php" method="post">
  <p>数値を挿入</p>
  <input type="text" name="val" value="<?= rand(1, 100)?>">
  <input type="submit" value="Insert">
</form>

<?php
$_SESSION['key'][$k + 1] = $_POST['val'];
$array = $_SESSION['key'];

foreach ($array as $val) {
  print $val. '　';
}

print '<table>
  <tr>
    <th>インデックス</th><th>左ポインタ</th><th>値</th><th>右ポインタ</th>
  </tr>';

foreach ($array as $NUM) {
  $TREE = treeInsert($TREE, $NUM);
}
foreach ($TREE as $i => $value) {
  print '<tr class ="row'. $i. '">
    <td class ="id">'. $i. '</td>
    <td class ="lptr">'. $value['lptr']. '</td>
    <td class ="data">'. $value['data']. '</td>
    <td class ="rptr">'. $value['rptr']. '</td>
  </tr>';
}
print '</table>';



//ファンクションはひとまずここに記載します
function treeInsert($TREE, $NUM)
{
  $i = 1;

  if (!$TREE[1]['data']) {                 /*値がなにもなければ*/
    $TREE[1]['data'] = $NUM;
    $TREE[1]['lptr'] = null;
    $TREE[1]['rptr'] = null;
    return $TREE;

  } else {                                 /*値２つ目から*/

    while ($i !== null && $TREE[$i]['data'] !== $NUM) {  /*ポインタをたどる*/
      $parent = $i;
      if ($TREE[$i]['data'] > $NUM) {
        $n = $i * 2;                        /*次のインデックスは左なら２倍した値*/
        $i = $TREE[$i]['lptr'];
      } else {
        $n = $i * 2 + 1;                    /*次のインデックスは左なら２倍+1した値*/
        $i = $TREE[$i]['rptr'];
      }
    }

    if ($i === null) {                      /*データを新しいインデックスに格納*/
      $TREE[$n]['data'] = $NUM;
      $TREE[$n]['lptr'] = null;
      $TREE[$n]['rptr'] = null;

      if ($TREE[$parent]['data'] > $NUM) {  /*ポインタをつける*/
        $TREE[$parent]['lptr'] = $n;
      } else {
        $TREE[$parent]['rptr'] = $n;
      }
    } else {
      print 'データが存在します。';
    }
    return $TREE;
  }
}
 ?>

 <!-- ここまでメイン -->

</body>
</html>
