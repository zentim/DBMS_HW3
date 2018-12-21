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
  $SQL = "SELECT O_ID, orderhistory.M_ID, Account, M_Name, M_tel, M_Count, M_Amount, Date";
  $SQL .= " FROM orderhistory, member WHERE orderhistory.M_ID = member.M_ID AND $ID = $_COOKIE[$ID]";
  $SQL = stripslashes($SQL);
?>


<h2>資料庫管理系統-查詢</h2>
<hr>


<?php
if ( isset($_COOKIE[$ID]) ) {
  // 執行SQL查詢
  $result = @mysqli_query($link, $SQL);
  if ( mysqli_errno($link) != 0 ) {
    echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
    echo "錯誤訊息: ".mysqli_error($link)."<br/>";
  } else {
    // 取得記錄數
    $total_records = mysqli_num_rows($result);
    // echo "記錄總數: $total_records 筆<br/>";

    if ($total_records == 0) {
      echo "$ID: $_COOKIE[$ID] <br>";
      echo '<p style="color: red">!資料不存在!</p>';
    } else {

      echo '<table border=0 style="float:left">';
      while ( $meta = mysqli_fetch_field($result) ) {
        echo "<tr>";
        echo "<td>$meta->name:</td>";
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
}
?>


<p>
  <form action="controller.php" method="post">
    <input type="submit" name="page" value="回查詢畫面">
    <input type="submit" name="page" value="回主畫面">
  </form>
</p>

<hr>


<?php
  /**
   * close db
   */
  require("./include/db_close.php");
?>
