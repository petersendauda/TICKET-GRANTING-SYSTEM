<?php
include('include/header.php');
include('include/dbconn.php');


$id = $_SESSION['id'];

$data = mysqli_query($conn, "select * from venuestaff");
$row = mysqli_fetch_array($data);
$username = $row['username'];
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
    <div>
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * from venuestaff WHERE id =$id");
        $row = mysqli_fetch_array($data);
        $username = $row['username'];
        ?>
        <h2>Venue Staff: <small>
                <?php echo $username ?>
            </small></h2>
    </div>
    <div class="card002">

        <div>
            <h2> Total Number Of Games</h2>

            <?php
            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT COUNT(*) FROM event WHERE gamedate>= CURDATE() and venuestaffid =$id");
            $row = mysqli_fetch_array($data);
            $count = $row[0];
            ?>
            <h3>

                <?php echo $count; ?>
            </h3>
        </div>
    </div>
    <br><br>
    <div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:history.back(1)">Home</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Venue Staff</a></li>
		</ol>
	</div>
    <div class="table" style="margin-top: 30px;  margin-bottom:100px">
        <div>
            <h1 class="table" align="center">GAMES</h1>
        </div>
        <!-- TABLE -->
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Game</th>
                        <th>Venue</th>
                        <th>Category</th>
                        <th>Rank</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tr>
                    <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM event WHERE gamedate>= CURDATE() AND venuestaffid =$id order by id asc";
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
                                    <?php echo $row['home']; ?> VS
                                    <?php echo $row['away']; ?>
                                </td>
                                <td>
                                    <?php echo $row['venue']; ?>
                                </td>
                                <td>
                                    <?php echo $row['category']; ?>
                                </td>
                                <td>
                                    <?php echo $row['rank']; ?>
                                </td>
                                <td>
                                    <?php echo $row['gamedate']; ?>
                                </td>
                                <td>
                                    <?php echo $row['gametime']; ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="sold.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-dark sharp mr-1"><i
                                                class="fa fa-eye"></i>Sold</a>
                                        <a href="sell.php?id=<?php echo $row['id']; ?>" data-tooltip="tooltip" title="View"
                                            data-target="#viewthreeModaldep" class="btn btn-dark sharp mr-1"><i
                                                class="fa fa-eye"></i>Sell</a>
                                    </div>
                                </td>
                            </tr>
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