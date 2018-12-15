<h2>資料庫管理系統-新增
</h2>
<hr>

<p>
  <form action="controller.php" method="post">
    <table>
      <tr>
        <td>客戶代號:</td><td><input type="text" name="cust_no"></td>
      </tr>
      <tr>
        <td>姓名:</td><td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>統一編號:</td><td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>電話號碼:</td><td><input type="text" name="tel_no"></td>
      </tr>
      <tr>
        <td>地址:</td><td><input type="text" name="address"></td>
      </tr>
    </table>

    <p>
      <input type="submit" name="operation_add" value="新增">
      <input type="reset" value="清除">
      <input type="submit" name="page" value="回主畫面">
    </p>
  </form>
</p>

<hr>
