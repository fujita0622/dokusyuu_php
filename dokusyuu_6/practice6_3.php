<?php 
// 練習問題 6.3
// 与えられた引数の総積を求めるproduct関数を定義してください。

// product関数を定義
function product() {
// 変数$numsに0を代入
  $nums = 0;
//func_get_args関数でユーザ定義関数の引数リストを配列として取得し変数$argsに代入
  $args = func_get_args();
// 配列$argsの要素の数だけ繰り返し処理をする
  foreach($args as $arg) {
// 変数$numsが0の場合
    if($nums == 0) {
// $numsに$argを加算する
      $nums += $arg;
// ループをスキップする
      continue;
    }
// 残りの要素が乗算する
    $nums *= $arg;
  }
// $numsを戻り値として返す
  return $nums;
}
// product関数を呼び出し出力
echo product(3, 4, 3);
?>