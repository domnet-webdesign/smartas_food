<?php

    //starting session
    session_start();

    include ('./includes/header.php');
    include ('./includes/navbar.php');
    include("./includes/db.php");
    



    $error = '';



    if($_SERVER["REQUEST_METHOD"] == "POST") {

        //GET email and password sent from form
        $email    =      mysqli_real_escape_string($connection, $_POST['email']);
        $password =      mysqli_real_escape_string($connection, $_POST['password']);

        $login = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password' LIMIT 1";
        $result = mysqli_query($connection, $login);

        //Check if the record exist
        if(mysqli_num_rows($result) > 0) {

            foreach($result as $data) {
            
                $user_id        = $data['userID'];
                $user_name      = $data['FirstName']. ' ' .$data['LastName'];
                $user_email     = $data['Email'];
                $user_role_as   = $data['role_as'];
            
            }

            $_SESSION['email'] = $user_email;
            $_SESSION['firstname'] = $user_name; 
            $_SESSION['auth_role'] = "$user_role_as"; //1= admin, 0 = users

            
            if($_SESSION['auth_role'] == '0') { // 1 = Admin

                //$_SESSION['message'] = "Welcome to Your Admin Dashboard";
                header('Location: smartasuserlogin.php');
                exit(0);


            }else {

                die();

            }
            

            //header("location: welcome.php");
            header("location: smartasuserlogin.php");
            
        }else {

            $error = "Your Login Email or Password is invalid";
            //echo "Your Login Email or Password is invalid";
            
        }

    }




?>

<br><br>
    <!--  -->
    <section id="registration">
    <h1 class="display-5 text-center">Login</h1> 
        <!-- registration forms -->
        <div class="container mt-5 d-flex justify-content-center">
            <form method="POST" action=" <?php echo $_SERVER["PHP_SELF"]; ?> ">
                <div class="form-group">
                    <label for="email">Email <span class="important">*</span></label>
                    <input width="50" class="form-control" id="email" name="email" type="email">
                </div>
                <div class="form-group">
                    <label for="password">Password <span class="important">*</span></label>
                        <input class="form-control" id="password" name="password" type="password">
                    <span class="fn76"> <?php echo $error; ?> </span>
                </div>

                <input type="submit" class="btn btn-primary w-100" value="LOGIN">

                <div class="terms text-center mt-3">
                    <p>Signing up signifies you've read and agree to our <br> 
                        <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </p>
                </div>

                <div class="alt-login text-center">
                <p>New User? <a href="usersignup.php">Sign up</a></p>
            </div>
            </form>
        </div>
    </section>

    

<?php

  include('adminscript.php');

?>
