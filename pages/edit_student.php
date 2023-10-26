<?php
if(isset($class)){
    if($class == "1"){
        $GLOBALS['outputtext'] = "ปวช.1";
    }
    elseif($class == "2"){
        $GLOBALS['outputtext'] = "ปวช.2";
    }
    elseif($class == "3"){
        $GLOBALS['outputtext'] = "ปวช.3";
    }
    elseif($class == "4"){
        $GLOBALS['outputtext'] = "ปวส.1";
    }
    elseif($class == "5"){
        $GLOBALS['outputtext'] = "ปวส.2";
    }
}
function status($statusid){
    if($statusid == 0){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-danger'>พ้นสภาพ</button>";
    }
    elseif($statusid == 1){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-success'>ศึกษาอยู่</button>";
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
    <div class="section-header" data-aos="fade-up">
        <span>รายชื่อนักเรียนชั้น <?php echo $outputtext?></span><br>
        <h2>รายชื่อนักเรียนชั้น <?php echo $outputtext?></h2>
    </div>
  <?php //php techer info
    $student_query = "SELECT * FROM student WHERE class = '$class'" ; 
    $student_result = mysqli_query($con, $student_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert_student<?php echo $class;?>"><button type="button" class="btn btn-outline-success">เพิ่มรายชื่อนักเรียน <?php echo $outputtext?></button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">รหัสนักศึกษา</th>
          <th scope="col">เลขประจำตัวประชาชน</th>
          <th scope="col">ชื่อ</th>
          <th scope="col">ที่อยู่</th>
          <th scope="col">เบอร์โทรศัพท์</th>
          <th scope="col">สถานะ</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($student_row = mysqli_fetch_array($student_result)) { 
        $statusid = $student_row["status"];
        status($statusid);
      ?>
        <tr>
          <form method="post" action="pages/edit_student_edit.php?id=<?php echo $student_row["std_id"];?>">
            <td><?php echo $student_row["stdcard_id"];?></td>
            <td><?php echo $student_row["card_id"];?></td>
            <td><?php echo $student_row["name"];?></td>
            <td><?php echo $student_row["address"];?></td>
            <td><?php echo $student_row["phonenum"];?></td>
            <td><?php echo $statustext;?></td>
            <input type="hidden" name="statstext" value="<?php echo $outputtext?>">
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>