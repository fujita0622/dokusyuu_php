<?php 
// 下記をwhile文でかきかえなさい。
// $sum = 0;
// for ($i = 1; $i <= 100; $i++) { 
//   if ($i % 2 !== 0) {
//     continue;
//   }
//   $sum += $i;
// }
// print $sum;

// 回答
$sum = 0;
$i = 0;
while ($i < 100) {
  $i++;
  if ($i % 2 !== 0) {
    continue;
  }
  $sum += $i;
}

print $sum;
?>