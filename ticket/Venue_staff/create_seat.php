<?php
include('include/dbconn.php');
include('include/header.php');

$data = mysqli_query($conn, "SELECT  MAX(id) FROM `event`");
$row = mysqli_fetch_array($data);
$id = $row['MAX(id)'];

if (isset($_POST['submit'])) {
    $eventid = $id;
    //   $seatno = $_POST['seatno'];
//   $standno = $_POST['standno'];
//   $gametime = $_POST['gametime'];
//   $type = $_POST['type'];
//   $category = $_POST['category'];
    $seatprice = $_POST['seatprice'];
    ;
    $status = 'Sell';
    $refcode = rand();
    $month = $_POST['month'];
    $year = $_POST['year'];
    $date = $_POST['gamedate'];



    $data = mysqli_query($conn, "INSERT INTO seat(eventid, seatno, standno, seatprice, refcode, status, date, month, year) 
  VALUES ('$eventid','','','$seatprice','$refcode','$status','$date','$month','$year')");
    if ($data) {
        echo "<script>alert('Event Added Successfully!!')</script>";
        echo "<script>window.location='view_staff.php';</script>";
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
                        <label for="inputState" class="form-label">Price</label>
                        <select id="inputState" name="seatprice" class="form-select" required>
                            <option selected>Select Amount</option>
                            <option value="Le5000">Le5000</option>
                            <option value="Le10,000">Le10,000</option>
                        </select>
                    </div>
                    <hr>
                    <div class="col-md-6">
                        <label for="gamedate" class="form-label">Date</label>
                        <input type="date" name="gamedate" class="form-control" id="gamedate" required>
                    </div>
                    <input type="hidden" class="form-control" id="val-name" name="month"
                        value="<?php echo date("F"); ?>">
                    <input type="hidden" class="form-control" id="val-name" name="year"
                        value="<?php echo date("Y"); ?>">


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