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
  $SQL = "DELETE FROM $TABLE_NAME WHERE $ID = $_COOKIE[$ID]";
  $SQL = stripslashes($SQL);
?>



<h2>資料庫管理系統-刪除</h2>
<hr>

<?php
if ( isset($_COOKIE[$ID]) && isset($_COOKIE["submit_delete"]) ) {
  if ($_COOKIE["submit_delete"] == "是") {



    if ( mysqli_query($link, $SQL) ){ // 執行SQL指令
      echo '<p>!資料刪除成功!</p>';
    } else {
      echo '<p style="color: red">!資料刪除失敗!</p>';
      if ( mysqli_errno($link) != 0 ) {
        echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
        echo "錯誤訊息: ".mysqli_error($link)."<br/>";
      }
    }

  } else {
    echo "!資料沒有刪除!";
  }
}
?>


<p>
  <form action="controller.php" method="post">
    <input type="submit" name="page" value="回刪除畫面">
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
