<?php
require "connection.php";

if (isset($_POST["r_id"])) {


$rid=$_POST["r_id"];
$tid=$_POST["Room"]; 



 $query_count = mysqli_query($conn,"SELECT * FROM room_num where id='$rid'");
 $count=mysqli_num_rows($query_count);
 if($count===0){

 	 $query = mysqli_query($conn,"INSERT INTO room_num(id,t_id,cusid)
         VALUES ('$rid','$tid',NULL)");

 if($query)
   {
	   echo "successfully inserted";
   }else{
	   echo "Insertion Failed";
   }
 }else{
 	echo "Room Number Already Exist";
 }


}