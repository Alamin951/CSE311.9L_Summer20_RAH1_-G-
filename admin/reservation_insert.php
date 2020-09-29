<?php
require "connection.php";

if (isset($_POST["g_id"])) {

 $room=$_POST["Room"];
 $gid=$_POST["g_id"];
 $rdate=$_POST["rdate"];
 $cindate=$_POST["c_in"];
 $coutdate=$_POST["c_out"];
 $adult=$_POST["adult"];
 $children=$_POST["children"];

 $query = mysqli_query($conn,"INSERT INTO roombook(guest_id,rdate,cin,cout,adult,children,room_type_id)
         VALUES ('$gid','$rdate','$cindate','$coutdate','$adult','$children','$room')");

 if($query)
   {
	   echo "successfully inserted";
   }else{
	   echo "Insertion Failed";
   }
}