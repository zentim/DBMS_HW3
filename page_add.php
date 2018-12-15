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
  $SQL = "SELECT * ";
  $SQL .= " FROM $TABLE_NAME";
  $SQL = stripslashes($SQL);
?>

<?php
  /**
   *
   */
  $HTML_TABLE = "";

  // 執行SQL查詢
  $result = @mysqli_query($link, $SQL);
  if ( mysqli_errno($link) != 0 ) {
    echo "錯誤代碼: ".mysqli_errno($link)."<br/>";
    echo "錯誤訊息: ".mysqli_error($link)."<br/>";
  } else {
    $HTML_TABLE .= '<table>';
    while ( $meta = mysqli_fetch_field($result) ) {
      $HTML_TABLE .= "<tr>";
      $HTML_TABLE .= "<td>$meta->name:</td>";
      $HTML_TABLE .= '<td><input type="text" name="' . $meta->name . '"></td>';
      $HTML_TABLE .= "</tr>";
    }
    $HTML_TABLE .= "</table>";

    mysqli_free_result($result);
  }

?>


<?php
/**
 * Page's HTML
 */
$PAGE_ADD = <<<HTML

<h2>資料庫管理系統-新增</h2>
<hr>

<p>
  <form action="controller.php" method="post">

    $HTML_TABLE

    <p>
      <input type="submit" name="operation_add" value="新增">
      <input type="reset" value="清除">
      <input type="submit" name="page" value="回主畫面">
    </p>
  </form>
</p>

<hr>

HTML;
?>



<?php
  /**
   * close db
   */
  require("./include/db_close.php");
?>

<?php
/**
 * Output HTML
 */
echo $PAGE_ADD;
?>
