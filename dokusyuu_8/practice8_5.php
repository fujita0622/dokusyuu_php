<?php
// 練習問題8.5
// 2. setcookie関数をつかって名前[name],値[value],有効期限30日後のクッキーを発行してみましょう。
// setcookie関数でクッキー名に name , 値に value ,有効期限は60秒*60分*24時間*30日で計算し30日後に設定
setcookie('name','value', time() + (60 * 60 * 24 * 30));
?>