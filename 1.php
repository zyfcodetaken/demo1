<?php 
require_once 'include.php';
$id=$_SESSION['loginFlag'];
$rows=getAllCartById(2);
print_r($rows);
?>