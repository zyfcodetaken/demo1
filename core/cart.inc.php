<?php
/**
 * 从数据库中提取购物车信息
 */
function getAllCartById($id){
	$sql="select imooc_cart.id,imooc_album.albumPath,imooc_pro.pName,imooc_pro.mPrice from imooc_album,imooc_cart,imooc_pro where imooc_cart.Pid=imooc_pro.id and imooc_album.pid=imooc_pro.id and  imooc_cart.Userid={$id}";
	$rows=fetchAll($sql);
	return $rows;
}
?>