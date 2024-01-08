<?php
include('include/dbconn.php');
include('include/header.php');
$id = $_SESSION['id'];

$data = mysqli_query($conn, "select * from staff where id = '$id' ");
$row = mysqli_fetch_array($data);


if (isset($_POST['submit'])) {
  $staffid = $id;
  $username = $_POST['username'];
  $contactnumber = $_POST['contactnumber'];
  $password = "staff$contactnumber";
  $phonenumber = "+232$contactnumber";
  $emailaddress = $_POST['emailaddress'];
  $homeaddress = $_POST['homeaddress'];
  $gender = $_POST['gender'];
  $venue = $_POST['venue'];
  $date = $_POST['date'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  $status = 'Active';



  $data = mysqli_query($conn, "INSERT INTO venuestaff(staffid, venue, emailaddress, password, username, gender, phonenumber, homeaddress, status, date, month, year)
   VALUES ('$staffid','$venue','$emailaddress','$password','$username', '$gender', '$phonenumber','$homeaddress','$status', '$date', '$month', '$year')");
  if ($data) {
    echo"<script>alert('Staff Added Successfully!!')</script>";
    echo"<script>window.location='view_staff.php';</script>";
    } else {
    echo "Failed:" . mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Match</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>


  <div class="card002" style="height:70px;">
    <div>
      <p style="margin-left:30px; margin-top:15px">Register/<small>Staff</small></p>
    </div>
  </div>

  <!-- INPUTS -->
  <div class="card" style="width: 1200px; height: 90%">
    <div class="card-body">
      <div class="row">
        <form method="post" class="row g-3">
            <div>Personal Info</div>
            <br><br>
          <div class="col-md-4">
            <label for="hometeam" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
          </div>
          <div class="col-md-4">
            <label for="awayteam" class="form-label">Phone Number</label>
            <input type="text" name="contactnumber" class="form-control" id="phonenumber" placeholder="Enter Phone Number" required>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Gender</label>
            <select id="inputState" name="gender" class="form-select" required>
              <option selected>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <hr>
          <div class="col-md-6">
            <label for="gamedate" class="form-label">Email Address</label>
            <input type="email" name="emailaddress" class="form-control" id="gamedate" placeholder="example@gmail.com" required>
          </div>
          <div class="col-md-6">
            <label for="time" class="form-label">Home Address</label>
            <input type="text" name="homeaddress" class="form-control" id="homeaddress" placeholder="Enter Home Address" required>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Venue</label>
            <select id="inputState" name="venue" class="form-select" required>
              <option selected>Select Venue</option>
              <option value="Stand 01">Stand 1</option>
              <option value="Stand 02">Stand 02</option>
              <option value="Stand 03">Stand 03</option>
              <option value="Stand 04">Stand 04</option>
              <option value="Stand 05">Stand 05</option>
              <option value="Stand 06">Stand 06</option>
            </select>
          </div>
          <input type="hidden" class="form-control" id="val-name" name="date" value="<?php echo date("F j, Y");   ?>">
          <input type="hidden" class="form-control" id="val-name" name="month" value="<?php echo date("F"); ?>">
          <input type="hidden" class="form-control" id="val-name" name="year" value="<?php echo date("Y"); ?>">


          <div class="col-12">
            <button type="submit" name="submit" value="submit" class="btn btn-primary"
              style="margin-left: 1000px;">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <!-- INPUTS -->


  <div class="copyright" style="color:red;" align="center">
    <p></p>
    <p class="">Group 8 <br><small>© 2023. All Rights Reserved.</small></p>
  </div>
</body>

</html>