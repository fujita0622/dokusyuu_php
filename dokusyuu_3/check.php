<?php
// 3章 この章の理解度チェック 
// 3. 条件演算子（省略構文）を使って$errorの値が空なら「正常です。」空でないなら$errorの値を、それぞれ表示するコードを書いてください。

// 3.回答
// 変数$errorを宣言
$error;
// $errorが空だった時に文字列 "正常です。" を, 空じゃなかったら$errorの値をecho関数で出力
echo ($error == "") ? "正常です。" : $error;
?>
