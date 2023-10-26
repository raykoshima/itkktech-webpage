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
        <span>รายชื่อครูผู้สอน</span><br>
        <h2>รายชื่อครูผู้สอน</h2>
    </div>
  <?php //php techer info
    $editteacher_query = "SELECT * FROM teacher" ; 
    $editteacher_result = mysqli_query($con, $editteacher_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert_teacher"><button type="button" class="btn btn-outline-success">เพิ่มรายชื่อครู</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">รูปภาพ</th>
          <th scope="col">ชื่อ</th>
          <th scope="col">ตำแหน่ง</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($editteacher_row = mysqli_fetch_array($editteacher_result)) { 
        $gettid = $editteacher_row['teacher_id'];
      ?>
        <tr>
          <form method="post" action="pages/edit_teacher_edit.php?id=<?php echo $editteacher_row["teacher_id"];?>">
            <td><a href="assets/img/teacher_image/<?php echo $editteacher_row["img"];?>" target="_blank"><img src="assets/img/teacher_image/<?php echo $editteacher_row["img"];?>" width="150px" height="150px"></a></th>
            <td><?php echo $editteacher_row["name"];?></td>
            <td><?php echo $editteacher_row["level"];?></td>
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>