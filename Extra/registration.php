   <?php  include 'db.php';

   ?> 
   

   <?php
    require_once('serverConnection.php');

    //Error field variable should if the any field is omitted
    $f_nameErr = $l_nameErr = $emailErr = $passErr = $repassErr = $radioErr = $accountErr = "";

    //passing the users input into the function to validate the users input.
    $firstname = $lastname = $email = $password = $repassword = $selectAccount = $schoolorgan = "";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //function to trim and remove special character from the input of the users
        function validate_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        // function datalope($firstname, $lastname, $email, $password) {

        //     $firstname = validate_input($_POST['firstname']);
        //     $lastname = validate_input($_POST['lastname']);
        //     $email = validate_input($_POST['email']);
        //     $password = validate_input($_POST['password']);  

        // }

        
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
        if(($_POST['password']) !== $_POST['repassword']) {
            $repassErr = "Password not Matched";
        }
        else {
            $repassword = validate_input($_POST['repassword']);
        }

        //validate radio btn
        if (empty($_POST['radiobtn'])) {
            $radioErr = "Please select an account";
        }else {
            $selectAccount = validate_input($_POST['radiobtn']);
        }

        //validate account selected
        if (empty($_POST['school_organname'])) {
            $accountErr = "Please enter a School/Organisation Name";
        }else {
            $schoolorgan = validate_input($_POST['school_organname']);
        }


        //tosubmit the form: check if all the error are empty
        if($f_nameErr == '' && $l_nameErr == '' && $emailErr == '' && $passErr == '' && $repassErr == '' && $radioErr == '' && $accountErr == '') {

            //seesion varaible
            

            //proceed sending our data to database
            $sql = "INSERT INTO e_users (id, First_Name, Last_Name, Email, Password, Re_Password, Account_Type, Sch_Organ_Name) 
            VALUES ('NULL', '$firstname', '$lastname', '$email', '$password', '$repassword', '$selectAccount', '$schoolorgan')";

            //if the query was succesfull, display the registration process page
                if(mysqli_query($connection, $sql) === true) {

                    //redirect to registrationprocess page
                    header('location: registrationProcess.php');

                }else {
                    // echo "Data not inserted";
                    die();
                }
        }
        // else {
        //     echo "Registration Failed ! ! ! ";
        //     echo "<a href='registration.php'>Back to registration</a>";
        // }
        
    }

?>

<!-- HTML CONTENT START HERE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/all.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/all.css">
    <link rel="stylesheet" href="./bootstrap/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"> BEAVERS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto fn1">
                    <li class="nav-item my-2 my-lg-0">
                        <a class="nav-link btn" href="login.php">LOGIN</a>
                    </li>
                    <li class="nav-item my-2 my-lg-0">
                        <a class="nav-link btn" href="registration.php">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation ends -->
    <!-- session -->

    <?php
    
    //create session
    //creating variable for the session messages to the users
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;

    ?>

    <!--  -->
    <section id="registration text-center">
        <div class="regitration-header">
            <h1 class="display-4 text-center">BEAVERS</h1>
        </div>

        <!-- registration forms -->
        <div class="container mt-5 fn7">
            <form method="POST" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
                <div class="form-group">
                    <label for="firstname">First Name <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="form-control" type="text" id="firstname" value="<?php echo $firstname; ?>" name="firstname">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $f_nameErr; ?> </span>
                </div>
                
                <div class="form-group">
                    <label for="firstname">Last Name <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>" type="text">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $l_nameErr; ?> </span>
                </div>
                <div class="form-group">
                    <label for="firstname">Email <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input class="form-control" id="email" name="email" value="<?php echo $email; ?>" type="email">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $emailErr; ?> </span>
                </div>
                <div class="form-group">
                    <label for="firstname">Password <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $passErr; ?> </span>
                </div>
                <div class="form-group">
                    <label for="firstname">Re-Enter Password <span class="important">*</span></label>
                    <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input class="form-control" id="repassword" name="repassword" type="password" placeholder="Re-Enter Password">
                        </div>
                    </div>
                    <span class="fn76"> <?php echo $repassErr; ?> </span>
                </div>
                <!-- <div class="form-group">
                    <label for="account">This account will be used for a/an <span class="important">*</span></label><br>
                    <input type="radio" name="radiobtn" value="School">&nbsp;&nbsp;&nbsp;School<br>
                    <input type="radio" name="radiobtn" value="Organisation">&nbsp;&nbsp;&nbsp;Organisation <br>
                    <span class="fn76"> <?php echo $radioErr; ?> </span><br>
                </div> -->
                <!-- <div class="form-group">     
                    <div class="input-group input-group-lg fn5" id="">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input class="form-control fn3" name="school_organname" value="<?php echo $schoolorgan; ?>" type="text" placeholder="School Name/Organization Name">
                        </div>
                    </div> -->
                    <span class="fn76"> <?php echo $accountErr; ?> </span><br>
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
    </section>

    


    <script src="./bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="./bootstrap/js/all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/fontawesome/js/fontawesome.min.js"></script>
    <script src="main.js"></script>
</body>
</html>

