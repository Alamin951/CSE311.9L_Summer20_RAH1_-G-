<?php
require "connection.php";
 
if (isset($_POST["g_id"])) {

 $nid=$_POST["g_id"];
 $mail=$_POST["email"];
 $phn=$_POST["phn"];
 $password=$_POST["pass"];
 $config_password=$_POST["c_p"];
 $cryp_pass=crypt($password,"st");
 $cryp_cpass=crypt($config_password,"st");
 $c=$_POST["choice"];
 $a=$_POST["ans"];

       $query_count=mysqli_query($conn,"SELECT * FROM guest_info WHERE NID='$nid'");
       $count=mysqli_num_rows($query_count);
       $row=mysqli_fetch_assoc($query_count);
       if($count===1){
        if($mail===$row['email']){
          if($phn===$row['phn_number']){
            if($c===$row['choice']){
              if($a===$row['c_ans']){
                      if($cryp_pass===$cryp_cpass){
                        $query4=mysqli_query($conn,"UPDATE guest_info SET pass='$cryp_pass',conf_pass='$cryp_cpass' WHERE NID='$nid'");
                        if($query4){
                          echo "success";
                        }else{
                          echo "not";
                        }


                      }else{
                        echo "confirm pass doesn't match";
                      }
              }else{
                echo "answer doesn't match";
              }

            }else{
              echo "question doesn't match";
            }

          }else{
            echo "number diesn't match";
          }

        }else{
          echo "mail doesn't match";
        }

  
}else{
  echo "id doesn't Exist";
}
  
  
}

?>
