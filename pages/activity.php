    <!-- ======= Services Section ======= -->
    
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>กิจกรรมแผนก</span><br>
          <h2>กิจกรรมแผนก</h2>
        </div>

        <?php
         
          $activity_query = "SELECT * FROM activity ORDER BY activity_id DESC" ; 
          $activity_result = mysqli_query($con, $activity_query); 
          ?>
          
        <div class="row gy-4"><?php
                    while($activity_row = mysqli_fetch_array($activity_result)) 
                    { 
                    ?>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img" style="height: 300px;">


              <?php echo "" ."<img src='assets/img/activity_image/" .$activity_row["image_link"]."' width='100%' >"."";  ?>
                        

               </div>
              <center><h3> <a class="stretched-link"><?php echo "" .$activity_row["header"] . "";  ?></a></h3>
              <p><?php echo "" .$activity_row["info"] . "";  ?></p></center>
            </div>
          </div><!-- End Card Item -->

          <?php
                    }
                    ?>

<?php

?>
</section><!-- End Frequently Asked Questions Section -->
         


 

</body>

</html>