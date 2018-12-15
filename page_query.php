<?php
  require("./include/variable_setting.php");
?>



<?php
/**
 * Page's HTML
 */
$PAGE_QUERY = <<<HTML

<h2>資料庫管理系統-查詢</h2>
<hr>

<p>
  <form action="controller.php" method="post">
    $ID: <input type="text" name="$ID"><br>

    <p>
      <input type="submit" name="operation_query" value="查詢">
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
 * Output HTML
 */
echo $PAGE_QUERY;
?>
