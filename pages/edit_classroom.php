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
        <span>ห้องเรียนทั้งหมด</span><br>
        <h2>ห้องเรียนทั้งหมด</h2>
    </div>
  <?php //php techer info
    $editactivity_query = "SELECT * FROM classroom" ; 
    $editactivity_result = mysqli_query($con, $editactivity_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert-classroom"><button type="button" class="btn btn-outline-success">เพิ่มห้องเรียน</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">รูปภาพ</th>
          <th scope="col">ชื่อห้อง</th>
          <th scope="col">คำอธิบาย</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($editactivity_row = mysqli_fetch_array($editactivity_result)) { 

      ?>
        <tr>
          <form method="post" action="pages/edit_classroom_edit.php?id=<?php echo $editactivity_row["classroom_id"];?>">
            <td><a href="assets/img/classroom_image/<?php echo $editactivity_row["img"];?>" target="_blank"><img src="assets/img/classroom_image/<?php echo $editactivity_row["img"];?>" width="150px" height="150px"></a></th>
            <td><?php echo $editactivity_row["name"];?></td>
            <td><?php echo $editactivity_row["level"];?></td>
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>