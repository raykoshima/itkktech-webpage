<?php
function check($numcheck){// เช็ค คู่คี่ เพื่อสลับ ซ้าย-ขวา
    if($numcheck == 0){
        $GLOBALS['oddoreven'] = 1; // เลขคู่
    }
    else{
        $GLOBALS['oddoreven'] = 2; // เลขคี่
    }
}
?>




<section id="features" class="features"> <!-- section -->

    <div class="section-header">
        <span>ผลงาน - การแข่งขันทักษะ</span><br>
        <h2>ผลงาน - การแข่งขันทักษะ</h2>
    </div>

    <div class="container"> <!-- container -->
    <?php
        $congratulations_query = "SELECT * FROM skill" ;
        $congratulations_result = mysqli_query($con, $congratulations_query);

        while ($congratulations_row = mysqli_fetch_array($congratulations_result)) {
        
    ?>
    <?php 
    $numcheck =$congratulations_row["leftorright"];
    check($numcheck);
    if($oddoreven == 1){ // เลขคู่ให้ทำ?> 
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/skills/<?php echo $congratulations_row["img"];?>" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <!-- หัวเรื่อง -->
                    <h3>ลำดับ : <?php echo "" . $congratulations_row["id_skill"] . ""; ?></h3>
                    <!-- เนื้อหา -->
                    <ul>
                        <li><h3>ชื่อผู้เข้าแข่งขัน :<?php echo "" . $congratulations_row["name"] . ""; ?></li></h3>
                    </ul>
                    <ul>
                        <li><h3><p>แผนกวิชา : <?php echo "" . $congratulations_row["department"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>ระดับ : <?php echo "" . $congratulations_row["class"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>รางวัลที่ได้รับ : <?php echo "" . $congratulations_row["reward"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>วันที่แข่ง : <?php echo "" . $congratulations_row["date"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>รายละเอียด : <?php echo "" . $congratulations_row["details"] . ""; ?></li></p></h3>
                    </ul>
                
                </div>
            </div>

    <?php } elseif($oddoreven == 2 ) { // เลขคี่ให้ทำ?>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up" >
                <div class="col-md-5 order-1 order-md-2">
                <h4><span><center><img src="assets/img/skills/<?php echo $teacher_row["img"];?>" width='320' height='240'></center></span></h4>
                </div>
                <div class="col-md-7">
                    <!-- หัวเรื่อง -->
                    <h3>ลำดับ : <?php echo "" . $congratulations_row["id_skill"] . ""; ?></h3>
                    <!-- เนื้อหา -->
                    <ul>
                        <li><h3>ชื่อผู้เข้าแข่งขัน :<?php echo "" . $congratulations_row["name"] . ""; ?></li></h3>
                    </ul>
                    <ul>
                        <li><h3><p>แผนกวิชา : <?php echo "" . $congratulations_row["department"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>ระดับ : <?php echo "" . $congratulations_row["class"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>รางวัลที่ได้รับ : <?php echo "" . $congratulations_row["reward"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>วันที่แข่ง : <?php echo "" . $congratulations_row["date"] . ""; ?></li></p></h3>
                    </ul>
                    <ul>
                        <li><h3><p>รายละเอียด : <?php echo "" . $congratulations_row["details"] . ""; ?></li></p></h3>
                    </ul>
                </div>
            </div>
     
<?php }} ?>


</div> <!-- end container -->
</section><!-- end section -->