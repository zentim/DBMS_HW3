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
  $SQL = "UPDATE $TABLE_NAME";
  $SQL .= " SET ";
  $i = 0;
  foreach ($TABLE_FIELD_NAME_ARRAY as $field_name) {
    if ($field_name != $ID) {
      if ($i != 0) {
        $SQL .= "', ";
      }
      $SQL .= $field_name . " = '";
      $SQL .= $_COOKIE[$field_name];
      $i++;
    }
  }
  $SQL .= "'";
  $SQL .= " WHERE ". $ID . " = " . $_COOKIE[$ID];
  $SQL = stripslashes($SQL);

  echo $SQL;
?>


<h2>資料庫管理系統-修改</h2>
<hr>

<?php
if ( isset($_COOKIE[$ID]) ) {



  /**
  * connect to db
  */
  require_once("./include/db_connection.php");


  if ( mysqli_query($link, $SQL) ){ // 執行SQL指令
    echo '<p>!資料修改成功!</p>';
  } else {
    echo '<p style="color: red">!資料修改失敗!</p>';
    if ( mysqli_errno($link) != 0 ) {
      echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
      echo "錯誤訊息: ".mysqli_error($link)."<br/>";
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
    <input type="submit" name="page" value="回修改畫面">
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
