<?php
// *** Logout the current user.
$logoutGoTo = "login.php";
if (!isset($_SESSION)) {
  session_start();//開啟SESSION
}
$_SESSION['myaccount'] = NULL;//清空SESSION變數
$_SESSION['myaccount'] = NULL;
unset($_SESSION['myaccount']);//取消SESSION變數
unset($_SESSION['myaccount']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");//跳頁
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
</body>
</html>
