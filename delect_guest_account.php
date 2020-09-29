<?php

require "connection.php";

$id=$_GET['id'];
$result= "DELETE FROM guest_info WHERE NID='$id'";

$query=mysqli_query($conn,$result);
if($query){
	echo 'sucessfully deleted ';
}
else{
	echo 'delect operation failed ';
}
?>