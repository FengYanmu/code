<?php
	$link = @mysql_connect('localhost','root','');
	if(!$link)
	{
		echo "<h1>MySql Connect Error</h1>";
		exit;
	}
	mysql_query("set names utf8");
	mysql_query("use fengyanmu");
	$res_blog = mysql_query("select * from article");
	$articles = array();
	while($row_article = mysql_fetch_assoc($res_blog))
	{
		$articles[] = $row_article;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yanmu|Blog</title>

    <link rel="stylesheet" href="../css/main.css">
</head>
<body id="box-blogpage">
			<div class="title-blog">ARCHIVES</div>
			<div class="list-blog">
				<ul>
					<?php foreach($articles as $k => $v):?>
					<li><a href=""><?php echo $v['title']?></a></li>
					<?php endforeach;?>
				</ul>
				
		</div>


	<div id="End">
		<a href="../index.html"><img class="IMGchacha" src="../imgs/叉叉.png" alt="叉叉.png" width="25px" height="25px"></a>

		<script src="../js/jQuery-3.2.1.js"></script>
		<script src="../js/jquery.fullPage.js"></script>
		<script src="../js/vue.js"></script>
		<script src="../js/server.js"></script>
		<script src="../js/main.js"></script>
	</div>	
</body>
</html>