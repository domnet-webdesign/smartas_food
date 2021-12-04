

<?php

include './includes/db.php';


if (isset($_POST['submit'])) {

    $file                   = $_FILES['image']['name'];
    $menuName               = $_POST['menuname'];
    $menuPrice              = $_POST['menuprice'];

    $target = basename($file);
    
                            $sql = "INSERT INTO menu (id, img, menu_name, menu_price) 
                            VALUES ('NULL', '$file', '$menuName', '$menuPrice')";

                                mysqli_query($connection, $sql);
                                
                                if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

                                    header('location: menus.php');

                                    $img = "image data inserted";
            
                                }else {
            
                                    echo "image uploading fail";

                                }
        

}

?>