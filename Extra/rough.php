<?php
            
            $sql = "SELECT * FROM food_details where id = 1";

            $query = mysqli_query($connection, $sql);
            
            while ($rows = mysqli_fetch_array($query)) {
            
            ?>




<?php
            
            $sql = "SELECT * FROM food_details where id = 2";

            $query = mysqli_query($connection, $sql);
            
            while ($rows = mysqli_fetch_array($query)) {
            
            ?>

            
   if (mysqli_affectrd_rows($connection)>0){

    <form method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
        <div class="form-group">
            <label for="firstname">First Name <span class="important">*</span></label>
            <input class="form-control" type="text" id="firstname" value="<?php echo $firstname; ?>" name="firstname">
            <span class="fn76"> <?php echo $f_nameErr; ?> </span>
        </div>
                
        <div class="form-group">
                    <label for="firstname">Last Name <span class="important">*</span></label>
                    <input class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" type="text">
                    <span class="fn76"> <?php echo $l_nameErr; ?> </span>
        </div>
                
                <div class="form-group">
                    <label for="firstname">Email <span class="important">*</span></label>
                    <input class="form-control" id="email" name="email" value="<?php echo $email; ?>" type="email">
                    <span class="fn76"> <?php echo $emailErr; ?> </span>
                </div>

                <div class="form-group">
                    <label for="firstname">Password <span class="important">*</span></label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                    <span class="fn76"> <?php echo $passErr; ?> </span>
                </div>

                <div class="form-group">
                    <label for="firstname">Re-Enter Password <span class="important">*</span></label>
                    <input class="w-100" class="form-control" id="repassword" name="repassword" type="password" placeholder="Re-Enter Password">
                    <span class="fn76"> <?php echo $repassErr; ?> </span>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>

                <div class="terms text-center mt-3">
                    <p>Signing up signifies you've read and agree to our <br> 
                        <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </p>
                </div>

                <div class="alt-login text-center">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
    </form>
</div>