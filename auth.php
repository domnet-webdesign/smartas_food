<?php

    include './includes/db.php';

    if($_SESSION['auth_role'] != '0') {

            ?>
                 <script>
                    alert("<?php echo 'Please Signin to Access' ?>");
                    window.location.replace('userlogin.php');
                 </script>


             <?php

    }else {

        header('Location: smartasuserlogin.php');

    }

?>