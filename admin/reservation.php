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
      Reservation Form
    </div>
  <div class="form">
    <form action="reservation_insert.php" method="post">
       <div class="inputfield">
          <label>Room</label>
          <select name="Room">
            <option value="">--Select--</option>
            <option value="Luxury">Luxury</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Single Room">Single Room</option>
          </select>
       </div>
     <div class="inputfield">
          <label>Number Of Bedding</label>
          <select name="bedding">
            <option value="">--Select--</option>
            <option value="Single">Single</option>
            <option value="Double">Double</option>
            <option value="Triple">Triple</option>
            <option value="Quad">Quad</option>
          </select>
       </div> 
       <div class="inputfield">
          <label>Guest ID</label>
          <input type="text" name="g_id" class="input" placeholder="Enter your Guest ID">
       </div> 
      
      <div class="inputfield">
          <label>Reservation Date</label>
       <input type="datetime-local" class="input" name="rdate">
       </div>
       <div class="inputfield">
          <label>Check In Date</label>
          <input type="datetime-local" name="c_in" class="input">
       </div>  
      <div class="inputfield">
          <label>Check Out Date</label>
          <input type="datetime-local" name="c_out" class="input">
       </div>
     
      <div class="inputfield">
          <label>Adult</label>
          <input type="text" name="adult" class="input" placeholder="Number of Adult">
       </div>
      <div class="inputfield">
          <label>Children</label>
          <input type="text" name="children" class="input" placeholder="Number of Children">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
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