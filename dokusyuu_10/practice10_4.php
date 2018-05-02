<!--
 練習問題 10.4
2. 次のようなMyClassはあるものとします。getDataメソッドを継承し、文字列全体を「〜」のようにブランケットで囲むように変更してみましょう。なお、継承に際しては、parentキーワードも利用することとします。
class MyClass {
  protected $data;
  public function __construct(string $data) {
    $this -> data = $data;
  }
  public function getData(): string{
    return $this -> data;
  }
} 
-->

<!-- [回答] -->
<?php
class MyClass {
  protected $data;
  public function __construct(string $data) {
    $this -> data = $data;
  }
  public function getData(): string{
    return $this -> data;
  }
}
// 親クラスMyClassを子クラスBlanketMyClassに継承
class BlanketMyClass extends MyClass {
//  ブランケットを追加するためにメソッドgetBlanketNameを定義
  public function getBlanketName(): string {
// 「parent::getData()」で親クラスのメソッドgetData()を呼び出す。
//  呼び出したメソッドの文字列の前後にブランケットを文字列結合して戻り値に設定
    return "[" . parent::getData() . "]";
  }
}

// 子クラスBlanketMyClassをインスタンス化
// 引数は親クラスのコンストラクタで受け取る
$BlanketMyClass = new BlanketMyClass("山田太郎");
// 出力してメソッドgetData()の文字列の前後にブランケットが追加されているか確認
echo $BlanketMyClass -> getBlanketName();
?>