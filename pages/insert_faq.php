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
<div class="section-header">
    <h2>เพิ่มคำถาม</h2>
</div>
<div class="container">
<a href="edit-faq"><button type="button" class="btn btn-outline-warning">กลับไปหน้าคำถาม</button></a><br>
    <form method="post" action="pages/admin/insert_faq_save.php">
    <br><div class="form-group">
        <label for="faq_q">คำถาม</label>
        <input type="text" class="form-control" id="faq_q" name="faq_q" placeholder="คำถาม">
    </div>
    <div class="form-group">
        <label for="faq_a">คำตอบ</label>
        <input type="text" class="form-control" id="faq_a" name="faq_a" placeholder="คำตอบ">
    </div>
    <center><button type="submit" class="btn btn-outline-success">เพิ่มข้อมูล</button></center>
    </form>
</div>
</section>