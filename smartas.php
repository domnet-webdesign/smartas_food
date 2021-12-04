<?php

session_start();

include 'auth.php';
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
                           <a href="users_orders.php?orders=<?php echo $row['id']; ?>" class="btn btn-success"> Order Now</a>
                           <!-- <a href="<?php //echo SITEURL; ?>users_orders.php" class="btn btn-success"> Order Now</a> -->
                        </div>
                     </div>
                  </div>

                  <?php endwhile; ?>
            </section>
            <!-- End Menu Section -->

                <!-- ======= Specials Section ======= -->
                <!-- <section id="specials" class="specials">
                     <div class="container" data-aos="fade-up">
                         <div class="section-title">
                             <h2>Specials</h2>
                                <p>Check Our Specials</p>
                                    </div>

                  <div class="row" data-aos="fade-up" data-aos-delay="100">
                       <div class="col-lg-3">
                           <ul class="nav nav-tabs flex-column">
                               <li class="nav-item">
                                  <a class="nav-link active show" data-toggle="tab" href="#tab-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.  </a>
                                     </li>
                                         <li class="nav-item">
                                              <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                                                </li>
                                     <li class="nav-item">
                                  <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                              </li>
                       <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
             </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
          </ul>
      </div>

      <div class="col-lg-9 mt-4 mt-lg-0">
         <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
               <div class="row">
                 <div class="col-lg-8 details order-2 order-lg-1">
                   <h3>Architecto ut aperiam autem id</h3>
                     <p class="font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit./p>
                       <p> Possimus consectetur enim ut nulla quidem molestiae recusandae eius necessitatibus perferendis facere? Aliquid dignissimos praesentium numquam error quibusdam modi perferendis.</p>
                          </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                   </div>
                    </div>
                       </div>

            <div class="tab-pane" id="tab-2">
               <div class="row">
                 <div class="col-lg-8 details order-2 order-lg-1">
                    <h3> Quas vero optio sapiente qui nostrum aspernatur at quam mollitia, esse quasi ipsa quo dolores sit asperiores in amet consectetur inventore.</h3>
                      <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                       <p> Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                         </div>

           <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                 </div>
                   </div>
                     </div>

            <div class="tab-pane" id="tab-3">
               <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                      <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                          </div>

             <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                   </div>
                     </div>
                       </div>

                     <div class="tab-pane" id="tab-4">
                        <div class="row">
                           <div class="col-lg-8 details order-2 order-lg-1">
                              <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                                   <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                                       </div>

              <div class="col-lg-4 text-center order-1 order-lg-2">
                   <img src="assets/img/specials-4.png" alt="" class="img-fluid">
                      </div>
                        </div>
                           </div>

              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                     <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                       <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                         <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                            </div>

               <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                     </div>
                        </div>
                           </div>
                              </div>
                                 </div>
                                   </div>
                                      </div>
                                           </section> -->
                                           <!-- End Specials Section -->

                    
     <!-- ======= Book A Table Section ======= -->
      
     <?php include 'reserve_process.php'; ?>


<section id="book-a-table" class="book-a-table">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Reservation</h2>
            <p>Order</p>
      </div>
         <form action="reserve_process.php" method="POST" role="form" data-aos="fade-up" data-aos-delay="100">
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
        <?php //echo $_SESSION['message']; ?>
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
    