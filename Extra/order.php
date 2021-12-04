  <?php  include 'db.php';

  ?> 

  <?php 

  $name=$_POST['name'];
  $email=$_POST['email'];

  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $time=$_POST['time'];

  $people=$_POST['people'];
  $message=$_POST['message'];

  mysqli_query($connection, "INSERT INTO orders 
  (name,email,phone,date,time,people,message)  VALUES('$name','$email','$people','$date','$time','$people','$message')");
  if (($connection > 0 )) {

    echo" order successful";

  }else {
    
    echo"order not successful";
    echo mysqli_error ($connection);
  }


  ?>