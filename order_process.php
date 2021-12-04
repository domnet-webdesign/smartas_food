<?php

    include '../includes/conn.php';

    // //Error field variable should if the any field is omitted
    // $f_nameErr = $l_nameErr = $emailErr = $emailExErr = $passErr = $confirmpassErr = "";

    // //passing the users input into the function to validate the users input.
    $organ_name = "";

    if (isset($_POST['submit'])) {

        $organ_name          = $_POST['organ_name'];

        $sql = "INSERT INTO organisation (organID, organName) 
                 VALUES ('NULL', '$organ_name')";

                if(mysqli_query($conn, $sql) === true) {

                    //redirect to registrationprocess page
                    header('location: organ.php');

                    }else {
                        echo "Registration Failed ! ! ! ";
                        //echo "<a href='registration.php'>Back to registration</a>";
                    }
            

    }


?>
