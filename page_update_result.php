<h2>資料庫管理系統-修改</h2>
<hr>

<?php
// 是否是表單送回
if ( isset($_COOKIE["cust_no"]) ) {
  // 取得SQL指令
  $sql = "SELECT cust_no AS 客戶代號, name AS 姓名, id AS 統一編號, tel_no AS 電話號碼, address AS 地址 ";
  $sql .= "FROM basic WHERE cust_no = " . $_COOKIE["cust_no"];
  $sql = stripslashes($sql);

  /**
  * connect to db
  */
  require_once("./include/db_connection.php");



  // 執行SQL查詢
  $result = @mysqli_query($link, $sql);
  if ( mysqli_errno($link) != 0 ) {
    echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
    echo "錯誤訊息: ".mysqli_error($link)."<br/>";
  } else {
    // 取得記錄數
    $total_records = mysqli_num_rows($result);
    // echo "記錄總數: $total_records 筆<br/>";

    if ($total_records == 0) {
      echo "客戶代號: " . $_COOKIE['cust_no'] . '<br>';
      echo '<p style="color: red">!資料不存在!</p>';

      echo '<form action="controller.php" method="post">';

      echo "<p>";
      echo '<input type="submit" name="page" value="回修改畫面">';
      echo '<input type="submit" name="page" value="回主畫面">';
      echo "</p>";
      echo '</form>';
    } else {
      echo '<form action="controller.php" method="post">';

      // 取得欄位數
      echo '<table border=0 >';
      $total_fields = mysqli_num_fields($result);
      while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $i = 0;
        while ( $meta = mysqli_fetch_field($result) ) {
          echo "<tr>";
          echo "<td>" . $meta->name . ":</td>";
          if ($meta->orgname == "cust_no") {
            echo "<td>" . $rows[$i] . "</td>";
          } else {
            echo '<td><input type="text" name="' . $meta->orgname . '" value="' . $rows[$i] . '"></td>';
          }
          echo "</tr>";
          $i++;
        }
      }

      echo "</table>";

      echo "<p>";
      echo '<input type="hidden" name="cust_no" value="' . $_COOKIE["cust_no"] . '">';
      echo '<input type="submit" name="operation_update2" value="修改">';
      echo '<input type="submit" name="page" value="回修改畫面">';
      echo '<input type="submit" name="page" value="回主畫面">';
      echo "</p>";
      echo '</form>';

      mysqli_free_result($result);
    }
  }



  /**
  * close db
  */
  require_once("./include/db_connection.php");
}
?>


<hr>
