<?php
// 練習問題 10.2
// 1. 与えられた引数$width(底辺)、$height(高さ)から四角形の面積を求めるsquareメソッドを定義してみましょう。なお、squareメソッドは静的メソッド、クラス名はMyClassとします。

class MyClass {
// 静的メソッドsquareを定義
  public static function square($width, $height) {
// 静的メソッドsquareが呼び出された時に第一引数と第二引数をかけて四角形の面積をだし戻り値として返す
    return $width * $height;
  }
}
// MyClassクラスの静的メソッドsquareの戻り値を出力
echo MyClass::square(3, 4);
?>
