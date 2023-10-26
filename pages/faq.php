<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>คำถามที่พบบ่อย</span><br>
        <h2>คำถามที่พบบ่อย</h2>

      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-10">

          <div class="accordion accordion-flush" id="faqlist">

          <?php $faq_query = "SELECT * FROM faq" ;
          $faq_result = mysqli_query($con, $faq_query); 
         while ($faq_row = mysqli_fetch_array($faq_result)) { ?>
          
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $faq_row["faq_id"];?>">
                  <i class="bi bi-question-circle question-icon"></i>
                  <?php echo $faq_row["faq_header"];?>
                </button>
              </h3>
              <div id="faq-content-<?php echo $faq_row["faq_id"];?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                <?php echo $faq_row["faq_info"];?>
                </div>
              </div>
            </div>
        <?php } ?>

          </div>

        </div>
      </div>

    </div>
         </section>