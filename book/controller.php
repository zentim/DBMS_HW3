<?php
  require_once("./include/variable_setting.php");
?>



<?php
if (isset($_POST["page"])) {
  $page = $_POST["page"];

  if ($page == "回主畫面") {
    header("Location: index.php");
  }

  /**
   *
   * index.php
   *
   */
  if ($page == "查詢" || $page == "回查詢畫面") {
    header("Location: page_query.php");
  }
  if ($page == "新增" || $page == "回新增畫面") {
    header("Location: page_add.php");
  }
  if ($page == "修改" || $page == "回修改畫面") {
    header("Location: page_update.php");
  }
  if ($page == "刪除" || $page == "回刪除畫面") {
    header("Location: page_delete.php");
  }

}

/**
 * page_query.php
 */
if (isset($_POST["operation_query"])) {
  setcookie($ID, $_POST[$ID]);
  header("Location: page_query_result.php");
}

/**
 * page_add.php
 */
if (isset($_POST["operation_add"])) {
  foreach ($TABLE_FIELD_NAME_ARRAY as $field_name) {
    setcookie($field_name, $_POST[$field_name]);
  }

  header("Location: page_add_result.php");
}

/**
 * page_update.php
 */
if (isset($_POST["operation_update"])) {
  setcookie($ID, $_POST[$ID]);
  header("Location: page_update_result.php");
}

/**
 * page_update_result.php
 */
if (isset($_POST["operation_update2"])) {
  foreach ($TABLE_FIELD_NAME_ARRAY as $field_name) {
    setcookie($field_name, $_POST[$field_name]);
  }
  header("Location: page_update_result2.php");
}

/**
 * page_delete.php
 */
if (isset($_POST["operation_delete"])) {
  setcookie($ID, $_POST[$ID]);
  header("Location: page_delete_result.php");
}

/**
 * page_delete_result.php
 */
if (isset($_POST["operation_delete2"])) {
  setcookie($ID, $_POST[$ID]);
  setcookie("submit_delete", $_POST["operation_delete2"]);
  header("Location: page_delete_result2.php");
}


?>


