<h2>資料庫管理系統-新增</h2>
<hr>

<?php
if ( isset($_COOKIE["cust_no"]) ) {
   // 取得SQL指令
   $sql = "INSERT INTO basic(cust_no, name, id, tel_no, address)";
   $sql .= " VALUES  (" . $_COOKIE["cust_no"] . ", '" . $_COOKIE["name"] . "', '";
   $sql .= $_COOKIE["id"] . "', '" . $_COOKIE["tel_no"] . "', '" . $_COOKIE["address"] . "')";
   $sql = stripslashes($sql);



  /**
   * connect to db
   */
  require_once("./include/db_connection.php");



  if ( mysqli_query($link, $sql) ){ // 執行SQL指令
     echo '<p>!資料新增成功!</p>';
  } else {
     echo '<p style="color: red">!資料新增失敗!</p>';
  }



  /**
   * close db
   */
  require_once("./include/db_connection.php");
}
?>


<p>
  <form action="controller.php" method="post">
    <input type="submit" name="page" value="回新增畫面">
    <input type="submit" name="page" value="回主畫面">
  </form>
</p>

<hr>
