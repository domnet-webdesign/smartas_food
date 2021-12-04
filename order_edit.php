<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>

<?php require_once 'order_editprocess.php'; ?>
<div class="container">
            <form action="order_editprocess.php" method="POST">
            
                <input type="hidden" name="orderID" value="<?php echo $orderid; ?>">

                <div class="form-group">
                    <label for="firstname">Ordered Name<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $ordered_meal; ?>" name="ordered_name">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Meal Price<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $meal_price; ?>" name="meal_price">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Quantity<span class="important">*</span></label>
                    <input class="form-control" type="number" id="firstname" value="<?php echo $meal_qty; ?>" name="meal_qty">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Total<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $total; ?>" name="total">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Status<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname"placeholder="Ordered/Received/Delivered" value="<?php echo $status; ?>" name="status">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Order Date<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $order_date; ?>" name="order_date">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Customer Name<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $customer_name; ?>" name="customer_name">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Customer Email<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $customer_email; ?>" name="customer_email">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Customer Contact<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $customer_contact; ?>" name="customer_contact">
                
                </div>
                <div class="form-group">
                    <label for="firstname">Customer Address<span class="important">*</span></label>
                    <input class="form-control" type="text" id="firstname" value="<?php echo $customer_address; ?>" name="customer_address">
                
                </div>
                

                
                
                <button type="submit" class="btn btn-primary" name="update">Update</button>
                <button type="button" class="btn btn-danger">Cancel</button>
        </form>
</div>



<?php

  include('adminscript.php');

?>
