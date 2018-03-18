<?php include_once("../link.php");?>
<?php
$error="0";

if(!empty($_POST['account'])){
  if(!empty($_POST['password'])){
$sql = "SELECT count(*) as logincount FROM user where
u_account = '".$_POST['account']."' and u_password = '".$_POST['password']."'";
$re = mysql_query($sql);
$row = mysql_fetch_assoc($re);
$totalrow = mysql_num_rows($re);
  if($row['logincount'] == 1){
    $_SESSION['myaccount'] = $_POST['account'];
  }else{
    $error = 1;
  }
  mysql_free_result($re);
}
}
if(!empty($_SESSION['myaccount'])){
?>
<script>
    document.location.href="item/item_admin.php";
</script>
<?php
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name="f1" id="f1" method="post" action="login.php">
      <table align="center" border="1" cellspacing="0">
          <tr align="center" class="">
            <td>帳號</td>
            <td><input type="text" name="account" id="account"/></td>
          </tr>
          <tr align="center">
            <td>密碼</td>
            <td><input type="password" name="password" id="password"></td>
          </tr>
          <tr align="center">
            <td colspan="2"><input type="submit" value="登入" name="button" id="button"></td>
          </tr>
    </table>
  </form>
  </body>
</html>
