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
  $SQL = "INSERT INTO $TABLE_NAME";
  $SQL .= " VALUES  (";
  $i = 0;
  foreach ($TABLE_FIELD_NAME_ARRAY as $field_name) {
    if ($i != 0) {
      $SQL .= ", '";
    }
    $SQL .= $_COOKIE[$field_name];
    if ($i != 0) {
      $SQL .= "'";
    }
    $i++;
  }
  $SQL .= ")";
  $SQL = stripslashes($SQL);
?>




<h2>資料庫管理系統-新增</h2>
<hr>

<?php
if ( isset($_COOKIE[$ID]) ) {

  if ( mysqli_query($link, $SQL) ){ // 執行SQL指令
    echo '<p>!資料新增成功!</p>';
  } else {
    echo '<p style="color: red">!資料新增失敗!</p>';
    if ( mysqli_errno($link) != 0 ) {
      echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
      echo "錯誤訊息: ".mysqli_error($link)."<br/>";
    }
  }

}
?>


<p>
  <form action="controller.php" method="post">
    <input type="submit" name="page" value="回新增畫面">
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
