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
    <h2>เพิ่มผลงาน - การแข่งขันทักษะ</h2>
</div>
<div class="container">
<a href="edit_skills"><button type="button" class="btn btn-outline-warning">กลับไปหน้าผู้สำเร็จการศึกษา</button></a><br>
    <form method="post" action="pages/admin/insert_skills_save.php" enctype="multipart/form-data">
    <!--<br><div class="form-group">
        <label for="activity_header">ลำดับ :</label>
        <input type="text" class="form-control" id="id_skill" name="id_skill" placeholder="ลำดับ">
    </div>-->
    <div class="form-group">
        <label for="activity_content">ชื่อผู้เข้าแข่งขัน :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อผู้เข้าแข่งขัน">
    </div>
    <div class="form-group">
        <label for="activity_content">แผนกวิชา :</label>
        <input type="text" class="form-control" id="department" name="department" placeholder="แผนกวิชา">
    </div>
    <div class="form-group">
        <label for="activity_content">ระดับ :</label>
        <input type="text" class="form-control" id="class" name="class" placeholder="ระดับ">
    </div>
    <div class="form-group">
        <label for="activity_content">รางวัลที่ได้รับ : </label>
        <input type="text" class="form-control" id="reward" name="reward" placeholder="รางวัลที่ได้รับ">
    </div>
    <div class="form-group">
        <label for="activity_content">วันที่แข่ง :</label>
        <input type="date" class="form-control" id="date" name="date" placeholder="วันที่แข่ง">
    </div>
    <div class="form-group">
        <label for="activity_content">ราบละเอียด :</label>
        <input type="text" class="form-control" id="details" name="details" placeholder="ราบละเอียด">
    </div>

    <div class="form-group">
          <label for="pos">แสดงผล</label>
          <select class="form-select form-control" size="2" name="leftorright" id="leftorright">
            <option value="0">ซ้าย</option>
            <option value="1">ขวา</option>
          </select><br>
          
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">รูปภาพ</label>
        <input class="form-control" type="file" id="formFile" name="fileupload">
    </div>
    <center><button type="submit" class="btn btn-outline-success">เพิ่มข้อมูล</button></center>
    </form>
</div>
</section>