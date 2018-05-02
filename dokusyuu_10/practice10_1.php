<?php
// 練習問題 10.1
// 2. クラスを破棄したタイミングで「破壊されました」というメッセージを表示するクラスを定義してください。クラス名はMySampleとします。

class MySample {
// オブジェクトを破棄するためデストラクタメソッドを定義
  public function __destruct() {
// オブジェクトを破棄される際にprint関数で「破棄されました。」と出力
    print "破棄されました。";
  }
}

// クラスMySampleをインスタンス化
$destruct = new MySample();
?>
