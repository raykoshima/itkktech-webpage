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
<div class="section-header"  data-aos="fade-up">
    <h2>เพิ่มโปรแกรม</h2>
</div>
<div class="container"  data-aos="fade-up">
<a href="edit-download"><button type="button" class="btn btn-outline-warning">กลับไปหน้า list</button></a><br>
    <form method="post" action="pages/admin/insert_download_save.php" enctype="multipart/form-data">
    <br><div class="form-group">
        <label for="program_name">ชื่อโปรแกรม</label>
        <input type="text" class="form-control" id="program_name" name="program_name" placeholder="ชื่อโปรแกรม">
    </div>
    <div class="form-group">
        <label for="content">คำอธิบาย</label>
        <input type="text" class="form-control" id="content" name="content" placeholder="คำอธิบาย">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">ไฟล์</label>
        <input class="form-control" type="file" id="formFile" name="fileupload">
    </div>
    <center><button type="submit" class="btn btn-outline-success">เพิ่มข้อมูล</button></center>
    </form>
</div>
</section>