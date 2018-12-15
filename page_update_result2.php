<h2>資料庫管理系統-修改</h2>
<hr>

<?php
// 是否是表單送回
if ( isset($_COOKIE["cust_no"]) ) {
  // 取得SQL指令
  $sql = "UPDATE basic";
  $sql .= " SET name = '" . $_COOKIE["name"] . "', id = '" . $_COOKIE["id"];
  $sql .= "', tel_no ='" . $_COOKIE["tel_no"] . "', address = '" . $_COOKIE["address"]."'";
  $sql .= " WHERE cust_no = " . $_COOKIE["cust_no"];
  $sql = stripslashes($sql);


  /**
  * connect to db
  */
  require_once("./include/db_connection.php");


  if ( mysqli_query($link, $sql) ){ // 執行SQL指令
    echo '<p>!資料修改成功!</p>';
  } else {
    echo '<p style="color: red">!資料修改失敗!</p>';
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
