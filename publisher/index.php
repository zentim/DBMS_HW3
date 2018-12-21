<?php
  require("./include/variable_setting.php");
?>

<?php
  /**
   * connect to db
   */
  require("./include/db_connection.php");
?>

<?php
  // 取得SQL指令
  $SQL = "SELECT * FROM $TABLE_NAMEz";
  $SQL = stripslashes($SQL);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>資料庫管理系統</h2><a href="../index.html">回首頁</a>
    <hr>
    <form action="controller.php" method="post">
        1. <input type="submit" name="page" value="查詢"><br>
        2. <input type="submit" name="page" value="新增"><br>
        3. <input type="submit" name="page" value="修改"><br>
        4. <input type="submit" name="page" value="刪除"><br>
    </form>
    <hr>

<?php
    echo "<div>";

    // 執行SQL查詢
    $result = mysqli_query($link, $SQL);
    // 一筆一筆的以表格顯示記錄
    echo "<table border=1><tr>";
    // 顯示欄位名稱
    while ( $meta = mysqli_fetch_field($result) ) {
      echo "<td>".$meta->name."</td>";
    }
    echo "<td>操作</td>";
    echo "<td>操作</td>";
    echo "</tr>"; // 取得欄位數
    $total_fields = mysqli_num_fields($result);
    // 顯示每一筆記錄
    while ($row = mysqli_fetch_row($result)) {
      echo "<tr>"; // 顯示每一筆記錄的欄位值
      for ( $i = 0; $i <= $total_fields-1; $i++ ) {
        echo "<td>" . $row[$i] . "</td>";
      }
      // delete button
      echo "<td>";
      echo '<form action="controller.php" method="post">';
      echo '<input type="hidden" name="'. $ID . '" value="'. $row[0] .'">';
      echo '<input type="submit" name="operation_delete" value="刪除"><br>';
      echo '</form>';
      echo "</td>";

      // update button
      echo "<td>";
      echo '<form action="controller.php" method="post">';
      echo '<input type="hidden" name="'. $ID . '" value="'. $row[0] .'">';
      echo '<input type="submit" name="operation_update" value="修改"><br>';
      echo '</form>';
      echo "</td>";

      echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    echo "</div>";
    mysqli_free_result($result); // 釋放佔用記憶體
?>


</body>
</html>




<?php
  /**
   * close db
   */
  require("./include/db_close.php");
?>

