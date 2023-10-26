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
    <h2>เพิ่มข่าวสาร</h2>
</div>
<div class="container">
<a href="edit-news"><button type="button" class="btn btn-outline-warning">กลับไปหน้าข่าวสาร</button></a><br>
    <form method="post" action="pages/admin/insert_news_save.php" enctype="multipart/form-data">
    <br><div class="form-group">
        <label for="activity_header">หัวเรื่อง</label>
        <input type="text" class="form-control" id="activity_header" name="activity_header" placeholder="หัวข้อกิจกรรม">
    </div>
    <div class="form-group">
        <label for="activity_content">เนื้อหา</label>
        <input type="text" class="form-control" id="activity_content" name="activity_content" placeholder="เนื้อหา">
    </div>
    <div class="form-group">
          <label for="pos">ตำแหน่งรูป</label>
          <select class="form-select form-control" size="2" name="pos" id="pos">
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