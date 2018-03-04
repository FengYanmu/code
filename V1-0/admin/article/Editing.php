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
	mysql_query("insert into article(title,content) values ('$art_title','$art_content')");
?>