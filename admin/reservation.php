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
          <label>Room Type</label>
          <select name="Room">
            <option value="">--Select--</option>
            <option value=1>Luxury_Single</option>
            <option value=2>Luxury_Double</option>
            <option value=3>Luxury_Triple</option>
            <option value=4>Luxury_Quad</option>
            <option value=5>Deluxe_Single</option>
            <option value=6>Deluxe_Double</option>
            <option value=7>Deluxe_Triple</option>
            <option value=8>Deluxe_Quad</option>
            <option value=9>Single_Single</option>
            <option value=10>Single_Double</option>
            <option value=11>Single_Triple</option>
            <option value=12>Single_Quad</option>

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