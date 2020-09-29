<?php
require "connection.php";

if (isset($_POST["g_id"])) {

 $gid=$_POST["g_id"];
 $pdate=$_POST["pdate"];
 $nroom=$_POST["n_r"];
 $rid=$_GET['id'];



$query_1 = mysqli_query($conn,"SELECT * FROM guest_info WHERE NID='$gid'");
$count=mysqli_num_rows($query_1);


$query_2 = mysqli_query($conn,"SELECT t_id FROM room_num WHERE id='$rid'");
$row=mysqli_fetch_assoc($query_2);
$tid=$row['t_id'];


$query_3 = mysqli_query($conn,"SELECT price FROM room WHERE id='$tid'");
$row_1=mysqli_fetch_assoc($query_3);
$price=$row_1['price'];


if($count===1){
	$query_4 = mysqli_query($conn,"SELECT COUNT(*) as c FROM payment WHERE guest_id='$gid' and payment_day='$pdate'");
	$row_5=mysqli_fetch_assoc($query_4);
	$cnt=$row_5['c'];



	if($cnt<>0){
    $query_5 = mysqli_query($conn,"UPDATE room_num SET cusid='$gid' WHERE id='$rid'");
    $query_6 = mysqli_query($conn,"SELECT Amount FROM payment WHERE guest_id='$gid' and payment_day='$pdate'");
	$row_3=mysqli_fetch_assoc($query_6);
	
	$upayment=$row_3['Amount']+$price;

    $query_7 = mysqli_query($conn,"UPDATE payment SET Amount='$upayment' WHERE guest_id='$gid' and payment_day='$pdate' ");
	}
	else{
		 $query_8 = mysqli_query($conn,"INSERT INTO payment(guest_id,nroom,payment_day,room_mrp,Amount)
         VALUES ('$gid','$nroom','$pdate',NUll,'$price') ");
		 if($query_8){
		 	echo "success";
		 }else{
		 	echo "failed";
		 }
	}

}else{
	echo "account doesn't exist guest list at first create account";
}


}