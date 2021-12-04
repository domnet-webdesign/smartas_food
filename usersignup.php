<?php

    session_start();

    include ('./includes/header.php');
    include ('./includes/navbar.php');

    require_once('./includes/db.php');

    //Error field variable should if the any field is omitted
    $f_nameErr = $l_nameErr = $emailErr = $passErr = $confirmpassErr = "";

    //passing the users input into the function to validate the users input.
    $firstname = $lastname = $email = $password = $confirmpassword = "";

    $emailExErr = "";

    // Processing form data when form is submitted
    if(isset($_POST['save'])) {
        //function to trim and remove special character from the input of the users
        function validate_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        
        //validate the if the user input is empty us $_POST

        //validate first name
        if (empty($_POST['firstname'])) {
            $f_nameErr = "Please enter your First Name";
        }else {
            $firstname = validate_input($_POST['firstname']);
        }

        //validate lastname
        if (empty($_POST['lastname'])) {
            $l_nameErr = "Please enter your last Name";
        }else {
            $lastname = validate_input($_POST['lastname']);
        }

        //validate email
        if (empty($_POST['email'])) {
            $emailErr = "Please enter a valid email";
            $emailExErr = "Email Address already exist";
        }else {
            $email = validate_input($_POST['email']);
            //check for email format
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        //validate password
        if(empty($_POST['password']) || strlen($_POST['password']) < 7) {
            $passErr = "Password required atleast 8 Characters";
        }
        else {
            $password = validate_input($_POST['password']);  
        }

        //validate confirm password
        if($_POST['password'] !== $_POST['confirmpassword']) {
            $confirmpassErr = "Password not Matched";
        }
        else {
            $confirmpassword = validate_input($_POST['confirmpassword']);
        }


        $queryy = mysqli_query($connection, "SELECT adminID FROM admin WHERE Email = '$email'");

        if (mysqli_num_rows($queryy) > 0) {
            $emailExErr = "Email Already Exist";

        }else{
            
            if($f_nameErr == '' && $l_nameErr == '' && $emailErr == '' && $passErr == '' && $confirmpassErr == '') {

                //proceed sending our data to database
                    $sql = "INSERT INTO users (userID, FirstName, LastName, Email, Password, ConfirmPassword) 
                    VALUES ('NULL', '$firstname', '$lastname', '$email', '$password', '$confirmpassword')";

                        if(mysqli_query($connection, $sql) === true) {

                        //redirect to registrationprocess page
                        header('location: userlogin.php');

                        }else {
                            echo "Registration Failed ! ! ! ";
                        }
            
            }

        }

        
        
    }

?>


<br><br><br><br>
<div class="container">
    <h1 class="display-5 text-center">Register</h1>  
    <section class="d-flex justify-content-center">
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
                        <input class="form-control" placeholder="Enter Email" type="text" id="email" value="<?php echo $email; ?>" name="email">
                        <span class="important"> <?php echo $emailErr; ?> </span><br>
                        <span class="important"> <?php echo $emailExErr; ?> </span>
                    </div>

            <div class="form-group">
                <label for="firstname">Password <span class="important">*</span></label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                <span class="fn76"> <?php echo $passErr; ?> </span>
            </div>

            <div class="form-group">
                <label for="firstname">Re-Enter Password <span class="important">*</span></label>
                <input class="form-control" id="repassword" name="confirmpassword" type="password" placeholder="Re-Enter Password">
                <span class="fn76"> <?php echo $confirmpassErr; ?> </span>
            </div>

            <button type="submit" name="save" class="btn btn-primary w-100">Submit</button>

            <div class="terms text-center mt-3">
                <p>Signing up signifies you've read and agree to our <br> 
                    <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </p>
            </div>        

            <div class="alt-login text-center">
                <p>Already have an account? <a href="userlogin.php">Login here</a></p>
            </div>
        </form>
    </section>
</div>


<?php
   include ('./includes/script.php');

?>