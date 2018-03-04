<?php 
	$link = @mysql_connect('localhost','root','');
	if(!$link)
	{
		echo "<h1>MySql Connect Error</h1>";
		exit;
	}
	mysql_query("set names utf8");
	mysql_query("use fengyanmu");

	$art_title = $_POST['artTitle'];
	$art_content = $_POST['artContent'];
	// echo $art_title;
	// echo $art_content;
	$req = mysql_query("insert into article(title,content) values ('$art_title','$art_content')");
	if($req)
	{
		echo "Yo.成功添加新的文章！";
	}
	else
	{
		echo "emm 好像出了某些问题";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yo.</title>
</head>
<body>
	<a href="edit.php">继续写新的文章</a>
	<a href="../../index.php">首页</a>
</body>
</html>