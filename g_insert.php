<?php
require "connection.php";

if (isset($_POST["userid"])) {

 $nid=$_POST["userid"];
 $mail=$_POST["email"];
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
  $phn=$_POST["phn"];
 $password=$_POST["password"];
 $config_password=$_POST["cpassword"];
 $cryp_pass=crypt($password,"st");
 $cryp_cpass=crypt($config_password,"st");
 $q=$_POST["choice"];
 $a=$_POST["ans"];

  
  if($cryp_pass===$cryp_cpass){
  	   $query_count=mysqli_query($conn,"SELECT * FROM guest_info WHERE NID='$nid'");
       $count=mysqli_num_rows($query_count);
       if($count===0){
   $query=mysqli_query($conn,"INSERT INTO guest_info(NID,first_name,last_name,email,phn_number,pass,conf_pass,choice,c_ans)
	VALUES ('$nid','$fname','$lname','$mail','$phn','$cryp_pass','$cryp_cpass','$q','$a')");
   if($query)
   {
	   header("Location: index.php?Sucessfully_Account_created");
   }else{
	   header("Location: index.php?Sucessfully_failed");
   }
}else{
	echo "Email Already Exist";
}
  }
  else{
  	echo "confirm pass didn't match";
  }
}else{
       echo "404,Sorry for the problem";
     }

?>
