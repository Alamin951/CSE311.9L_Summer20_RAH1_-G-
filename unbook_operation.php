    <?php

$rid=$_GET['id'];
$query_4 = mysqli_query($conn,"UPDATE room_num SET cusid=NULL WHERE id='$rid'");

    if($query_4 and $query_6){
      echo "Success";
    }
?>