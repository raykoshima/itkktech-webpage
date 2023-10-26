<?php
function leftrightcheck($leftright){// เช็ค คู่คี่ เพื่อสลับ ซ้าย-ขวา
    if($leftright == 0){
        $GLOBALS['leftorright'] = "ซ้าย"; // เลขคู่
    }
    elseif($leftright == 1){
        $GLOBALS['leftorright'] = "ขวา"; // เลขคี่
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
        <span>ผลงาน - การแข่งขันทักษะ</span><br>
        <h2>ผลงาน - การแข่งขันทักษะ</h2>
    </div>
  <?php //php techer info
    $editactivity_query = "SELECT * FROM skill" ; 
    $editactivity_result = mysqli_query($con, $editactivity_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert_skills"><button type="button" class="btn btn-outline-success">เพิ่มผลงาน - การแข่งขันทักษะ</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
        <th scope="col">ลำดับ</th>
        <th scope="col">รูปภาพ</th>
          <th scope="col">ชื่อผู้เข้าแข่งขัน</th>
          <th scope="col">แผนกวิชา</th>
          <th scope="col">ระดับ</th>
          <th scope="col">รางวัลที่ได้รับ</th>
          <th scope="col">วันที่แข่ง</th>
          <th scope="col">รายละเอียด</th>
          <th scope="col">แสดงผล</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
        while($editactivity_row = mysqli_fetch_array($editactivity_result)) { 

          $leftright =$editactivity_row["leftorright"];
          leftrightcheck($leftright);
        ?>
          <tr>
            <form method="post" action="pages/edit_skills_edit.php?id_skill=<?php echo $editactivity_row["id_skill"];?>">
            <td><?php echo $editactivity_row["id_skill"];?></td>
            <td><a href="assets/img/skills/<?php echo $editactivity_row["img"];?>" target="_blank"><img src="assets/img/skills/<?php echo $editactivity_row["img"];?>" width="150px" height="150px"></a></th>
              <td><?php echo $editactivity_row["name"];?></td>
              <td><?php echo $editactivity_row["department"];?></td>
              <td><?php echo $editactivity_row["class"];?></td>
              <td><?php echo $editactivity_row["reward"];?></td>
              <td><?php echo $editactivity_row["date"];?></td>
              <td><?php echo $editactivity_row["details"];?></td>

              <td><?php echo $leftorright;?></td>
              <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
            </form>
          </tr>
        <?php } ?>
    </tbody>
  </table>
  
</section>