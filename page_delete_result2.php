<h2>資料庫管理系統-刪除</h2>
<hr>

<?php
if ( isset($_COOKIE["cust_no"]) && isset($_COOKIE["submit_delete"]) ) {
  if ($_COOKIE["submit_delete"] == "是") {
    // 取得SQL指令
    $sql = "DELETE FROM basic WHERE cust_no = " . $_COOKIE["cust_no"];
    $sql = stripslashes($sql);



    /**
    * connect to db
    */
    require_once("./include/db_connection.php");


    if ( mysqli_query($link, $sql) ){ // 執行SQL指令
      echo '<p>!資料刪除成功!</p>';
    } else {
      echo '<p style="color: red">!資料刪除失敗!</p>';
    }

    /**
    * close db
    */
    require_once("./include/db_connection.php");
  } else {
    echo "!資料沒有刪除!";
  }
}
?>


<p>
  <form action="controller.php" method="post">
    <input type="submit" name="page" value="回刪除畫面">
    <input type="submit" name="page" value="回主畫面">
  </form>
</p>

<hr>
