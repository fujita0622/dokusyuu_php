<?php
// 6章 この章の理解度チェック
// 1. 引数として底辺$base、高さ$heightを受け取り、平行四辺形の面積を求めるユーザ定義関数squareを記述してみましょう。

// 【1.回答】
// 
// ユーザ定義関数squareの第一引数,第二引数ともにデフォルト値1に設定する
function square($base = 1, $height = 1) {
// 第一引数と第二引数をかけて平行四辺形の面積を戻り値で返す
  return $base * $height;
}
// 関数squareを呼び出し戻り値を出力
echo square();
?>