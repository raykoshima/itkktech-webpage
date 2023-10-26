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
        <span>ผลงาน - การทำงานผู้สำเร็จการศึกษา</span><br>
        <h2>ผลงาน - การทำงานผู้สำเร็จการศึกษา</h2>
    </div>

    <div class="container"> <!-- container -->
    <?php
        $congratulations_query = "SELECT * FROM congratulations" ;
        $congratulations_result = mysqli_query($con, $congratulations_query);

        while ($congratulations_row = mysqli_fetch_array($congratulations_result)) {
        
    ?>
    <?php 
    $numcheck =$congratulations_row["leftorright"];
    check($numcheck);
    if($oddoreven == 1){ // เลขคู่ให้ทำ?> 
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/congratulations/<?php echo $congratulations_row["img"];?>" class="img-fluid" width='320' height='240'>
                </div>
                <div class="col-md-7">
                    <!-- หัวเรื่อง -->
                    <h3>ชื่อผู้โพส : <?php echo "" . $congratulations_row["name"] . ""; ?></h3>
                    <!-- เนื้อหา -->
                    <ul>
                        <li><h3>ตำแหน่ง : <?php echo "" . $congratulations_row["level"] . ""; ?></li></h3>
                    </ul>
                    <ul>
                        <li><h3>รายละเอียด : <?php echo "" . $congratulations_row["details"] . ""; ?></h3></li>
                    </ul>
                </div>
            </div>

    <?php } elseif($oddoreven == 2 ) { // เลขคี่ให้ทำ?>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/congratulations/<?php echo $congratulations_row["img"];?>" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <!-- หัวเรื่อง -->
                    <h3>ชื่อผู้โพส : <?php echo "" . $congratulations_row["name"] . ""; ?></h3>
                    <!-- เนื้อหา -->
                    <ul>
                        <li><h3>ตำแหน่ง : <?php echo "" . $congratulations_row["level"] . ""; ?></li></h3>
                    </ul>
                    <ul>
                        <li><p>รายละเอียด : <?php echo "" . $congratulations_row["details"] . ""; ?></li></p>
                    </ul>
                </div>
            </div>
     
<?php }} ?>


</div> <!-- end container -->
</section><!-- end section -->