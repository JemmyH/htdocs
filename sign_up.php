<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>注册</title>
</head>

<body>
	<?php
	require( "connect_to_mysql.php" );
	$name = $_POST[ 'username' ];
	$passwd = $_POST[ 'passwd' ];
	echo($name);
	if ( $name == "" || $passwd == "" ) {
		echo "<script>alert('信息不能为空！重新填写');window.location.href='index.php'</script>";
	} else {
		echo("开始写入数据库");
		$sql = "INSERT INTO phptest values('$name','$passwd')";
		if ( mysqli_query( $conn, $sql ) ) {
			echo( "<script>alert('注册成功！去登陆！');window.location.href='index.php';</script>" );
		} else {
			echo( "<script>alert('注册失败');window.location.href='index.php';</script>" );
		}
	}
	?>
</body>

</html>