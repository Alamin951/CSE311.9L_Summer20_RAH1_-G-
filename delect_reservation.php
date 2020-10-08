<?php

require "connection.php";

$id=$_GET['id'];
$result= "DELETE FROM roombook WHERE id='$id'";
$result1= "DELETE FROM payment WHERE rsv_id='$id'";

$query=mysqli_query($conn,$result);
$query1=mysqli_query($conn,$result1);
if($query and $query1){
		   header("Location: g_after_log.php?Sucessfully_deleted");

}
else{
	header("Location: g_after_log.php?Delete_operation_failed");
}
?>