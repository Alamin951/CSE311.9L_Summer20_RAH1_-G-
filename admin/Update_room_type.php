<?php

require "connection.php";

 $id=$_GET['id'];
 $type=$_POST['Room'];



    $result= "UPDATE room_num SET t_id='$type' where id='$id'";
    $query=mysqli_query($conn,$result);

    if($query){
	  echo '<p>sucessfully updated</p> ';
    }
    else{
    	echo "update failed";
    }

?>