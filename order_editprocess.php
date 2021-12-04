<?php

    include './includes/db.php';

        $orderid = 0;
        $ordered_meal         =  '';
        $meal_price           =    '';
        $meal_qty             =    '';

        $total                =    '';

        $status               =     '';

        $order_date           =     '';

        $customer_name        =     '';
        $customer_email       =     '';
        $customer_contact     =     '';
        $customer_address     =     '';

    if(isset($_GET['edit'])) {

        $orderID = $_GET['edit'];

        $result = $connection->query("SELECT * FROM tbl_order WHERE id=$orderID") or die($connection->error);

        //if record is found count result and display
        if ($result == true) {

            $row = $result->fetch_array();

            $orderid            = $row['id'];
            $ordered_meal         =     $row['ordered_meal'];
            $meal_price           =     $row['meal_price'];
            $meal_qty             =     $row['meal_qty'];

            $total                =     $row['total'];

            $status               =     $row['status'];

            $order_date           =     $row['order_date'];

            $customer_name        =     $row['customer_name'];
            $customer_email       =     $row['customer_email'];
            $customer_contact     =     $row['customer_contact'];
            $customer_address     =     $row['customer_address'];

        }


    }



        if(isset($_POST['update'])) {
            
            $orderid              =     $_POST['orderID'];
            $ordered_meal         =     $_POST['ordered_meal'];
            $meal_price           =     $_POST['meal_price'];
            $meal_qty             =     $_POST['meal_qty'];

            $total                =     $meal_price * $meal_qty;

            $status               =     "Ordered";

            $order_date           =     date("Y-m-d");

            $customer_name        =     $_POST['customer_name'];
            $customer_email       =     $_POST['customer_email'];
            $customer_contact     =     $_POST['customer_contact'];
            $customer_address     =     $_POST['customer_address'];


            $data = $connection->query("UPDATE tbl_order SET 
            
                ordered_meal    =      '$ordered_meal',
                meal_price      =      $meal_price,
                meal_qty        =      $meal_qty,
                total           =      $total,
                status          =      '$status',
                order_date      =      '$order_date',
                customer_name   =      '$customer_name',
                customer_email  =      '$customer_email',
                customer_contact    =      '$customer_contact',
                customer_address    =      '$customer_address'
                
                WHERE id=$orderid") or die($connection->error());


                if($data === true) {
                    
                    echo "<script>alert('Order Updated Successfully')</script>";
                        header("location: orders.php");
                        
                }else {

                    echo "<script>alert('Orders could not be Updated')</script>";

                }
            

            
        }





?> 