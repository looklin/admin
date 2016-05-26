<?php
    include_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
</head>
<link rel="stylesheet" type="text/css" href="css/user.css">
<link rel="stylesheet" type="text/css" href="css/icono.min.css">
<body>

<?php
    $sql="select * from user";
    $rs=mysql_query($sql);
    ?>
    <table>
    <tr>
				<th>用户名</th>
				<th>密码</th>
				<th>性别</th>
				<th>生日</th>
				<th>手机</th>
				<th>地址</th>
			</tr>
    	 <?php
  while($rows=mysql_fetch_assoc($rs))
  {
?>

	<tr>
	<form action="fun" method="post" accept-charset="utf-8">
	 <td><input type="text" class="username" name="" value="<?php echo $rows["username"]?>"></td>
    <td><input type="text" name="" value="<?php echo $rows["password"]?>" 
    onchange="fun(this)"></td>
    <td><?php echo $rows["sex"]?></td>
    <td><?php echo $rows["birth"]?></td>
    <td><?php echo $rows["phone"]?></td> 
    <td><?php echo $rows["address"]?></td>
    <!-- <td>inputs</td> -->
	 </form>             
    
   </tr>


  <?php
  }
  ?>
    </table>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>  
<script type="text/javascript">
	function fun(a){
		var vv=$(a).parents().prev().html().toString();
		arr1=vv.split("value=")[1].toString();
		var arr2=arr1.replace(/">/,"");
		var arr=arr2.replace(/"/,"");
		window.location="new.php?username="+arr+"&password="+a.value;
	}
</script>
</body>
</html>