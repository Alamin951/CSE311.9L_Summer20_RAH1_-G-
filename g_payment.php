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
	<div class="container">
	<h2 class="display-3">Filterable Table</h2>
	<hr>
  <p class="lead">Enter The Room Number To See the Details:</p><br> </di>
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
									<th class="cell100 column1">Type</th>
									<th class="cell100 column2">Bedding</th>
									<th class="cell100 column3">Reservation date</th>
									<th class="cell100 column4">Number of days </th>
									<th class="cell100 column5">Amount </th>
									<th class="cell100 column6">Status</th>
									

								</tr>
							</thead>
						</table>
					</div>
					<?php
                    require "connection.php";
                    $id=$_GET['g_id'];
                    $result= "SELECT r.Room,r.bedding,r.rdate,p.num_of_day,p.Amount, ps.p_ststus  
                              FROM roombook AS r , paymentHide AS p , pay_status AS ps
                              WHERE r.guest_id='$id' AND (r.guest_id =p.guest_id OR p.id = ps.id) ";
                    $query= mysqli_query($conn,$result);
                    while($row=mysqli_fetch_assoc($query)){
                    echo '<div class="table100-body js-pscroll">
						<table>
							<tbody id="myTable">
								<tr class="row100 body">
									<td class="cell100 column1">'.$row["Room"].'</td>
									<td class="cell100 column2">'.$row["bedding"].'</td>
									<td class="cell100 column3">'.$row["rdate"].'</td>	
									<td class="cell100 column4">'.$row["num_of_day"].'</td>
									<td class="cell100 column5">'.$row["Amount"].'</td>
									<td class="cell100 column6">'.$row["p_ststus"].'</td>
									<td class="cell100 column7"><a href=pay_now.php?id='.$row['guest_id'].'>Pay</a></td>
								</tr>

								
							</tbody>
						</table>
					</div>';
                }

					?>



									</div>
				</div>
			</div>
		</div>



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