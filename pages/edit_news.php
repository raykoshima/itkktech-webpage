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
        <span>ข่าวสารทั้งหมด</span><br>
        <h2>ข่าวสารทั้งหมด</h2>
    </div>
  <?php //php techer info
    $editactivity_query = "SELECT * FROM news" ; 
    $editactivity_result = mysqli_query($con, $editactivity_query); 
    ?>
        <div class="container" data-aos="fade-up">
        <a href="insert-news"><button type="button" class="btn btn-outline-success">เพิ่มข่าวสาร</button></a>&nbsp;<br>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">รูปภาพ</th>
          <th scope="col">หัวเรื่อง</th>
          <th scope="col">เนื้อหา</th>
          <th scope="col">ตำแหน่งรูป</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($editactivity_row = mysqli_fetch_array($editactivity_result)) { 

        $leftright =$editactivity_row["leftorright"];
        leftrightcheck($leftright);
      ?>
        <tr>
          <form method="post" action="pages/edit_news_edit.php?id=<?php echo $editactivity_row["news_id"];?>">
            <td><a href="assets/img/news_image/<?php echo $editactivity_row["img"];?>" target="_blank"><img src="assets/img/news_image/<?php echo $editactivity_row["img"];?>" width="150px" height="150px"></a></th>
            <td><?php echo $editactivity_row["title"];?></td>
            <td><?php echo $editactivity_row["content"];?></td>
            <td><?php echo $leftorright;?></td>
            <td><button type="submit" class="btn btn-outline-warning">แก้ไข</button></a></td>
          </form>
        </tr>
      <?php } ?>
  </tbody>
</table>

</section>