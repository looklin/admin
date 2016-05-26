<?php
    include_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>查看订单</title>
</head>
<style type="text/css" media="screen">
  body{
  background:url(background/纯色.png);
}
img{
  width: 40px;
  height: 60px;
}
table{
  margin: 60px auto; 
  border:1px solid gray;
}
  table tr td{
    width: 200px;
    height: 60px;
    text-align: center;
    vertical-align: middle;
  }
  table tr:nth-child(odd){
    background: #abcdef;
    /*border-bottom: 2px solid blue;*/
  }
  table tr:nth-child(even){
    /*background: lime;*/
  }
</style>
<body>

<?php
    $sql="select sho.pid,sho.price,sho.tu,sho.bookname,ode.orderid,ode.amount,ods.username,ods.time,`use`.address,`use`.sex,`use`.phone
FROM book1 sho,orderdetail ode,orders ods,`user` `use` 
where sho.pid=ode.pid and ode.orderid=ods.orderid and ods.username=`use`.username";
    $rs=mysql_query($sql);
    ?>
    <table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>订单号</th>
        <th>用户名</th>
        <th>用户性别</th>
        <th>图书名</th>
        <th>图书封面</th>
        <th>图书价格</th>
        <th>数量</th>
        <th>总价</th>
        <th>订单时间</th>
        <th>送达地址</th>
        <th>联系方式</th>
      </tr>
       <?php
  while($rows=mysql_fetch_assoc($rs))
  {
?>

  <tr>
    <td><?php echo $rows["orderid"]?></td>
    <td><?php echo $rows["username"]?></td>
    <td><?php echo $rows["sex"]?></td>
    <td><?php echo $rows["bookname"]?></td> 
    <td><img src="<?php echo $rows["tu"]?>" alt=""></td>
    <td><?php echo $rows["price"]?></td>
    <td><?php echo $rows["amount"]?></td>
    <td><?php echo ($rows["price"]*$rows["amount"])?></td>
    <td><?php echo $rows["time"]?></td>
    <td><?php echo $rows["address"]?></td>
    <td><?php echo $rows["phone"]?></td>
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