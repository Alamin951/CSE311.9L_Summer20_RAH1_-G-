<?php
require "connection.php";

if (isset($_POST["add"])) {

 $room=$_POST["Room"];
 $bed=$_POST["bedding"];
 $gid=$_POST["g_id"];
 $rdate=$_POST["rdate"];
 $cindate=$_POST["c_in"];
 $coutdate=$_POST["c_out"];
 $adult=$_POST["adult"];
 $children=$_POST["children"];

 if (empty($room)|| empty($bed) || empty($gid) || empty($rdate) || empty($cindate)|| empty($coutdate) || empty($adult)) {
 	header("Location: reservation.php?empty");
  }

 else{
 	$query_count=mysqli_query($conn,"SELECT * FROM guest_info WHERE NID='$gid'");
    $count=mysqli_num_rows($query_count);
    if($count!=0)
       {
       	$query = mysqli_query($conn,"INSERT INTO roombook(guest_id,TRoom,bedding,rdate,cin,cout,adult,children)
         VALUES ('$gid','$room','$bed','$rdate','$cindate','$coutdate','$adult','$children')");
       	if($query)
   {
	   header("Location: ../index.php?Sucessfully_insertated");
   }else{
	   header("Location: reservation.php?insertion_failed");
   }
       }

     else{
     	header("Location: reservation.php?invalid_username");
     }

       

}

}