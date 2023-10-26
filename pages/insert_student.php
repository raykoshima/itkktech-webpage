<?php 
if(isset($class)){
    if($class == "1"){
        $GLOBALS['outputtext'] = "นักเรียนปวช.1";
    }
    elseif($class == "2"){
        $GLOBALS['outputtext'] = "นักเรียนปวช.2";
    }
    elseif($class == "3"){
        $GLOBALS['outputtext'] = "นักเรียนปวช.3";
    }
    elseif($class == "4"){
        $GLOBALS['outputtext'] = "นักศึกษาปวส.1";
    }
    elseif($class == "5"){
        $GLOBALS['outputtext'] = "นักศึกษาปวส.2";
    }
}
function status($statusid){
    if($statusid == 0){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-danger'>พ้นสภาพ</button>";
    }
    elseif($statusid == 1){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-success'>เรียนอยู่</button>";
    }
    elseif($statusid == 2){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-secondary'>ไม่ทราบ</button>";
    }
}
?>
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
    <h2>เพิ่มรายชื่อ<?php echo $outputtext;?></h2>
</div>
<div class="container">
<a href="edit-year<?php echo $class;?>"><button type="button" class="btn btn-outline-warning">กลับไปหน้ารายชื่อ</button></a>
    <form method="post" action="pages/admin/insert_student_save.php">
    <div class="form-group">
        <label for="stdcard_id">รหัสนักศึกษา</label>
        <input type="number" class="form-control" id="stdcard_id" name="stdcard_id" placeholder="รหัสนักศึกษา">
    </div>
    <div class="form-group">
        <label for="card_id">เลขประจำตัวประชาชน</label>
        <input type="number" class="form-control" id="card_id" name="card_id" placeholder="เลขประจำตัวประชาชน">
    </div>
    <div class="form-group">
        <label for="name">ชื่อ</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ">
    </div>
    <div class="form-group">
        <label for="address">ที่อยู่</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="phonenum">เบอร์โทรศัพท์</label>
        <input type="number" class="form-control" id="phonenum" name="phonenum" placeholder="เบอร์โทรศัพท์">
    </div>
    <div class="form-group">
        <label for="status">สถานะ</label>
        <select class="form-control" id="status" name="status">
        <option value="1">ศึกษาอยู่</option>
        <option value="0">พ้นสภาพ</option>
        <option value="2">ไม่ทราบ</option>
        </select>
    </div>
    <input type="hidden" name="class" value="<?php echo $class;?>"><br>
    <center><button type="submit" class="btn btn-outline-success">เพิ่มข้อมูล</button></center>
    </form>
</div>
</section>