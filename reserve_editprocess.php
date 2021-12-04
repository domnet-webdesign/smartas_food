<?php

    include './includes/db.php';

            $res_id = 0;
            $name        = '';
            $email       = '';
            $phone       = '';
            $date        = '';
            $time        = '';
            $people      = '';
            $message     = '';

    if(isset($_GET['edit'])) {

        $res_orderID = $_GET['edit'];

        $result = $connection->query("SELECT * FROM reservation WHERE reserveID=$res_orderID") or die($connection->error());

        //if record is found count result and display
        if ($result == true) {

            $row = $result->fetch_array();

            $res_id            = $row['reserveID'];
            $name             = $row['fullname'];
            $email             = $row['email'];
            $phone            = $row['phone_number'];
            $date              = $row['date'];
            $time             = $row['time'];
            $people             = $row['number_people'];
            $message              = $row['mesage'];

        }


    }

 

        if(isset($_POST['update'])) {

            $res_id            = $_POST['rest'];
            $name            = $_POST['name'];
            $email             = $_POST['email'];
            $phone              = $_POST['phone'];
            $date              = $_POST['date'];
            $time              = $_POST['time'];
            $people             = $_POST['people'];
            $message              = $_POST['message'];


            $data = $connection->query("UPDATE reservation SET fullname='$name', email='$email', phone_number='$phone', date='$date', time='$time', number_people='$people', mesage='$message' WHERE reserveID=$res_id") or die($connection->error);


                if($data == true) {
                    
                        header("location: reserve.php");
                        
                }else {


                }
            

            
        }





?> 