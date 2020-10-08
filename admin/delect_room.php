<?php

require "connection.php";

$id=$_GET['id'];
$result= "DELETE FROM room_num WHERE id='$id'";

$query=mysqli_query($conn,$result);
if($query){
		  header("Location: after_log.php?Sucessfully_deleted");

}
else{
	  header("Location: after_log.php?delete_operation_failed");
}
?>