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
        <span>แก้ไขรายการดาวน์โหลด</span><br>
        <h2>แก้ไขรายการดาวน์โหลด</h2>
    </div>
  <?php //php techer info
    $editdownload_query = "SELECT * FROM download" ; 
    $editdownload_result = mysqli_query($con, $editdownload_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert-download"><button type="button" class="btn btn-outline-success">เพิ่มรายการ</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">ชื่อไฟล์</th>
          <th scope="col">ชื่อแสดง</th>
          <th scope="col">คำอธิบาย</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($editdownload_row = mysqli_fetch_array($editdownload_result)) { 
      ?>
        <tr>
          <form method="post" action="pages/edit_download_edit.php?id=<?php echo $editdownload_row["id"];?>">
            <td><a href="program/<?php echo $editdownload_row["link"];?>" download><?php echo $editdownload_row["link"];?></th>
            <td><?php echo $editdownload_row["name"];?></td>
            <td><?php echo $editdownload_row["content"];?></td>
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>