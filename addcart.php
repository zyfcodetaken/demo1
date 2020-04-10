<?php
require_once 'include.php';
$userid=$_SESSION['loginFlag'];
$id=$_REQUEST['id'];
if($userid){
	$mes=addcart($id);
}else{
	
	alertMes("请先登陆","login.php");
}
function addcart($id){
	$sql="insert imooc_cart(Pid,Userid) values(".$id.",".$_SESSION['loginFlag'].")";
	mysql_query($sql);
	$res=mysql_insert_id();
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
	if($mes){
	alertMes("添加成功","shop.php");
	}else{
			alertMes("添加失败","shop.php");	
	}
?>
</body>
</html>