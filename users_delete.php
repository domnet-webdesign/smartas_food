<?php 

    session_start();

    include './includes/db.php'; 


if (isset($_GET['delete'])) {

    $userID = $_GET['delete'];

    $connection->query("DELETE FROM users WHERE userID=$userID") or die($connection->error());

    $_SESSION['message'] = "Record has been deleted";

    header("location: users.php");

}


?>