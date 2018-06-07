<?php
header("Content-type:text/html;charset=utf-8"); 
session_start();
$about_user = $_SESSION['username'];
$user = htmlspecialchars(trim($_POST['user']));
$txt = htmlspecialchars(trim($_POST['txt']));
$time = date("Y-m-d H:i:s");
if(empty($user)){
   echo "昵称不能为空！";
   exit;
}
if(empty($txt)){
   echo "评论内容不能为空！";
   exit;
}
require("connect_to_mysql.php");
mysqli_set_charset($conn,"utf8");
$sql="insert into comment(user,content,lastdate,about_user) values('$user','$txt','$time','$about_user')";
$que=mysqli_query($conn,$sql);
if($que)  
	echo "1";
?>