<?php
  /**
   * connect to db
   */
  require("./include/db_connection.php");
?>

<?php
  /**
   * Setting variable
   */
  $TABLE_NAME = "publisher";  // (1)
  $ID = "P_ID";  // (2)

  /**
   * Get table field name
   */
  $TABLE_FIELD_NAME_ARRAY = array();  // (3)

  // 取得SQL指令
  $SQL = "SELECT * ";
  $SQL .= " FROM $TABLE_NAME";
  $SQL = stripslashes($SQL);

  // 執行SQL查詢
  $result = @mysqli_query($link, $SQL);
  if ( mysqli_errno($link) != 0 ) {
    echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
    echo "錯誤訊息: ".mysqli_error($link)."<br/>";
  } else {
    $i = 0;
    while ( $meta = mysqli_fetch_field($result) ) {
      $TABLE_FIELD_NAME_ARRAY[$i] = $meta->name;
      $i++;
    }
    mysqli_free_result($result);
  }
?>

<?php
  /**
   * close db
   */
  require("./include/db_close.php");
?>
