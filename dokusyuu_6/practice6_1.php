<?php
// 1. 与えられた引数$diagonal1,$diagonal2（対角線の長さ）を使用して、菱形の面積を求めるdiamond関数を定義してみましょう。菱形の面積は「対角線1×対角線2÷2」で求められます。

// $diagonal1, $diagonal2を仮引数にしたユーザー定義関数diamondを宣言
function diamond($diagonal1, $diagonal2) {
// 戻り値をひし形の面積の式で計算する
  return $diagonal1 * $diagonal2 / 2;
}
// 定義した関数diamondを実引数を入れて出力
echo diamond(3, 4);
?>