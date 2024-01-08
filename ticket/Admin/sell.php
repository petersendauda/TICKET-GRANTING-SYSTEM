<?php
include('include/dbconn.php');
include('include/header.php');

// if (isset($_POST['submit'])) {
//     $game = $_POST['game'];
//     $date = $_POST['eventdate'];
//     $id = $_POST['id'];
//     $gamedate = $_POST['gamedate'];
//     $gametime = $_POST['gametime'];
//     $eventid = $_POST['eventid'];   
// }
$id = $_GET['id']; 
if (isset($_POST['submit'])) {
    $supportername = $_POST['supportername'];
    $supporteremail = $_POST['eventsupporteremail'];
    $phonenumber = $_POST['$phonenumber'];
    $amount = $_POST['amount'];
    $paymentmethod = $_POST['paymentmethod'];
    $accountnumber = $_POST['accountnumber'];
    $seatno = $_POST['seatno'];
    $standno = $_POST['standno'];
    $refcode = rand();
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $eventid = $_POST['eventid'];

    mysqli_query($conn, "INSERT INTO ticketpayment(eventid, supportername, supporteremail, phonenumber, amount, paymentmethod, accountnumber, seatno, standno, refcode, date, month, year) 
    VALUES ('$eventid','$supportername','$supporteremail','$phonenumber','$amount','$paymentmethod','$accountnumber','$seatno','$standno','$refcode','$date','$month','$year')");

    echo "<script>alert('Ticket Sold Successfully')</script>";
    echo "<script>window.location='view_staff.php';</script>";
}




$query = "SELECT * FROM event
                            WHERE id = $id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) { 
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>game | tickets</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="card02" style="margin-top: 30px;">
            <div class="card2" style=" margin-bottom: 30px;">
           
                <h2>Game:</h2>
                <h3>
                    <td>
                        <?php echo $row['home']; ?> VS
                        <?php echo $row['away']; ?>
                    </td>
                    <td>
                    </td>
                <?php } ?>
            </h3>
        </div>
    </div>

    <div class="card002">
        <div>
            <h2> Total Number Of Available SEATS</h2>
            <?php
            $data = mysqli_query($conn, "SELECT COUNT(*) FROM seat  WHERE status='Sell' AND eventid=$id");
            $row = mysqli_fetch_array($data);
            $count = $row[0];
            ?>
            <h3>
                <?php echo $count; ?>
            </h3>
        </div>
    </div>

  
    <div class="page-titles" style="color: #6c757d;">
		<ol class="breadcrumb">
			<li class="breadcrumb-item" style="color: #6c757d;"><a href="javascript:history.back(1)">Venue Staff</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Available Tickets</a></li>
		</ol>
	</div>

    <div class="table" style="margin-top: 30px;  margin-bottom:100px">
        <div>
            <h1 class="table" align="center">AVAILABLE SEATS</h1>
        </div>
        <!-- TABLE -->
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Stand</th>
                        <th>Seat</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tr>

                    <tbody>

                        <tr>
                            <?php
                            $query = "SELECT * FROM seat WHERE status='Sell' AND eventid=$id";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>

                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['standno']; ?>
                                </td>
                                <td>
                                    <?php echo $row['seatno']; ?>
                                </td>
                                <!-- <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal?id=<?php echo $row['id']; ?>"
                                        data-bs-whatever="@getbootstrap">Sell</button>
                                </td> -->
                            </tr>
                            <div class="modal fade" id="exampleModal?id=<?php echo $row['id']; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ticket</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="exampleModalLabel">
                                            <form method="post">
                                                <div class="mb-3">
                                                    <label for="supportername" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" name="supportername"
                                                        id="supportername" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="supporteremail" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" id="supporteremail" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="amount" class="col-form-label">Amount:</label>
                                                    <input type="number" class="form-control" id="amount" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phonenumber" class="col-form-label">Phone Number:</label>
                                                    <input type="number" class="form-control" id="phonenumber" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="paymentmethod" class="col-form-label">Payment
                                                        Method:</label>
                                                    <select id="inputState" name="venue" class="form-select" required>
                                                        <option selected>Select method</option>
                                                        <option value="Paypal">Paypal</option>
                                                        <option value="Orange Money">Orange Money</option>
                                                        <option value="Afrimoney">Afrimoney</option>
                                                        <option value="Bitcoin">Bitcoin</option>
                                                        <option value="Smartpay">Smartpay</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Account Number:</label>
                                                    <textarea class="form-control" id="message-text" required></textarea>
                                                </div>
                                                <input type="hidden" class="form-control" id="val-name" name="date"
                                                    value="<?php echo date("F j, Y"); ?>">
                                                <input type="hidden" class="form-control" id="val-name" name="month"
                                                    value="<?php echo date("F"); ?>">
                                                <input type="hidden" class="form-control" id="val-name" name="year"
                                                    value="<?php echo date("Y"); ?>">

                                                <input type="hidden" class="form-control" id="val-name" name="eventid"
                                                    value="<?php echo $row['eventid']; ?>">
                                                <input type="hidden" class="form-control" id="val-name" name="seatno"
                                                    value="<?php echo $row['seatno']; ?>">
                                                <input type="hidden" class="form-control" id="val-name" name="standno"
                                                    value="<?php echo $row['standno']; ?>">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" name="submit" value="submit"
                                                class="btn btn-primary">Sell</button>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>

            <?php
                            }
                            ?>
        </td>
        </tr>
        </tbody>
        </table>












        <button style="margin-left: 20px"> NEXT
        </button>
    </div>
    </div>
    <!-- TABLE -->
    <div class="copyright" style="color:red;" align="center">
        <p></p>
        <p class="">Group 8 <br><small>© 2023. All Rights Reserved.</small></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>