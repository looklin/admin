<?php
    include_once("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>管理商品</title>
</head>
<style type="text/css" media="screen">
    *{
        margin:0;
        padding: 0;
    }
    body{
        background: url(background/纯色.png);
    }
    img{
        height: 80px;
        width: 60px;
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
  input{
    border: none;
    background: transparent;
  }
  form{
    /*margin:50px;*/
    position: fixed;
    background: #abcdef;
    /*margin: 50px;*/
    margin-left: 300px;
    top: 10px;
  }
  form input{
    border:1px solid gray;
  }
</style>
<body>

<?php
    if ($_POST["submit"])
    {
        $pid=$_POST["pid"];
        $price=$_POST["price"];
        $tu=$_POST["tu"];
        $bookname=$_POST["bookname"];
        // $sql="select * from book1";
        // $rs=mysql_query($sql);
        $sql="insert into book1(pid,price,tu,bookname) values ('$pid','$price','$tu','$bookname')";
        mysql_query($sql);
        echo "<script>alert('插入成功！');</script>";
        exit();
    }
?>

<form id="frm" name="frm" method="post" action="">
    <input type="text" name="pid" value="" placeholder="请输入图书编号">
    <input type="text" name="price" value="" placeholder="请输入图书价格">
    <input type="text" name="tu" value="" placeholder="请输入引用图书路径">
    <input type="text" name="bookname" value="" placeholder="请输入图书名">
    <input type="submit" name="submit" value="添加图书">
</form>
    <?php
        $sql="select * from book1";
        $rs=mysql_query($sql);
    ?>
    <table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <th>图书编号</th>
        <th>图书价格</th>
        <th>图书封面</th>
        <th>图书名</th>
      </tr>
    <?php
        while($rows=mysql_fetch_assoc($rs))
        {
    ?>
  <tr>
    <td><input type="text" name="" value="<?php echo $rows["pid"]?>"></td>
    <td>￥<input type="number" name="" value="<?php echo $rows["price"]?>" onchange="fun(this)"></td>
    <td><img src="<?php echo $rows["tu"]?>" alt=""></td>
    <td><?php echo $rows["bookname"]?></td>          
   </tr>
  <?php
  }
  ?>
    </table>

</body>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>  
<script type="text/javascript">
    function fun(a){
        var vv=$(a).parents().prev().html().toString();
        arr1=vv.split("value=")[1].toString();
        var arr2=arr1.replace(/">/,"");
        var arr=arr2.replace(/"/,"");
        // alert(arr+" "+a.value);
        window.location="newprice.php?pid="+arr+"&price="+a.value;
    }
</script>
</html>