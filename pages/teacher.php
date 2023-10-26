<!DOCTYPE html>
<html lang="en">

  <main id="main">

    <!-- ======= Pricing Section ======= --> 
    <style>

.pricing .pricing-item {
  padding: 60px 40px;
  box-shadow: 0 3px 20px -2px rgba(108, 117, 125, 0.15);
  background: #fff;
  height: 100%;
  border-top: 4px solid #fff;
  border-radius: 30px;
  text-align: center;
}

.pricing h3 {
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 15px;
  color: #003485;
  text-align: center;
}

.pricing h4 {
  font-size: 48px;
  color: var(--color-primary);
  font-weight: 400;
  font-family: var(--font-primary);
  margin-bottom: 25px;
}

.pricing h4 sup {
  font-size: 28px;
}

.pricing h4 span {
  color: rgba(108, 117, 125, 0.8);
  font-size: 18px;
}

.pricing ul {
  padding: 20px 0;
  list-style: none;
  color: #878787;
  text-align: left;
  line-height: 20px;
}

.pricing ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.pricing ul i {
  color: #059652;
  font-size: 24px;
  padding-right: 3px;
}

.pricing ul .na {
  color: rgba(108, 117, 125, 0.5);
}

.pricing ul .na i {
  color: rgba(108, 117, 125, 0.5);
}

.pricing ul .na span {
  text-decoration: line-through;
}

.pricing .buy-btn {
  display: inline-block;
  padding: 12px 35px;
  border-radius: 4px;
  color: var(--color-primary);
  transition: none;
  font-size: 16px;
  font-weight: 500;
  font-family: var(--font-primary);
  transition: 0.3s;
  border: 1px solid var(--color-primary);
}

.pricing .buy-btn:hover {
  background: var(--color-primary);
  color: #fff;
}

.pricing .featured {
  border-top-color: var(--color-primary);
}

.pricing .featured .buy-btn {
  background: var(--color-primary);
  color: #fff;
}

@media (max-width: 992px) {
  .pricing .box {
    max-width: 60%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 767px) {
  .pricing .box {
    max-width: 80%;
    margin: 0 auto 30px auto;
  }
}

@media (max-width: 420px) {
  .pricing .box {
    max-width: 100%;
    margin: 0 auto 30px auto;
  }
}

    </style>
<?php
$teacher_query = "SELECT * FROM teacher" ; 
$teacher_result = mysqli_query($con, $teacher_query); 
?>
          <br><br><div class="section-header"  data-aos="fade-up">
          <span>ครูแผนกวิชาเทคโนโลยีสารสนเทศ</span><br>
          <h2>ครูแผนกวิชาเทคโนโลยีสารสนเทศ</h2>
          </div>
 
            
    <section id="pricing" class="pricing">
     
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
           <?php
                    while($teacher_row = mysqli_fetch_array($teacher_result)) 
                    { 
                    ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item" >
              <center><h3>ครูแผนกวิชาเทคโนโลยีสารสนเทศ</h3></center><br>

              
              <h4><span><center><img src="assets/img/teacher_image/<?php echo $teacher_row["img"];?>" width='320' height='240'></center></span></h4>
              
                <center><i class="#"><h3></i><?php echo "" .$teacher_row["name"] . "";  ?></h3></center>
                <i class="#"><h3></i> <?php echo "" .$teacher_row["level"] . "";  ?></h3>
              
              
            </div>
            
          </div>
          <?php } ?>
          
         
          


  </main><!-- End #main -->