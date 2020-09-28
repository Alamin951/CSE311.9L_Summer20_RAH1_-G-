<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      ..Add Room Form..
             <?php
       require "connection.php";
       $query="SELECT MAX(id) as m FROM room";
      $result = mysqli_query($conn,$query);
      $row=mysqli_fetch_assoc($result);
       echo '<br><label>NOTE: '.$row['m'].' is the last room number</label>';
       ?> 
    </div>
  <div class="form">
    <form action="add_room_insert.php" method="post">
       <div class="inputfield">
          <label>New Room Number</label>
          <input type="Number" name="r_id" class="input" placeholder="Enter your New Room Number" required="">
       </div> 
      
       <div class="inputfield">
          <label>Add New Room Type</label>
          <select name="Room">
            <option value="">--Select--</option>
            <option value="Luxury Room">Luxury</option>
            <option value="Deluxe Room">Deluxe</option>
            <option value="Single Room">Single</option>
          </select>
       </div>
     <div class="inputfield">
          <label>Add New Room Bedding</label>
          <select name="bedding">
            <option value="">--Select--</option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
          </select>
       </div> 
      <div class="inputfield">
          <label>New Room Price</label>
          <input type="text" name="p_id" class="input" placeholder="Enter your New Room Price" required="">
       </div>
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required="">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>

      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </form>
    </div>
</div>  
  
</body>
</html>