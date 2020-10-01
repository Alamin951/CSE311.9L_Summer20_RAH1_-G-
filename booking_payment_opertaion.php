<?php
require "connection.php";

if (isset($_POST["g_id"]) ){

 $gid=$_POST["g_id"];
 
  $rdate=$_POST["r_d"];
 $rid=$_GET['id'];



$query_1 = mysqli_query($conn,"SELECT * FROM guest_info WHERE NID='$gid'");
$count=mysqli_num_rows($query_1);


$query_2 = mysqli_query($conn,"SELECT MAX(id) as m
                               FROM payment
                               WHERE guest_id='$gid' AND Status=2");
$count_2=mysqli_num_rows($query_2);
$row=mysqli_fetch_assoc($query_2);
$mid=$row['m'];



if($count===1){
	$query_3 = mysqli_query($conn,"SELECT *
                                   FROM roombook
                                   WHERE id=(SELECT MAX(id) as m
                                   FROM roombook
                                   WHERE guest_id=$gid) AND rdate='$rdate'");
	$count_3=mysqli_num_rows($query_3);




	if($count_3===1){
    $query_4 = mysqli_query($conn,"UPDATE room_num SET cusid='$gid' WHERE id='$rid'");
    $query_6 = mysqli_query($conn,"UPDATE payment SET Status=1 WHERE id='$mid'");
    if($query_4 and $query_6){
    	echo "Success";
    }

	}else{
		echo "This Id doesn't have any reservation";
	}


}else{
	echo "This Id doesn't have account";
}


}