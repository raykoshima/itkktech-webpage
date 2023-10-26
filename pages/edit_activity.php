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
        <span>กิจกรรมทั้งหมด</span><br>
        <h2>กิจกรรมทั้งหมด</h2>
    </div>
  <?php //php techer info
    $editactivity_query = "SELECT * FROM activity" ; 
    $editactivity_result = mysqli_query($con, $editactivity_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert-activity"><button type="button" class="btn btn-outline-success">เพิ่มกิจกรรม</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">รูปภาพ</th>
          <th scope="col">หัวข้อกิจกรรม</th>
          <th scope="col">เนื้อหา</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($editactivity_row = mysqli_fetch_array($editactivity_result)) { 
        $gettid = $editactivity_row['activity_id'];
      ?>
        <tr>
          <form method="post" action="pages/edit_activity_edit.php?id=<?php echo $editactivity_row["activity_id"];?>">
            <td><a href="assets/img/activity_image/<?php echo $editactivity_row["image_link"];?>" target="_blank"><img src="assets/img/activity_image/<?php echo $editactivity_row["image_link"];?>" width="150px" height="150px"></a></th>
            <td><?php echo $editactivity_row["header"];?></td>
            <td><?php echo $editactivity_row["info"];?></td>
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>