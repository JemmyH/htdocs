<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>welcome</title>
</head>

<body>
<?php
if (isset($_COOKIE["username"]))
echo "欢迎 " . $_COOKIE["username"] . "!<br>";
else
echo "普通访客!<br>";
?>
<form method="post" action="log_in.php">
	姓名：<input type="text" name="username"><br>
	密码：<input type="password" name="passwd"><br>
	<input type="submit" value="提交">
	</form>
</body>
</html>