<div class="breadcrumbs"> <!-- header -->
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section>
    <div class="section-header" data-aos="fade-up">
        <span>คำถามที่พบบ่อย</span><br>
        <h2>คำถามที่พบบ่อย</h2>
    </div>
  <?php //php techer info
    $faq_query = "SELECT * FROM faq" ; 
    $faq_result = mysqli_query($con, $faq_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert-faq"><button type="button" class="btn btn-outline-success">เพิ่มคำถาม</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">คำถาม</th>
          <th scope="col">คำตอบ</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($faq_row = mysqli_fetch_array($faq_result)) { 
      ?>
        <tr>
          <form method="post" action="pages/edit_faq_edit.php?id=<?php echo $faq_row["faq_id"];?>">
            <td><?php echo $faq_row["faq_header"];?></td>
            <td><?php echo $faq_row["faq_info"];?></td>
            <input type="hidden" name="statstext" value="<?php echo $outputtext?>">
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>