<?php

    include './includes/db.php';

        $idid = 0;
        $menuPhoto   = '';
        $menu_name   = '';
        $menu_price  = '';

    if(isset($_GET['edit'])) {

        $menuid = $_GET['edit'];

        $result = $connection->query("SELECT * FROM menu WHERE id=$menuid") or die($connection->error());

        //if record is found count result and display
        if ($result == true) {

            $row = $result->fetch_array();

            $idid           = $row['id'];
            $menuPhoto     = $row['img'];
            $menu_name     = $row['menu_name'];
            $menu_price    = $row['menu_price'];

        }


    }

 

    if(isset($_POST['update'])) {

        $idid          = $_POST['menuid'];
        $menuPhoto     = $_FILES['image']['name'];
        $menu_name     = $_POST['menuname'];
        $menu_price    = $_POST['menuprice'];


            $data = $connection->query("UPDATE menu SET img='$menuPhoto', menu_name='$menu_name', menu_price='$menu_price' WHERE id=$idid") or die($connection->error);


                if($data === true) {
                    
                    echo "Position Updated Successfully";
                        header("location: menus.php");
                        
                }else {

                   echo "Position could not be Updated";

                }
            

            
    }





?> 