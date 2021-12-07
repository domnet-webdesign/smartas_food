<?php

session_start();


//include 'auth.php';
//include("userlogin.php");
require_once('./includes/db.php');
include ('./includes/header.php');
include ('./includes/navbar.php');

$myemail = '';

?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
  <div class="row">
     <div class="col-lg-8">
        <h1>Welcome to <span>SMARTAS</span></h1>
        <h2>Delivering great food for more than 1O years!</h2>

        <div class="btns">
           <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
           <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reserve</a>
        </div>
     </div>
  </div>
</div>
</section><!-- End Hero -->

 <main id="main">


<!-- ======= Menu Section ======= -->
              <section id="menu" class="menu section-bg">
                 <div class="container" data-aos="fade-up">
                    <div class="section-title">
                       <h2>Menu</h2>
                         <p>Check Our Tasty Menu</p>
                            </div>

               <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12 d-flex justify-content-center">
                     <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <!-- <li data-filter=".filter-starters">Starters</li>
                        <li data-filter=".filter-salads">Salads</li>
                        <li data-filter=".filter-specialty">Specialty</li> -->
                     </ul>
                  </div>
               </div>

               <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

               <?php

              include './includes/db.php';

              $sql = "SELECT * FROM menu LIMIT 6";

              $query = $connection->query($sql);

                  while($row = mysqli_fetch_array($query)): ?>
                  
                  <div class="col-lg-4 menu-item filter-specialty">
                     <div class="card" style="width: 20rem;">
                        <img src="images/<?php echo $row['img']; ?>" class="" alt="">
                        <div class="card-body text-center">
                           <h4 class="card-title"><?php echo $row['menu_name']; ?></h4>
                           <p class="card-text"><?php echo $row['menu_price']; ?></p>
                           <a href="users_orders.php?orders=<?php echo $row['id']; ?>" onclick="orderNow;" class="btn btn-success"> Order Now</a>
                        </div>
                     </div>
                  </div>

                  <?php endwhile; ?>
            </section>
            <!-- End Menu Section -->
                    
     <!-- ======= Book A Table Section ======= -->
      
     <?php include 'reserve_process.php'; ?>


<section id="book-a-table" class="book-a-table">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Reservation</h2>
            <p>Order</p>
      </div>
         <form action="userReserve.php" method="POST" role="form" data-aos="fade-up" data-aos-delay="100">
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

                <div class="col-lg-12 form-group">
                    <textarea class="form-control" name="message" columns="50" rows="5" placeholder="Message"></textarea>
               </div>

                  <button type="submit" class="btn btn-success w-100" name="submit" value=""> Book A Table </button>
        </form>
   </div>
</section><!-- End Book A Table Section -->

                               <!-- ======= Footer ======= -->
                                 <footer id="footer">
                                    <div class="footer-top">
                                       <div class="container">
                                          <div class="row">
                                             <div class="col-lg-3 col-md-6">
                                                <div class="footer-info">
                                                  <h3>Smartas Food</h3>
                                                      <p>
                                                       NIIT, Wuse 2, Abuja.<br><br>
                                                             <strong>Phone:</strong> 09098765432<br>
                                                                 <strong>Email:</strong> info@smartasfood.com<br>
                                                    </p>
         
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#index.html">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#specials">Specials</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
                     <form action="" method="post">
                          <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>

      </div>
    </div>
  </div>
</div>



              <div id="preloader"></div>
                 <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<?php

    include ('./includes/script.php');

?>
    