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
    <h2>เพิ่มกิจกรรม</h2>
</div>
<div class="container">
<a href="edit-activity"><button type="button" class="btn btn-outline-warning">กลับไปหน้ารายชื่อ</button></a><br>
    <form method="post" action="pages/admin/insert_activity_save.php" enctype="multipart/form-data">
    <br><div class="form-group">
        <label for="activity_header">หัวข้อกิจกรรม</label>
        <input type="text" class="form-control" id="activity_header" name="activity_header" placeholder="หัวข้อกิจกรรม">
    </div>
    <div class="form-group">
        <label for="activity_content">เนื้อหา</label>
        <input type="text" class="form-control" id="activity_content" name="activity_content" placeholder="เนื้อหา">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">รูปภาพ</label>
        <input class="form-control" type="file" id="formFile" name="fileupload">
    </div>
    <center><button type="submit" class="btn btn-outline-success">เพิ่มข้อมูล</button></center>
    </form>
</div>
</section>