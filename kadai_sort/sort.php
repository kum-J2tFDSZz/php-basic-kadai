<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta cherset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      function sort_2way(array &$array, bool $order): void {
    if ($order === true) {
        // TRUEなら昇順ソート
        sort($array);
    } else {
        // FALSEなら降順ソート
        rsort($array);
    }
}

// --- 動作確認 ---
$numbers = [15, 4, 18, 23, 10];

// ① TRUE を渡して昇順（小さい順）にする
sort_2way($numbers, true);
echo "昇順にソートします。<br>";
foreach ($numbers as $num) { echo $num . '<br>'; }
// 結果：4 10 15 18 23 


// ② FALSE を渡して降順（大きい順）にする
sort_2way($numbers, false);
echo "降順にソートします。<br>";
foreach ($numbers as $num) { echo $num . '<br>'; }
// 結果：23 18 15 10 4

      ?>
    </p>
  </body>
</html>