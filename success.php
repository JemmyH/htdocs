<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
if (isset($_COOKIE["username"]))
echo "欢迎 " . $_COOKIE["username"] . "!<br>";
else
echo "普通访客!<br>";
?>
<?php
	echo("欢迎来到我的网站！<br>");
	echo("随便看");
?>
</body>
</html>