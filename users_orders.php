<?php

    session_start();
    require_once('./includes/db.php');
    include ('./includes/header.php');
    include ('./includes/navbaruser.php');

?>

<br><br><br><br><br>
<?php
                    if(isset($_GET['orders'])) {

                        if($_SESSION['auth_role'] != '0') {

                            header('location: userlogin.php');

                        }

                        if($_SESSION['auth_role'] == '0') {

                            $id = $_GET['orders'];

                            //get the details of the selected food
                            $sql = "SELECT * FROM menu where id = $id"; 
                            $query = $connection->query($sql);

                            //count the rows
                            $count = mysqli_num_rows($query);

                            //check whether the data is available or not
                            if($count == 1) {

                                //we have data
                                //get the data from the database
                                $row = mysqli_fetch_assoc($query);
                                $img = $row['img'];
                                $menu_name = $row['menu_name'];
                                $menu_price = $row['menu_price'];
                                
                            
                            }else {

                            } 
                        }else {
                            
                        }

                    }else{

                    }
                        
                ?>
<div class="container">
        <form class="d-flex" action="" method="POST">
            <fieldset class="mr-auto p-5">
                <legend>Selected Food</legend>
                    <div class="card" style="width: 20rem;">
                        <?php
                        //Check whether the image exist
                        if ($img == "") {
                            //image not available
                            echo "<div class='error'>Image not avaialble.</div>";
                        }else {
                            ?>
                                <img src="images/<?php echo $img; ?>" class="img-responsive" alt="">
                            <?php
                        }
                        ?>
                        <div class="card-body text-center">
                           <h4 class="card-title"><?php echo $menu_name; ?></h4>
                           <p class="card-text"><?php echo $menu_price; ?></p>
                        </div>
                    </div>
            </fieldset>

            <fieldset class="p-5">
                <p style="color: #fff;">uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu</p>
                <legend>Delivery Details</legend>
                <input type="hidden" required name="ordered_meal" class="form-control" id="" value="<?php echo $menu_name; ?>">
                <input type="hidden" required name="meal_price" class="form-control" id="" value="<?php echo $menu_price; ?>">
                
                <label for="">Quantity</label>
                <div class="form-group">
                    <input type="number" required class="form-control" name="meal_qty" id="phone" placeholder="" value="1">
                </div>
                <label for="">Name</label>
                <div class="form-group">
                  <input type="text" required name="customer_name" class="form-control" id="name" placeholder="Full Name" value="">
                </div>

                <label for="">Email</label>
                <div class="form-group">
                  <input type="email" required name="customer_email" class="form-control" id="name" placeholder="Email"  value="">
                </div>

                <label for="">Phone Number</label>
                <div class="form-group">
                    <input type="text" required class="form-control" name="customer_contact" id="email" placeholder="Phone Number" value="">
                </div>
                
                <label for="">Delivery Location</label>
                <div class="form-group">
                    <input type="text" required class="form-control" name="customer_address" id="people" placeholder="Your Address" value="">
                </div>
               
               <div class="text-center">
                  <button type="submit" class="btn btn-success w-100" name="save">Place Order Now</button>
               </div>
            </fieldset>  
        </form>
</div>

<?php

if(isset($_POST['save'])) {

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


        $sql2= "INSERT INTO tbl_order SET
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
                ";
                

                //echo $sql2; die();

            //Execute query
            $query1 = $connection->query($sql2);

            if($query1==true) {

                header("Location: smartasuserlogin.php");
                

            }else {
                $_SESSION['message'] = "Your Orders have been placed successfully";
              
                
            }

}else {
   // die();
}


?>



<?php

    include('adminscript.php');

?>