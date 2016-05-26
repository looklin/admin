<?php
    include_once("config/config.php");
    header("Content-Type: text/html; charset=UTF-8");
?>
<?php
$username=$_GET["username"];
$pwd=$_GET["password"];
$sql="update user set password='$pwd' where username='$username'";

$rs=mysql_query($sql);

echo "<script>alert('修改成功！');
	window.location='user.php';
</script>";

?>