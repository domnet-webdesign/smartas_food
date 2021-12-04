

<?php

    include './includes/db.php';

    // //Error field variable should if the any field is omitted
    // $f_nameErr = $l_nameErr = $emailErr = $emailExErr = $passErr = $confirmpassErr = "";

    // //passing the users input into the function to validate the users input.
    $firstname = $lastname = $email = $password = $confirmpassword = "";

    if (isset($_POST['submit'])) {

        $firstname          = $_POST['firstname'];
        $lastname           = $_POST['lastname'];
        $email              = $_POST['email'];
        $password           = $_POST['password'];
        $confirmpassword    = $_POST['confirmpassword'];

        $sql = "INSERT INTO users (userID, FirstName, LastName, Email, Password, ConfirmPassword) 
                 VALUES ('NULL', '$firstname', '$lastname', '$email', '$password', '$confirmpassword')";
                 
                 $_SESSION['message'] = "Users Successfully Edited";

                if(mysqli_query($connection, $sql) == true) {

                    //redirect to registrationprocess page
                    header('location: users.php');
                    $_SESSION['message'] = "Users Successfully Added";

                    }else {
                        $_SESSION['message'] = "Users Not Successfully Added";
                        exit(0);
                    }
            

    }

?>




