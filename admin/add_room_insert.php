<?php
require "connection.php";

if (isset($_POST["r_id"])) {


$rid=$_POST["r_id"];
$tid=$_POST["Room"]; 
$bid=$_POST["bedding"]; 
$pid=$_POST["p_id"];


 $query_count = mysqli_query($conn,"SELECT * FROM room where id='$rid'");
 $count=mysqli_num_rows($query_count);
 if($count===0){

 	 $query = mysqli_query($conn,"INSERT INTO room(id,type,bedding,price,cusid)
         VALUES ('$rid','$tid','$bid','$pid',NULL)");

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