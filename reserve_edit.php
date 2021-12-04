<?php 

    include 'adminpanel.php'; 
      include 'adminnavbar.php';

?>

<section id="book-a-table" class="book-a-table">
   <div class="container" data-aos="fade-up">
    
      <?php require_once 'reserve_editprocess.php'; ?>
         <form action="reserve_editprocess.php" method="POST" role="form" data-aos="fade-up" data-aos-delay="100">
            
         <input type="hidden" name="rest" value="<?php echo $res_id; ?>">
            
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
                    <input type="" required class="form-control" name="people" id="people" placeholder="# of people" value="<?php echo $people; ?>">
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" value="<?php echo $message; ?>"></textarea>
                    <div class="validate"></div>
               </div>
               
               <div class="text-center">
                  <button type="submit" class="btn btn-success" name="update">Book a Table</button>
               </div>
        </form>
        <?php //echo $_SESSION['message']; ?>
   </div>
</section><!-- End Book A Table Section -->




<?php

    include('adminscript.php');

?>