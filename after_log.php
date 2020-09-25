<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

                    <?php
                    require "connection.php";
                    $result= "SELECT * FROM user_info";
                    $result_1= "SELECT * FROM user_info";
                    $query= mysqli_query($conn,$result);
                    $query_1= mysqli_query($conn,$result_1);
                    $id=$_POST['userid'];
                    $pass=$_POST['password'];
                    $cyt_pass=crypt($pass,"st");
                    $lg_pass= substr($cyt_pass,0,10);
                    $log_reslt="";

                    while($row=mysqli_fetch_assoc($query))
                    {
                    	if($id===$row["id"] and $lg_pass===$row["pass"]){
                    	$log_reslt="passed";
                    	break;
                    }
                    }

                    if($log_reslt===""){
                    echo "Password Wrong, didn't match.<br>";
                    echo "
                    <form action='login.php' method='post'>
    <input type='submit' name='insert' value='Back' class='btn btn-primary'>
</form>";
                    
                }
                else{
                echo '	<div class="container">
	<h2 class="display-3">Reservation Table</h2>
	<hr>
  <p class="lead">Type something in the input field to search the table</p><br> </di>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">username</th>
									<th class="cell100 column2">Email</th>
									<th class="cell100 column3">pass</th>
									<th class="cell100 column4">c_pass</th>

								</tr>
							</thead>
						</table>
					</div>';

					                    while($row=mysqli_fetch_assoc($query_1))
                    {
					echo '<div class="table100-body js-pscroll">
						<table>
							<tbody id="myTable">
								<tr class="row100 body">
									<td class="cell100 column1">'.$row["id"].'</td>
									<td class="cell100 column2">'.$row["email"].'</td>
									<td class="cell100 column3">'.$row["pass"].'</td>
									<td class="cell100 column4">'.$row["conf_pass"].'</td>
									
								</tr>

								
							</tbody>
						</table>
					</div>';
				}
				
            }

                    ?>


				</div>
				</div>

			</div>

		</div>
<form action='login.php' method='post'>
    <input type='submit' name='insert' value='Back' class='btn btn-primary'>
</form>


<!--===============================================================================================-->	
	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>