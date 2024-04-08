

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advanced Airline Reservation</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
  <div style="max-width: 600px; margin: 50px auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; margin-bottom: 30px; color: #007bff;">Advanced Airline Reservation</h1>
    <form action="airdata.php" method="post" style="display: flex; flex-direction: column;">
      <div style="margin-bottom: 20px;">
        <label for="from" style="font-weight: bold;">From:</label>
        <input type="text" id="from" name="from" placeholder="Enter departure city" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 20px;">
        <label for="to" style="font-weight: bold;">To:</label>
        <input type="text" id="to" name="to" placeholder="Enter destination city" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
      </div>

      <div style="margin-bottom: 20px;">
        <label for="to" style="font-weight: bold;">Mobile No:</label>
        <input type="text" id="to" name="Number" placeholder="Enter Mobile No" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
      </div>

      <div style="margin-bottom: 20px;">
        <label for="departure-date" style="font-weight: bold;">Departure Date:</label>
        <input type="date" id="departure-date" name="departure-date" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 20px;">
        <label for="return-date" style="font-weight: bold;">Return Date:</label>
        <input type="date" id="return-date" name="return-date" style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
      </div>
      <div style="margin-bottom: 20px;">
        <label for="class" style="font-weight: bold;">Class:</label>
        <select id="class" name="class" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
          <option value="economy">Economy</option>
          <option value="business">Business</option>
          <option value="first">First Class</option>
        </select>
      </div>
      <div style="margin-bottom: 20px;">
        <h2 style="margin-bottom: 20px; color: #007bff;">Passenger Information</h2>
        <div style="display: flex; flex-direction: column;">
          <div style="margin-bottom: 20px;">
            <label for="passenger-name" style="font-weight: bold;">Name:</label>
            <input type="text" id="passenger-name" name="passenger-name" placeholder="Enter passenger name" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
          </div>
          <div style="margin-bottom: 20px;">
            <label for="passenger-age" style="font-weight: bold;">Age:</label>
            <input type="number" id="passenger-age" name="passenger-age" min="0" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
          </div>
          <div style="margin-bottom: 20px;">
            <label for="passenger-passport" style="font-weight: bold;">Passport Number:</label>
            <input type="text" id="passenger-passport" name="passenger-passport" placeholder="Enter passport number" required style="width: 100%; padding: 10px; font-size: 16px; border-radius: 4px; border: 1px solid #ccc;">
          </div>
        </div>
      </div>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return confirm('Are you sure you want to print this item?');">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <button type="submit" class="btn btn-danger" style="height:40px;margin-top:10px;" >Submit</button>
      </form>
     
    </form>
  </div>
</body>
</html>
