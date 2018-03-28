<!-- 練習問題4.2.2 for命令を利用して,九九表を作成してみましょう -->

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<table>
<?php
for($i = 1; $i < 10; $i++) {
  echo "<tr>";
  for($j = 1; $j < 10; $j++) { 
    echo "<td>" . $i * $j . "</td>";
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>