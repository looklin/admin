<?php
    include_once("config/config.php");
    header("Content-Type: text/html; charset=UTF-8");
?>
<?php
$pid=$_GET["pid"];
$price=$_GET["price"];
$sql="update book1 set price='$price' where pid='$pid'";

$rs=mysql_query($sql);

echo "<script>alert('修改成功！');
	window.location='product.php';
</script>";

?>
