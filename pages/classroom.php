<!DOCTYPE html>
<html lang="en">

  <main id="main">

    <!-- ======= Pricing Section ======= --> 
<?php
$classroom_query = "SELECT * FROM classroom" ; 
$classroom_result = mysqli_query($con, $classroom_query); 
?>
          <!--<br><br><div class="section-header"  data-aos="fade-up">
          <span>ห้องเรียน</span><br>
          <h2>ห้องเรียน</h2>
          </div>-->
 
            
    <section id="pricing" class="pricing">
     
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
           <?php
                    while($classroom_row = mysqli_fetch_array($classroom_result)) 
                    { 
                    ?>
                                 
                <!-- หัวเรื่อง --><div class="section-header"  data-aos="fade-up">
                    <h2><?php echo "" .$classroom_row["name"] . "";  ?></h2>
                    <h3><?php echo "" .$classroom_row["level"] . "";  ?></h3>
                  </div>               
                  <span><center><img src="assets/img/classroom_image/<?php echo $classroom_row["img"];?>" width='720' height='440'><br><br><hr size=5></center></span>
                  
            </div>



<!--
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item" >
              <center><h3>ห้องเรียน</h3></center><br>

              
              <h4><span><center><img src="assets/img/classroom_image/<?php echo $classroom_row["img"];?>" width='320' height='240'></center></span></h4>
              <ul>
                <li><i class="#"><h2></i><?php echo "" .$classroom_row["name"] . "";  ?></h2></li>
                <li><i class="#"></i> <h3><?php echo "" .$classroom_row["level"] . "";  ?></h3></li>
              </ul>
              
            </div>
            -->
          </div>
          <?php } ?>
          
         
          


  </main><!-- End #main -->