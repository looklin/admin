<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>导航</title>
</head>
<style type="text/css" media="screen">
	body{
		background: url(background/block.png);
	}
	div{
		height: 100px;
		width: 240px;
		background:url(background/5-120915124402.png);
		margin: 30px;
		transition: all 1s;
		border-radius: 10px;
	}
	a{
		display: block;
		width: 240px;
		height: 100px;
		font-size: 24px;
		text-align: center;
		line-height: 100px;
		color: white;
	}
	div:first-child{
	margin-top: 60px;
	transform: translateX(-300px);
	}
	div:nth-child(2){
		transition-delay: 0.2s;
		transform: translateX(-300px);
	}
	div:nth-child(3){
		transition-delay: 0.4s;
		transform: translateX(-300px);
	}
	div:nth-child(4){
		transition-delay: 0.6s;
		transform: translateX(-300px);
	}
	body:hover div{
	transform: translateX(160px);
}
</style>
<body>
	<div id="d1"><a href="user.php" title="">更改用户密码</a>	</div>
	<div id="d2"><a href="order.php" title="">订单查询</a></div>
	<div id="d3"><a href="product.php" title="">图书管理</a></div>
	<div id="d4"><a href="" title="">新功能有待添加</a></div>
</body>
</html>