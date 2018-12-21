<?php
  require("./include/variable_setting.php");
?>



<?php
/**
 * Page's HTML
 */
$PAGE_HTML = <<<HTML

<h2>資料庫管理系統-刪除</h2>
<hr>

<p>
  <form action="controller.php" method="post">
    $ID: <input type="text" name="$ID" required><br>

    <p>
      <input type="submit" name="operation_delete" value="查詢">
      <input type="reset" value="清除">
    </p>
  </form>
</p>

<hr>

<form action="controller.php" method="post">
  <input type="submit" name="page" value="回主畫面">
</form>

HTML;
?>



<?php
/**
 * Output HTML
 */
echo $PAGE_HTML;
?>
