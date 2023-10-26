<section id="faq" class="faq"> <!-- ยืมหน้า faq มาใช้ -->
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>ดาวน์โหลดโปรแกรม</span><br>
        <h2>ดาวน์โหลดโปรแกรม</h2>

      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-10">

          <div class="accordion accordion-flush" id="faqlist">

          <?php $download_query = "SELECT * FROM download" ;
          $download_result = mysqli_query($con, $download_query); 
         while ($download_row = mysqli_fetch_array($download_result)) { ?>
          
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $download_row["id"];?>">
                  <?php echo $download_row["name"];?>
                </button>
              </h3>
              <div id="faq-content-<?php echo $download_row["id"];?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                <?php echo $download_row["content"];?><br>
                <a href="program/<?php echo $download_row["link"];?>" download>ดาวน์โหลด</a>
                </div>
              </div>
            </div>
        <?php } ?>

          </div>

        </div>
      </div>

    </div>
         </section>