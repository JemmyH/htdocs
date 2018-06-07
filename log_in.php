<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>无标题文档</title>
</head>

<body>
	<?php
	session_start();
		require("connect_to_mysql.php");
		$name = $_POST['username'];
		$password = $_POST['passwd'];
		$result = mysqli_query($conn,"SELECT * FROM phptest WHERE username = '$name'");
	    echo("執行成功");
		while($row = mysqli_fetch_array($result)){
			if($row['passwd'] == $password){
				$_SESSION['username'] = $name;
				$_SESSION['loged'] = "true";
				echo"<script>alert('登录成功');window.location.href='features.php';</script>";
			}else{
				echo("登录失败！<br>");
				echo"<script>alert('登录失败');window.location.href='index.php';</script>";
			}
		}
	
	
		
	 ?>
</body>

</html>