<!--
 練習問題 10.7
2. 「php_クラス名.class.php」のような命令規則でクラスを管理しているものとします。sql_autoload_register関数を使用して、クラスの呼び出し時に自動的に関係するファイルがインクリードされるようにしてみましょう。
-->

<!-- [回答] -->
<?php
// sql_autoload_register関数の引数にfunction($name)と設定し呼び出したいクラス名が引数を入るようにする
sql_autoload_register(function($name)) {
// クラスの呼び出し時にfunction($name)で受け取ったクラス名を「php_クラス名.class.php」形式でインクリードする
require_once "php_{$name}.class.php";
}
?>