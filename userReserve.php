<?php

    include './includes/db.php';

    // //passing the users input into the function to validate the users input.
    $name = $email = $phone = $date = $time = $people = $message = "";

    if (isset($_POST['submit'])) {

            $name            = $_POST['name'];
            $email             = $_POST['email'];
            $phone              = $_POST['phone'];
            $date              = $_POST['date'];
            $time              = $_POST['time'];
            $people             = $_POST['people'];
            $message              = $_POST['message'];

        $sql = "INSERT INTO reservation (reserveID, fullname, email, phone_number, date, time, number_people, mesage) 
                 VALUES ('NULL', '$name', '$email', '$phone', '$date', '$time', '$people', '$message')";

                if(mysqli_query($connection, $sql) === true) {

                    //redirect to registrationprocess page
                    ?>
                        <script>
                            alert("<?php echo 'You order have been received, We will contact you to confirm for more details. Thanks' ?>");
                            window.location.replace('smartasuserlogin.php');
                        </script>
                    <?php
                    }else {
                        echo "Registration Failed ! ! ! ";
                        //echo "<a href='registration.php'>Back to registration</a>";
                    }
            

    }

?>