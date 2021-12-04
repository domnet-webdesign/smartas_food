<?php


    session_start();

    $email_check = $_SESSION['email'];
    $firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];



    $ses_sql = mysqli_query($connection, "SELECT Email FROM admin WHERE Email = '$email_check'");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['Email'];

    if(isset($_SESSION['login_user'])) {

        header("location: adminlogins.php");

        die();
    }

?>