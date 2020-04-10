<?php
require_once 'include.php';
$userid=$_SESSION['loginFlag'];
$id=$_REQUEST['id'];
if($userid){
	$mes=delcart($id);
}else{
	
	alertMes("请先登陆","login.php");
}
function delcart($id){
	$sql="delete from imooc_cart where id='$id'";
	mysql_query($sql);
	$sql="select Pid from imooc_cart where id='$id'";
	$res=mysql_query($sql);
	return $res;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
	if(!$res){
	alertMes("删除成功","shop-cart.php");
	}else{
			alertMes("删除失败","shop-cart.php");	
	}
?>
</body>
</html>