<?php
// 2章 この章の理解度チェック 
// 5. 次のようなコードを実際に作成してください。
// (1) 155.36を指数表記し、整数をキャスト（結果はvar_dump命令で表示）
// (2) 「りんご」「みかん」「かき」という要素を持つ配列$fruit
// (3) 「red/トマト」、「yellow/かぼちゃ」「green/レタス」というキー/値の組み合わせの連想配列$vegetables

// (1)回答
//155.36を整数の型に変換する
var_dump((int)155.36);

// (2)回答
// array関数で()内の要素を,で区切り順番に$fruitに格納
$fruit = array('りんご' , 'みかん', 'かき');
// 配列の内容を出力（確認用）
var_dump($fruit);

// (3)回答
// $vegetablesに['key' => 'value']で連想配列を十番に格納
$vegetables = ['red' => 'トマト', 'yellow' => 'かぼちゃ', 'green' => 'レタス'];
// 配列の内容を出力（確認用）
var_dump($vegetables);
?>