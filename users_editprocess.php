<?php
    include './includes/db.php';

        $userid = 0;
        $firstname = '';
        $lastname = '';
        $email = '';
        $password = '';
        $confirmpassword = '';

    if(isset($_GET['edit'])) {

    $userID = $_GET['edit'];

   $result = $connection->query("SELECT * FROM users WHERE userID=$userID") or die($connection->error());
   $_SESSION['message'] = "Users Successfully Edited";
    //if record is found count result and display
    if ($result == true) {

        $row = $result->fetch_array();

        $userid            = $row['userID'];
        $firstname          = $row['FirstName'];
        $lastname           = $row['LastName'];
        $email              = $row['Email'];
        $password           = $row['Password'];
        $confirmpassword    = $row['ConfirmPassword'];

                    

    }


}
 

        if(isset($_POST['update'])) {

            $userid            = $_POST['userID'];
            $firstname          = $_POST['firstname'];
            $lastname           = $_POST['lastname'];
            $email              = $_POST['email'];
            $password           = $_POST['password'];
            $confirmpassword    = $_POST['confirmpassword'];


            $data = $connection->query("UPDATE users SET FirstName='$firstname', LastName='$lastname', Email='$email', Password='$password', ConfirmPassword='$confirmpassword' WHERE userID=$userid") or die($connection->error);


                if($data == true) {
                    
                    header("location: users.php");

                }else {

                    $_SESSION['message'] = "Users Successfully Not Edited";
                    exit(0);

                }
            

            
        }





?> 