<?php
 
 include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $brand = $_POST['brand'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO connectivitya(start,stop,brand,cost) VALUES('$from','$to','$brand','$cost')";
    if (mysqli_query($conn, $sql) == TRUE) {
        echo '<script type="text/JavaScript">alert("Data inserted");</script>';
                                      
        header('location: ../../tour_subxm_transport.php');
         exit;
    } else {
        echo '<script type="text/JavaScript"> alert("Data not inserted"); </script>'; 

    }
}


?>