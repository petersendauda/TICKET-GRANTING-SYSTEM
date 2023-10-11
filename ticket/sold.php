<?php
include('include/header.php');

$query = "SELECT seat.*, event.* FROM seat
JOIN event ON seat.eventid = event.id
WHERE seat.status = 'Sold'";

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


                    
                        <?php echo $row['home']; ?> VS
                        <?php echo $row['away']; ?>
                    
                <?php } ?>
            </h3>
        </div>
    </div>

    <div class="card002">
        <div>
            <h2> Total Number Of Sold Tickets</h2>
            <?php
            $data = mysqli_query($conn, "SELECT COUNT(*) FROM seat  WHERE status='Sold' AND date>= CURDATE()");
            $row = mysqli_fetch_array($data);
            $count = $row[0];
            ?>
            <h3>
                <?php echo $count; ?>
            </h3>
        </div>
    </div>

    <!-- <div class="card02" style="margin-top: 30px;">
        <div class="card2">
            <h2> Available Tickets</h2>
            <h3>3000</h3>
        </div>
        <div class="card2" style="margin-left: 300px;">
            <h2> Sold Tickets</h2>
            <h3>2000</h3>
        </div>
    </div> -->

    <div class="table" style="margin-top: 30px; margin-left: 30px; margin-right: 30px;  margin-bottom:100px">
        <div>
            <h1 class="table" align="center">SOLD TICKETS</h1>
        </div>
        <!-- TABLE -->
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Stand</th>
                        <th>Seat</th>
                        <th>RefCode</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tr>

                    <tbody>

                        <tr>
                            <?php
                            $query = "SELECT seat.*, event.*, ticketpayment.* FROM seat, ticketpayment, event
                            WHERE seat.eventid = event.id  AND event.id = ticketpayment.eventid AND status='Sold'";
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
                                <td>
                                    <?php echo $row['refcode']; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal?id=<?php echo $row['id']; ?>"
                                        data-bs-whatever="@getbootstrap">View</button>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal?id=<?php echo $row['id']; ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                <?php echo $row['home']; ?> VS
                                                <?php echo $row['away']; ?>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="supportername" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control"
                                                        value="<?php echo $row['supportername']; ?>" id="supportername"
                                                        readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="supporteremail" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control"
                                                        value="<?php echo $row['supporteremail']; ?>" id="supporteremail"
                                                        readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="phonenumber" class="col-form-label">Phone Number:</label>
                                                    <input class="form-control" name="phonenumber"
                                                        value="<?php echo $row['phonenumber']; ?>" id="phonenumber"
                                                        readonly>
                                                </div>
                                                <!-- <div class="mb-3">
                                                    <label for="refcode" class="col-form-label">Refcode:</label>
                                                    <input type="number" class="form-control" value="<?php //  echo $row['refcode']; ?>" id="refcode" readonly>
                                                </div>  -->
                                                <!-- <div class="mb-3">
                                                    <label for="paymentmethod" class="col-form-label">Payment
                                                        Method:</label>
                                                    <input type="text" class="form-control" value="<?php //  echo $row['paymentmethod']; ?>" id="paymentmethod" readonly> -->
                                                <!-- <select id="inputState" name="venue" class="form-select" readonly>
                                                        <option selected>Select method</option>
                                                        <option value="Paypal">Paypal</option>
                                                        <option value="Orange Money">Orange Money</option>
                                                        <option value="Afrimoney">Afrimoney</option>
                                                        <option value="Bitcoin">Bitcoin</option>
                                                        <option value="Smartpay">Smartpay</option>
                                                    </select> -->
                                                <!-- </div> -->
                                                <!-- <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Account Number:</label>
                                                    <input type="text" class="form-control" value="<?php //  echo $row['accountnumber']; ?>" id="accountnumber" readonly>
                                                </div> -->

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
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