<h2>資料庫管理系統-查詢</h2>
<hr>

<?php
if ( isset($_COOKIE["M_ID"]) ) {
  // 取得SQL指令
  $sql = "SELECT * ";
  $sql .= " FROM member WHERE M_ID = " . $_COOKIE["M_ID"];
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
      echo "客戶代號: " . $_POST['M_ID'] . '<br>';
      echo '<p style="color: red">!資料不存在!</p>';
    } else {

      echo '<table border=0 style="float:left">';
      while ( $meta = mysqli_fetch_field($result) ) {
        echo "<tr>";
        echo "<td>".$meta->name.":</td>";
        echo "</tr>";
      }
      echo "</table>";


      // 取得欄位數
      echo '<table border=0 style="float:left">';
      $total_fields = mysqli_num_fields($result);
      while ($rows = mysqli_fetch_array($result, MYSQLI_NUM)) {
        for ( $i = 0; $i < $total_fields; $i++ ) {
          echo "<tr>";
          echo "<td>".$rows[$i]."</td>";
          echo "</tr>";
        }
      }
      echo "</table>";
      echo '<div style="clear:both"></div>';

      mysqli_free_result($result);
    }
  }



  /**
   * close db
   */
  require_once("./include/db_connection.php");
}
?>


<p>
  <form action="controller.php" method="post">
    <input type="submit" name="page" value="回查詢畫面">
    <input type="submit" name="page" value="回主畫面">
  </form>
</p>

<hr>
