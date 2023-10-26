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
    <h2>เพิ่มรายชื่อครูผู้สอน</h2>
</div>
<div class="container">
<a href="edit-teacher"><button type="button" class="btn btn-outline-warning">กลับไปหน้ารายชื่อ</button></a><br>
    <form method="post" action="pages/admin/insert_teacher_save.php" enctype="multipart/form-data">
    <br><div class="form-group">
        <label for="teacher_name">ชื่อครูผู้สอน</label>
        <input type="text" class="form-control" id="teacher_name" name="t_name" placeholder="ชื่อครูผู้สอน">
    </div>
    <div class="form-group">
        <label for="level">ตำแหน่ง</label>
        <input type="text" class="form-control" id="level" name="level" placeholder="ตำแหน่ง">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">รูปภาพ</label>
        <input class="form-control" type="file" id="formFile" name="fileupload">
    </div>
    <center><button type="submit" class="btn btn-outline-success">เพิ่มข้อมูล</button></center>
    </form>
</div>
</section>