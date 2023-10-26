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
    <h2>เพิ่มผลงาน - การทำงานผู้สำเร็จการศึกษา</h2>
</div>
<div class="container">
<a href="edit_congratulations"><button type="button" class="btn btn-outline-warning">กลับไปหน้าผู้สำเร็จการศึกษา</button></a><br>
    <form method="post" action="pages/admin/insert_congratulations_save.php" enctype="multipart/form-data">
    <br><div class="form-group">
        <label for="activity_header">ชื่อผู้โพส</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="หัวข้อกิจกรรม">
    </div>
    <div class="form-group">
        <label for="activity_content">ตำแหน่ง</label>
        <input type="text" class="form-control" id="level" name="level" placeholder="เนื้อหา">
    </div>
    <div class="form-group">
        <label for="activity_content">รายละเอียด</label>
        <input type="text" class="form-control" id="details" name="details" placeholder="เนื้อหา">
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