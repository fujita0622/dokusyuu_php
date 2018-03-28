<?php
// 練習問題 5.2 
// 1. mb_substr関数をつかって,文字列「サーバーサイド技術」から「サイド」という文字列を抜き出しましょう。
// 2. mb_convert_kana関数をつかって,「ｻｰﾊﾞｰｻｲﾄﾞ」に含まれる半角カタカナを全角カタカナに変換しましょう。
// 3. 変数$dataの文字コードを「Shift-JIS」から「EUC-JP」に変換しましょう。

//[1.回答]
$str = mb_substr('サーバーサイド技術', 4, 3);

//[2.回答]
echo mb_convert_kana("ｻｰﾊﾞｰｻｲﾄﾞ", "KV");

//[3.回答]
$data = "abc";
mb_convert_encoding($data, 'EUC-JP', 'Shift-JIS');

?>

