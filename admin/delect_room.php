<?php

require "connection.php";

$id=$_GET['id'];
$result= "DELETE FROM room_num WHERE id='$id'";

$query=mysqli_query($conn,$result);
if($query){
	echo 'sucessfully deleted ';
}
else{
	echo 'delect operation failed ';
}
?>