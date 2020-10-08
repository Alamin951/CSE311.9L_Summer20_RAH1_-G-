<?php
require "connection.php";

if (isset($_POST["userid"])) {

 $id=$_POST["userid"];
 $mail=$_POST["email"];
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $password=$_POST["password"];
 $config_password=$_POST["cpassword"];
 $cryp_pass=crypt($password,"st");
 $cryp_cpass=crypt($config_password,"st");

  
  if($cryp_pass===$cryp_cpass){
  	   $query_count=mysqli_query($conn,"SELECT * FROM user_info WHERE id='$id'");
       $count=mysqli_num_rows($query_count);
       if($count===0){
   $query=mysqli_query($conn,"INSERT INTO user_info(id,email,pass,conf_pass,first_name,last_name)
	VALUES ('$id','$mail','$cryp_pass','$cryp_cpass','$fname','$lname')");
   if($query)
   {
	   header("Location: index.php?Sucessfully_USER_added");
   }else{
	   header("Location: index.php?Sucessfully_user_addition_failed");
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
