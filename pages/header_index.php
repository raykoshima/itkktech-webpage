<?php $sqlzl = "SELECT * FROM teacher"; // check ครู
      $resultzl = mysqli_query($con, $sqlzl);
      $num_rowszl = mysqli_num_rows($resultzl);
      
      $sqlst1 = "SELECT * FROM student WHERE class = 1"; // ปวช1
      $restd1 = mysqli_query($con, $sqlst1);
      $num_std1 = mysqli_num_rows($restd1);

      $sqlst2 = "SELECT * FROM student WHERE class = 2"; // ปวช2
      $restd2 = mysqli_query($con, $sqlst2);
      $num_std2 = mysqli_num_rows($restd2);

      $sqlst3 = "SELECT * FROM student WHERE class = 3"; // ปวช3
      $restd3 = mysqli_query($con, $sqlst3);
      $num_std3 = mysqli_num_rows($restd3);

      $sqlst4 = "SELECT * FROM student WHERE class = 4"; // ปวส1
      $restd4 = mysqli_query($con, $sqlst4);
      $num_std4 = mysqli_num_rows($restd4);

      $sqlst5 = "SELECT * FROM student WHERE class = 5"; // ปวส2
      $restd5 = mysqli_query($con, $sqlst5);
      $num_std5 = mysqli_num_rows($restd5);
      
      $vc_count = $num_std1 + $num_std2 + $num_std3; //ช 1 ถึง 3
      $vvc_count = $num_std4 + $num_std5; // ส 1 ถึง 2
      $std_count = $num_std1 + $num_std2 + $num_std3 + $num_std4 + $num_std5; // รวม

      ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"><br><br><br><br><br><br><br><br><br><br><br><br><div></div>
          <p data-aos="fade-up" data-aos-delay="100" >เปิดสอนหลักสูตรประกาศนียบัตรวิชาชีพ (ปวช.) สาขางานเทคโนโลยีสารสนเทศและหลักสูตรประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) สาขางานนักพัฒนาซอฟท์แวร์ ประเภทวิชาเทคโนโลยีสารสนเทศและการสื่อสาร</p>

          

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_rowszl;?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>ครูประจำแผนก</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $vc_count;?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>นักเรียนระดับ ปวช.</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $vvc_count;?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>นักศึกษาระดับ ปวส.</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $std_count;?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>นักรียน นักศึกษา</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        
      </div>
    </div>
  </section><!-- End Hero Section -->