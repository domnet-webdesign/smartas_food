<?php 

    // session_start();

    include './includes/db.php'; 


if (isset($_GET['delete'])) {

    $menuid = $_GET['delete'];

    $connection->query("DELETE FROM menu WHERE id=$menuid") or die($connection->error());

    // $_SESSION['message'] = "Record has been deleted";
    // $_SESSION['msg_type'] = "Danger";

    header("location: menus.php");

}


?>