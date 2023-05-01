<?php if (!isset($_SESSION)) {
    session_start();
} ?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php

    if ($_SESSION['loginstatus'] == "") {
        header("location:loginform.php");
    }
    $cn = mysqli_connect('localhost', 'root', '', 'admin') or die("connection failed.");

    ?>

    <?php include "navbarAdmin.php" ?>

    <div class=" container">
        <div class="row">
            <div class="col-2 linkSection">
                <?php include "sidebarAdmin.php" ?>
            </div>

            <div class="col-10 border-left border-primary text-center ">

                <div class="mt-5 mb-3 ">
                    <div class=" w-100 border border-primary m-auto shadow p-3 mb-5 rounded">

                        <div class="text-center p-2 ">
                            <h2>View Enquiry</h2>
                            <hr>
                        </div>
                        <table class="table table-border table-sm">
                            <tr>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">Package Name</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold; ">Package Id</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">Name</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">Gender</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">Mobile No.</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">Email</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">No. of Days</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">No. of Children</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">no. of Adults</td>
                                <td style="font-size:15px; padding:5px; font-weight:bold;">Status Field</td>
                            </tr>

                            <?php
                            $cn = mysqli_connect('localhost', 'root', '', 'admin') or die("connection failed.");
                            $s = "select * from enquiry,package where enquiry.Packageid=package.Packid";
                            $result = mysqli_query($cn, $s);
                            $r = mysqli_num_rows($result);

                            while ($data = mysqli_fetch_array($result)) {

                                echo "<td style=' padding:5px;'>$data[12]</td>
                                <td style=' padding:5px;'>$data[1]</td>
                                <td style=' padding:5px;'>$data[2]</td>
                                <td style=' padding:5px;'>$data[3]</td>
                                <td style=' padding:5px;'>$data[4]</td>
                                <td style=' padding:5px;'>$data[5]</td>
                                <td style=' padding:5px;'>$data[6]</td>
                                <td style=' padding:5px;'>$data[7]</td>
                                <td style=' padding:5px;'>$data[8]</td>
                                <td style=' padding:5px;'><a href='chstatus.php?eid=$data[0]'>$data[10]</a></td>
                                </tr>";
                            }

                            ?>

                        </table>

                    </div>

                </div>
            </div>

            <hr>

        </div>
    </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 href="index.php" class="text-uppercase mb-4 font-weight-bold h2">
                        <span class="text-warning">G</span>hurte Jabo
                    </h6>
                    <p class="font-weight-light">
                        Fuel Your Soul With Travel
                    </p>
                </div>
            </section>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white text-decoration-none " href="#">Riaj Hasan Pranto </a>
        </div>
        <!-- Copyright -->
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>