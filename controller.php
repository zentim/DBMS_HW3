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
  setcookie("M_ID", $_POST["M_ID"]);
  header("Location: page_query_result.php");
}

/**
 * page_add.php
 */
if (isset($_POST["operation_add"])) {
  setcookie("cust_no", $_POST["cust_no"]);
  setcookie("name", $_POST["name"]);
  setcookie("id", $_POST["id"]);
  setcookie("tel_no", $_POST["tel_no"]);
  setcookie("address", $_POST["address"]);
  header("Location: page_add_result.php");
}

/**
 * page_update.php
 */
if (isset($_POST["operation_update"])) {
  setcookie("cust_no", $_POST["cust_no"]);
  header("Location: page_update_result.php");
}

/**
 * page_update_result.php
 */
if (isset($_POST["operation_update2"])) {
  setcookie("cust_no", $_POST["cust_no"]);
  setcookie("name", $_POST["name"]);
  setcookie("id", $_POST["id"]);
  setcookie("tel_no", $_POST["tel_no"]);
  setcookie("address", $_POST["address"]);
  header("Location: page_update_result2.php");
}

/**
 * page_delete.php
 */
if (isset($_POST["operation_delete"])) {
  setcookie("cust_no", $_POST["cust_no"]);
  header("Location: page_delete_result.php");
}

/**
 * page_delete_result.php
 */
if (isset($_POST["operation_delete2"])) {
  setcookie("cust_no", $_POST["cust_no"]);
  setcookie("submit_delete", $_POST["operation_delete2"]);
  header("Location: page_delete_result2.php");
}


?>
