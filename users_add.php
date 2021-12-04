<?php include 'adminpanel.php'; 
      include 'adminnavbar.php';
?>
<?php include './includes/db.php'; ?>


<?php require_once 'users_process.php'; ?>
    <div class="container">
        <form action="users_process.php" method="POST">
                <div class="form-group">
                    <label for="firstname">First Name <span class="important">*</span></label>
                    <input class="form-control" required type="text" id="firstname" value="<?php echo $firstname; ?>" name="firstname">
                </div>
                
                <div class="form-group">
                    <label for="firstname">Last Name <span class="important">*</span></label>
                    <input class="form-control" required type="text" id="lastname" value="<?php echo $lastname; ?>" name="lastname">
                </div>

                <div class="form-group">
                    <label for="firstname">Email <span class="important">*</span></label>
                    <input class="form-control" required type="text" id="email" value="<?php echo $email; ?>" name="email">
                </div>

                <div class="form-group">
                    <label for="firstname">Password <span class="important">*</span></label>
                    <input class="form-control" required type="text" id="password" value="<?php echo $password; ?>" name="password">
                </div>

                <div class="form-group">
                    <label for="firstname">Confirm Password <span class="important">*</span></label>
                    <input class="form-control" required type="text" id="confirmpassword" value="<?php echo $confirmpassword; ?>" name="confirmpassword">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </div>
        </form>
    </div>

    

    
<?php

    include('adminscript.php');

?>