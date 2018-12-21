<?php

// 開啟MySQL的資料庫連接
$link = @mysqli_connect("localhost", "root", "")
    or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "dbms_hw3");

//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8');

?>
