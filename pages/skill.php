


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
                <div class="col-md-5" >
                    <img src="assets/img/skills/<?php echo $congratulations_row["img"];?>" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <!-- หัวเรื่อง -->
                        <h3>ผลการแข่งขัน</h3>
                    <!-- เนื้อหา -->
                    
                        <h3>ชื่อผู้เข้าแข่งขัน : <?php echo "" . $congratulations_row["name"] . ""; ?></h3>
                    
                        <h3>แผนกวิชา : <?php echo "" . $congratulations_row["department"] . ""; ?></h3>
                    
                    
                        <h3>ระดับ : <?php echo "" . $congratulations_row["class"] . ""; ?></h3>
                    
                    
                        <h3>รางวัลที่ได้รับ : <?php echo "" . $congratulations_row["reward"] . ""; ?></h3>
                    
                    
                        <h3>วันที่แข่ง : <?php echo "" . $congratulations_row["date"] . ""; ?></h3>
                    
                    
                        <h3>รายละเอียด : <?php echo "" . $congratulations_row["details"] . ""; ?></h3>
                    
                
                </div>
            </div>

    <?php } elseif($oddoreven == 2 ) { // เลขคี่ให้ทำ?>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up" >
                <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/skills/<?php echo $congratulations_row["img"];?>" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <!-- หัวเรื่อง -->
                    <h3>ผลการแข่งขัน</h3>
                    <!-- เนื้อหา -->
                     <h3>ชื่อผู้เข้าแข่งขัน :<?php echo "" . $congratulations_row["name"] . ""; ?></h3>
                    
                        <h3>แผนกวิชา : </h3><?php echo "" . $congratulations_row["department"] . ""; ?>
                    
                    
                        <h3>ระดับ : <?php echo "" . $congratulations_row["class"] . ""; ?></h3>
                    
                    
                        <h3>รางวัลที่ได้รับ : <?php echo "" . $congratulations_row["reward"] . ""; ?></h3>
                    
                    
                        <h3>วันที่แข่ง : <?php echo "" . $congratulations_row["date"] . ""; ?></h3>
                    
                    
                        <h3>รายละเอียด : <?php echo "" . $congratulations_row["details"] . ""; ?></h3>
                    
                </div>
            </div>
     
<?php }} ?>


</div> <!-- end container -->
</section><!-- end section -->

