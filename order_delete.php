<?php 

    // session_start();

    include './includes/db.php'; 


if (isset($_GET['delete'])) {

    $orderID = $_GET['delete'];

    $connection->query("DELETE FROM tbl_order WHERE id=$orderID") or die($connection->error);

    // $_SESSION['message'] = "Record has been deleted";
    // $_SESSION['msg_type'] = "Danger";

    header("location: orders.php");

}


?>
