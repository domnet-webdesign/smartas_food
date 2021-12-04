<?php 

    // session_start();

    include './includes/db.php'; 


if (isset($_GET['delete'])) {

    $res_orderID = $_GET['delete'];

    $connection->query("DELETE FROM reservation WHERE reserveID=$res_orderID") or die($connection->error());

    // $_SESSION['message'] = "Record has been deleted";
    // $_SESSION['msg_type'] = "Danger";

    header("location: reserve.php");

}


?>