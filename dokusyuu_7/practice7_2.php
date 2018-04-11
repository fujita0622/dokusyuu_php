<?php
// 1. 日時文字列「2016年12月04日」をDateTimeクラスを使って解析し、「YYYY/MM/DD (曜日)」の形式で出力してみましょう。

// createFromFormatメソッドの第一引数に指定する書式文字列を変数に代入
$fmt = 'Y年m月s日';
// createFromFormatメソッドの第二引数に指定する日付を変数に代入
$data = '2016年12月04日';
// 指定した書式文字列で日付を解析しDateTimeオブジェクトを生成
$date = DateTime::createFromFormat($fmt, $data);
// 指定した書式で出力
echo $date->format('Y/m/d (l)');
?>