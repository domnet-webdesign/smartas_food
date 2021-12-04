<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>
<?php include './includes/db.php'; ?>


<?php require_once 'reserve_process.php'; ?>
    <div class="container">
        <form action="reserve_process.php" method="POST">
            <div class="form-row">
                <div class="col-lg-4 col-md-6 form-group">
                  <input type="text" required name="name" class="form-control" id="name" placeholder="Your Name" value="<?php echo $name; ?>">
                </div>
                            
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="email" required class="form-control" name="email" id="email" placeholder="Your Email" value="<?php echo $email; ?>">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" required class="form-control" name="phone" id="phone" placeholder="Your Phone" value="<?php echo $phone; ?>">
                </div>
                      
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="date" required name="date" class="form-control" id="date" placeholder="Date" value="<?php echo $date; ?>">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <input type="time" required class="form-control" name="time" id="time" placeholder="Time" value="<?php echo $time; ?>">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <input type="number" required class="form-control" name="people" id="people" placeholder="# of people" value="<?php echo $people; ?>">
                </div>

                <div class="form-group">
                    <textarea class="form-control" required name="message" rows="5" placeholder="Message" value="<?php echo $message; ?>"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
                
        </form>





    </div>



<?php

    include('adminscript.php');

?>
