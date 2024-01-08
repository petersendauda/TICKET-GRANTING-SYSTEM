<?php
include('include/header.php');
include('include/dbconn.php');


$id = $_SESSION['id'];

$data = mysqli_query($conn, "select * from staff where id = '$id' ");
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="card002">
        <div>
            <h2> Total Number Of Venue Staff</h2>

            <?php
            $data = mysqli_query($conn, "SELECT COUNT(*) FROM venuestaff");
            $row = mysqli_fetch_array($data);
            $count = $row[0];
            ?>
            <h3>
                <?php echo $count; ?>
            </h3>
        </div>
    </div>
    <div class="table" style="margin-top: 30px;  margin-bottom:100px">
        <div>
            <h1 class="table" align="center">Venue Staff</h1>
        </div>
        <!-- TABLE -->
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Venue</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tr>
                    <?php
                    $query = "SELECT * FROM venuestaff order by id asc";
                    $result = mysqli_query($conn, $query);
                    ?>
                    <tbody>

                        <tr>
                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>

                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['username']; ?>
                                </td>
                                <td>
                                    <?php echo $row['venue']; ?>
                                </td>
                                <td>
                                    <?php echo $row['gender']; ?>
                                </td>
                                <td>
                                    <?php echo $row['phonenumber']; ?>
                                </td>
                                <td>
                                    <?php echo $row['homeaddress']; ?>
                                </td>
                                <td>
                                    <?php echo $row['status']; ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="game.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-dark sharp mr-1"><i
                                                class="fa fa-eye"></i>View</a>
                                        <a data-toggle="modal" data-tooltip="tooltip" title="Deactivate"
                                            data-target="#acceptoneModaldep<?php echo $row['id']; ?>"
                                            class="btn btn-danger sharp mr-1" style="margin-left: 10px; color: red;"><i
                                                class="fa fa-check">Deactivate</i></a>
                                    </div>
                                </td>
                            </tr>
                                                            <!-- MODAL -->
                                                            <div class="modal fade" id="acceptoneModaldep<?php echo $row['id']; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="acceptModalLabel" aria-hidden="true">

                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="acceptModalLabel">
                                                    <?php echo $row['username'] ?>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deactivate</h4><br>
                                                <b>
                                                    <?php echo date("F j, Y"); ?>
                                                </b>
                                                <br><br>
                                                <form class="form-valide" action="" method="post">
                                                    <input type="time" class="form-control" name="timeout">
                                                    <button type="submit" name="submit" value="submit"
                                                        class="btn btn-danger btn-block"
                                                        style="font-family: 'Montserrat', sans-serif;">Deactivate</button>
                                            </div>
                                            </form>
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