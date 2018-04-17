<?php
// 4章 この章の理解度チェック 
// 1. for命令とcoutinue命令とを使って、1〜100の範囲にある奇数値の合計を求めてみましょう。

// 2. 下記の1〜100を加算していき,1000を超えたところでループを終了する文をwhile命令を使って書き換えてみましょう。
// $sum = 0;
// for ($i = 1; $i <= 100; $i++) { 
//   $sum += $i;
//   if ($sum > 1000) {
//     break;
//   }
// }
// print "合計が1000を超えるのは、1〜{$i}を加算したときです。";

// 4. 変数$languageの値が「PHP」、「JSP」、「ASP」であれば「サーバーサイド技術」「JavaScript」「VBScript」であれば「クライアントサイド技術」と表示するスクリプトを、switch命令を使って作成してください。

// 5. 4.のスクリプトをif命令を使って書き換えてみましょう。


// 1. 回答
// $sumsに0を代入し初期化する
$sums = 0;
// 変数$i(初期値は1)が100になるまでループを回す
for ($i = 1; $i <= 100; $i++) {
// 変数$iを2で割って余りの値がでない(偶数)の場合
  if ($i % 2 == 0) {
// ループをスキップする
    continue;
    }
// $sumsに$iを加算する
  $sums += $i;
}
// 奇数の合計値が入っている変数$sumsを出力(確認の為)
echo $sums;


// 2. 回答
// 合計値を入れる変数$sumに0を代入する
$sum = 0;
// 変数$iに1を代入する
$i = 0;
// 変数$iが100以上になるまでループを回す
while ($i <= 100) {
// 変数$iに1を加算する
  $i++;
// $sumに$iの値を加算
  $sum += $i;
// $sumが1000よりも大きい場合
  if ($sum > 1000) {
// ループを終了する
    break;
  }
}
// 合計値を出力
print "合計が1000を超えるのは、1〜{$i}を加算したときです。";


// 4. 回答
// 出力確認用に下記それぞれ変数を代入（確認時以外はコメントアウト）
// $language = "PHP";
// $language = "JavaScript";

// 条件に変数$languageを設定
switch ($language) {
// $languageの中が文字列'PHP','JSP','ASP'に当てはまったら
  case 'PHP':
  case 'JSP':
  case 'ASP':
// "サーバーサイド技術"と出力
    echo 'サーバーサイド技術';
// 処理を終了する
    break;
// $languageの中が文字列'JavaScript','VBScript'に当てはまったら
  case 'JavaScript':
  case 'VBScript':
// 'クライアントサイド技術'と出力
    echo 'クライアントサイド技術';
// 処理を終了する
    break;
}


// 5. 回答
// 出力確認用に下記それぞれ変数を代入（確認時以外はコメントアウト）
// $language = "PHP";
// $language = "JavaScript";

// 変数$languageが中身が'PHP','JSP','ASP'のどれかであれば場合
if ($language == 'PHP' || $language == 'JSP' || $language == 'ASP') {
// 'サーバーサイド技術'と出力
  echo 'サーバーサイド技術';
  // 変数$languageが'JavaScript','VBScript'のどちらかであれば場合
} elseif ($language == 'JavaScript' || $language == 'VBScript') {
  // 'クライアントサイド技術'と出力
  echo 'クライアントサイド技術';
}
?>

