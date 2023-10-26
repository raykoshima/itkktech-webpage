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
        <span>ผลงาน - การทำงานผู้สำเร็จการศึกษา</span><br>
        <h2>ผลงาน - การทำงานผู้สำเร็จการศึกษา</h2>
    </div>
  <?php //php techer info
    $editactivity_query = "SELECT * FROM congratulations" ; 
    $editactivity_result = mysqli_query($con, $editactivity_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert_congratulations"><button type="button" class="btn btn-outline-success">เพิ่มผลงาน - การทำงานผู้สำเร็จการศึกษา</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
        <th scope="col">ลำดับ</th>
          <th scope="col">รูปภาพ</th>
          <th scope="col">ชื่อผู้โพส</th>
          <th scope="col">ตำแหน่ง</th>
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
            <form method="post" action="pages/edit_congratulations_edit.php?congratulations_id=<?php echo $editactivity_row["congratulations_id"];?>">
            <td><?php echo $editactivity_row["congratulations_id"];?></td>
            <td><a href="assets/img/congratulations/<?php echo $editactivity_row["img"];?>" target="_blank"><img src="assets/img/congratulations/<?php echo $editactivity_row["img"];?>" width="150px" height="150px"></a></th>
              <td><?php echo $editactivity_row["name"];?></td>
              <td><?php echo $editactivity_row["level"];?></td>
              <td><?php echo $editactivity_row["details"];?></td>

              <td><?php echo $leftorright;?></td>
              <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
            </form>
          </tr>
        <?php } ?>
    </tbody>
  </table>
  
</section>