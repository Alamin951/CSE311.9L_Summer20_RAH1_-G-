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
	<h2 class="display-3">Reservation list</h2>
	<hr>
  <p class="lead">Search The reservation date:</p><br> </di>
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
									<th class="cell100 column1">Room</th>
									<th class="cell100 column2">Bedding</th>
									<th class="cell100 column3">Reservation date</th>
									<th class="cell100 column4">Cheak in </th>
									<th class="cell100 column5">Cheak out </th>
									<th class="cell100 column6">Adult</th>
									<th class="cell100 column7">Child</th>
								
									

								</tr>
							</thead>
						</table>
					</div>
					<?php
                    require "connection.php";
                    $id=$_GET['g_id'];
                    $result= "SELECT r.id,r.Room,r.bedding,r.rdate,r.cin,r.cout,r.adult,r.children 
                              FROM roombook AS r, guest_info AS g
                              WHERE g.NID=r.guest_id AND r.guest_id='$id'";
                    $query= mysqli_query($conn,$result);
                    while($row=mysqli_fetch_assoc($query)){
                    echo '<div class="table100-body js-pscroll">
						<table>
							<tbody id="myTable">
								<tr class="row100 body">
									<td class="cell100 column1">'.$row["Room"].'</td>
									<td class="cell100 column2">'.$row["bedding"].'</td>	
									<td class="cell100 column3">'.$row["rdate"].'</td>
									<td class="cell100 column4">'.$row["cin"].'</td>
									<td class="cell100 column5">'.$row["cout"].'</td>
									<td class="cell100 column6">'.$row["adult"].'</td>
									<td class="cell100 column7">'.$row["children"].'</td>
							
								</tr>

								
							</tbody>
						</table>
					</div>';
                }

					?>



									</div>
									<div>
										<form action="g_after_log.php" method="post">
      									<button action="g_after_log.php">Back</button>
    									</form>
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