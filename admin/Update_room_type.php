<?php

require "connection.php";

 $id=$_GET['id'];
 $type=$_POST['Room'];



    $result= "UPDATE pay_status SET p_status ='Done' where id='$id'";
    $query=mysqli_query($conn,$result);

    if($query){
	  echo '<p>sucessfully updated</p> ';
    }
    else{
    	echo "update failed";
    }

?>