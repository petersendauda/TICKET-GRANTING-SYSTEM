<?php
include('include/dbconn.php');
include('include/session.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TSS | Sales</title>
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/tic.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
        <div class="container">
            <a class="navbar-brand text-white" href="" rel="tooltip" title="Designed and Coded by Creative Tim"
                data-placement="bottom" target="_blank">
            </a>
            <img src="public/images/tic.png" alt="logo" class="logo-img">
            <h4 class="nav-heading">Bo Stadium Tickets</h4>

            <a href="view_staff.php"><button> Staff
                    <div class="star-1">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path
                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                    class="fil0"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="star-2">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path
                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                    class="fil0"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="star-3">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path
                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                    class="fil0"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="star-4">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path
                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                    class="fil0"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="star-5">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path
                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                    class="fil0"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="star-6">
                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <defs></defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path
                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                    class="fil0"></path>
                            </g>
                        </svg>
                    </div>
                </button>
            </a>

            <!-- <a href="addstaff.php">
                <button class="btn2">
                    Add Staff
                </button>
            </a>

            <a href="newticket.php">
                <button class="btn2">
                    New Event
                </button>
            </a> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <div class="row">
                        <div class="col-auto m-auto">
                            <a class="text-white cursor-pointer">
                                <i class="fa fa-cog fixed-plugin-button-nav"></i>
                            </a>
                        </div>
                        <div class="col-auto m-auto">
                            <div class="dropdown">
                                <a class="text-white cursor-pointer" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right px-2 py-3 ms-n4"
                                    aria-labelledby="dropdownMenuButton">
                                    ...
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                            <div class="bg-white border-radius-lg d-flex me-2">
                                <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
                                <button class="btn bg-gradient-primary my-1 me-1">Search</button>
                            </div>
                        </div> -->
                    </div>
                </ul>
            </div>


            <div class="avatar">
                <ul>
                    <!-- avatar shape -->
                    <li><a href="logout.php" style="text-decoration: none;">
                            <div class="d-lg-flex">
                                <div class="me-4">
                                    <span class="avatar avatar-lg">
                                        <img alt="avatar" src="public/images/circleavatar.png" class="rounded-circle"
                                            style="color: black; width: 50px; height: 50px" />
                                    </span>
                                </div>
                            </div>
                    </li>
                    <!-- Avatar end -->
                    <li>
                        <p class="heading" style="color: black;"><b>Hello
                                <?php $id = $_SESSION['id'];

                                $data = mysqli_query($conn, "select * from venuestaff where id = '$id' ");
                                $row = mysqli_fetch_array($data); ?>
                                </strong></span><span><strong style="font-size:15px;">
                                        <?php echo $row['username'] ?>
                                    </strong></span>
                            </b>
                        </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <!-- NAVBAR -->




</body>

</html>