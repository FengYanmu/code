 <?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	$link = @mysql_connect('localhost','root','');
	if(!$link)
	{
		echo "<h1>MySql Connect Error</h1>";
		exit;
	}
	mysql_query("set names uft8");
	mysql_query("use fengyanmu");

	$res_user = mysql_query("select * from users");
	while($row_user = mysql_fetch_assoc($res_user))
	{
		if($username != $row_user['name'] || $password != $row_user['pass'])
		{
			echo "您的账号或密码登陆错误";
			exit;
		}

	}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章编辑</title>
	<link rel="stylesheet" href="../../css/main.css">
</head>
<body>
	<div id="box-editpage">
		<form action="editing.php" method="post" class="form-edit">
			<input type="text" name="artTitle" placeholder="Plase input title"><br/>
			<textarea name="artContent" placeholder="Plase input content"></textarea><br>
			<input type="submit" value="确定">
		</form>
	</div>

	<div id="End">
		<script src="../../js/jQuery-3.2.1.js"></script>
		<script src="../../js/vue.js"></script>
		<script src="../../js/main.js"></script>
	</div>
</body>
</html>