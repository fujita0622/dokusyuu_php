<?php
// 7章 この章の理解度チェック
// 2. DateTimeクラスを利用して、現在の日付、現在の月の末日、現在から一ヶ月10日後の日付を求めてください。結果は「YYYY年MM月DD日」の形式で表示するものとします。

// 【2.回答】
// DateTimeクラスをインスタンス化し$nowに代入。
// 現在の時刻を取得したいので引数は指定しない
$now = new DateTime('');
// formatで()内に'Y年m月d日'と書式を指定しechoで$now（現在時刻）を出力
echo $now -> format('Y年m月d日') . "<br>";
// DateTimeクラスの引数に 'last day of' で月の末日を取得できるように指定し$m_last_dayに代入
$m_last_day = new DateTime('last day of');
// $nowと同じ書式で出力
echo $m_last_day -> format('Y年m月d日') . "<br>";
// $after_fourtydayにDateTimeクラスを代入
$after_fourtyday = new DateTime('');
// 現在時刻に new DateInterval で1ヶ月10日を指定し add で加算する
$after_fourtyday -> add(new DateInterval('P1M10D'));
// $nowと同じ書式で出力
echo $after_fourtyday -> format('Y年m月d日') . "<br>";
?>