<?php 
	include_once("config/config.php");
	if($_POST["submit"])
	{
		$username=$_POST["username"];
		$pwd=$_POST["pwd"];
		$sql="select * from admin where username='$username' and password='$pwd'";
		$rs=mysql_query($sql);
		if(mysql_num_rows($rs)==0)
		{
		echo "<script>alert('账号或密码错误！');</script>";
			?>
			<?php
		}
		else
		{
			$_SESSION["user"]=$username;
			echo "<script>alert('登录成功');window.location='list.php'</script>";
		?>
		</div>
		<?php
		}
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css" media="screen">
	.main{
		border-radius: 10px;
	}
</style>
<title>登录</title>
<link href="css/reg/reg.css" rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
		<div class="main">
			<h2>欢迎登录</h2>
			<div class="line"><span></span></div>
			
			<form id="form1" name="form1" method="post" action="">
				<input name="username" type="text"class="name" id="username" placeholder="请输入用户名" size="15" />
				<input name="pwd" type="password" id="pwd" size="15" placeholder="请输入密码"/>
				<div class="submit"><input type="submit" value="登录" name="submit" ></div>
				<div class="clear"></div>
				<div class="new">
					<div class="clear"></div>
				</div>
			</form>
		</div>
   		<div class="copy-right">
				<p>Copyright &copy; 2015.Company name All rights reserved.</p>
		</div>
</body>
</html>