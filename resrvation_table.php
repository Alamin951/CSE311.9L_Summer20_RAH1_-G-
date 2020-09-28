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
  <p class="lead">Type something in the input field to search the table for first names, last names or emails:</p><br> </di>
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
									<th class="cell100 column1">Guest Id</th>
									<th class="cell100 column2">First Name</th>
									<th class="cell100 column3">Last Name</th>
									<th class="cell100 column4">Email</th>
									<th class="cell100 column5">Phn_Number</th>
									<th class="cell100 column6">Bedding</th>
									<th class="cell100 column7">C_In</th>
									<th class="cell100 column8">C_Out</th>
									<th class="cell100 column9">Adult</th>
									<th class="cell100 column10">Children</th>
								</tr>
							</thead>
						</table>
					</div>
					<?php
                    require "connection.php";
                    $result= "SELECT r.guest_id,g.first_name,g.last_name,g.email,g.phn_number,r.TRoom,r.bedding,r.cin,r.cout,r.adult,r.children
FROM roombook AS r, guest_info AS g
WHERE r.guest_id=g.NID";
                    $query= mysqli_query($conn,$result);
                    while($row=mysqli_fetch_assoc($query)){
                    echo '<div class="table100-body js-pscroll">
						<table>
							<tbody id="myTable">
								<tr class="row100 body">
									<td class="cell100 column1">'.$row["guest_id"].'</td>
									<td class="cell100 column2">'.$row["first_name"].'</td>
									<td class="cell100 column3">'.$row["last_name"].'</td>
									<td class="cell100 column4">'.$row["email"].'</td>
									<td class="cell100 column5">'.$row["phn_number"].'</td>
									<td class="cell200 column6">'.$row["TRoom"].'</td>
									<td class="cell100 column7">'.$row["cin"].'</td>
									<td class="cell100 column8">'.$row["cout"].'</td>
									<td class="cell100 column9">'.$row["adult"].'</td>
									<td class="cell100 column10">'.$row["children"].'</td>
									
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