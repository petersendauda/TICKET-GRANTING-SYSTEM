<?php
include('include/dbconn.php');
include('include/header.php');
$id = $_SESSION['id'];

$data = mysqli_query($conn, "select * from staff where id = '$id' ");
$row = mysqli_fetch_array($data);


if (isset($_POST['submit'])) {
  $home = $_POST['home'];
  $away = $_POST['away'];
  $venue = $_POST['venue'];
  $gamedate = $_POST['gamedate'];
  $gametime = $_POST['gametime'];
  $type = $_POST['type'];
  $category = $_POST['category'];
  $gamerank = $_POST['gamerank'];
  $staffid = $id;
  $month = $_POST['month'];
  $year = $_POST['year'];
  $date = $gamedate;
  $year = $_POST['year'];



  $data = mysqli_query($conn, "INSERT INTO event (id, home, away, venue, gamedate, gametime, type, category, rank, staffid, Month, year) VALUES (NULL,'$home','$away','$venue','$gamedate','$gametime','$type','$category', '$gamerank', '$staffid', '$month', '$year')");
  if ($data) {
    echo"<script>alert('Event Added Successfully!!')</script>";
    echo"<script>window.location='create_seat.php';</script>";
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
      <p style="margin-left:30px; margin-top:15px">Register/<small>New Game</small></p>
    </div>
  </div>

  <!-- INPUTS -->
  <div class="card" style="width: 1200px; height: 90%">
    <div class="card-body">
      <div class="row">
        <form method="post" class="row g-3">
          <div class="col-md-4">
            <label for="hometeam" class="form-label">Team 1</label>
            <input type="text" name="home" class="form-control" id="hometeam" required>
          </div>
          <div class="col-md-4">
            <label for="awayteam" class="form-label">Team 2</label>
            <input type="text" name="away" class="form-control" id="awayteam" required>
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Venue</label>
            <select id="inputState" name="venue" class="form-select" required>
              <option selected>Select a venue</option>
              <option value="Stadium Playing field">Stadium Playing field</option>
              <option value="Stadium Practice field">Stadium Practice field</option>
              <option value="Basketball field">Basketball field</option>
              <option value="Cricket field">Cricket field</option>
              <option value="Tennis court">Tennis court</option>
            </select>
          </div>
          <hr>
          <div class="col-md-6">
            <label for="gamedate" class="form-label">Date</label>
            <input type="date" name="gamedate" class="form-control" id="gamedate" required>
          </div>
          <div class="col-md-6">
            <label for="time" class="form-label">Time</label>
            <input type="time" name="gametime" class="form-control" id="time" required>
          </div>
          <hr>
          <div class="col-md-4">
            <label for="category" class="form-label">Game Type</label>
            <select id="category" class="form-select" name="type" required>
              <option selected>Select Game Type</option>
              <option value="Football">Football</option>
              <option value="Basketball">Basketball</option>
              <option value="Cricket">Cricket</option>
              <option value="Tennis">Tennis</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="category" class="form-label">Game Category</label>
            <select id="category" class="form-select" name="category" required>
              <option selected>Select Category</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Disabled">Disabled</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="category" class="form-label">Game Rank</label>
            <select id="category" class="form-select" name="gamerank" required>
              <option selected>Select Rank</option>
              <option value="Under 12">Under 12</option>
              <option value="Under 14">Under 14</option>
              <option value="Under 21">Under 21</option>
              <option value="Under 23">Under 23</option>
              <option value="Senior Team">Senior Team</option>
            </select>
          </div>
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