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
        <span>ข่าวสารแผนก</span><br>
        <h2>ข่าวสารแผนก</h2>
    </div>

    <div class="container"> <!-- container -->
    <?php
        $news_query = "SELECT * FROM news" ;
        $news_result = mysqli_query($con, $news_query);

        while ($news_row = mysqli_fetch_array($news_result)) {
        
    ?>
    <?php 
    $numcheck =$news_row["leftorright"];
    check($numcheck);
    if($oddoreven == 1){ // เลขคู่ให้ทำ?> 
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/news_image/<?php echo $news_row["img"];?>" class="img-fluid"  width='320' height='240'>
                </div>
                <div class="col-md-7">
                   <center><!-- หัวเรื่อง -->
                   <ul>
                        <h2>ชื่อหัวข้อข่าว : </h2><h3><?php echo "  " . $news_row["title"] . ""; ?></h3>
                    </ul>
                    <!-- เนื้อหา -->
                    <ul>
                        <h2>คำอธิบาย :</h2> <h3><p><p><p><?php echo "  " . $news_row["content"] . ""; ?></h3>
                    </ul></center>
                </div>
            </div>

    <?php } elseif($oddoreven == 2 ) { // เลขคี่ให้ทำ?>
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/news_image/<?php echo $news_row["img"];?>" class="img-fluid"  width='320' height='240'>
                </div>
                <div class="col-md-7">
                    <center><!-- หัวเรื่อง -->
                    <ul>
                        <h2>ชื่อหัวข้อข่าว : </h2><h3><?php echo "  " . $news_row["title"] . ""; ?></h3>
                    </ul>
                    <!-- เนื้อหา -->
                    <ul>
                        <h2>คำอธิบาย :</h2> <h3><p><p><p><?php echo "  " . $news_row["content"] . ""; ?></h3>
                    </ul></center>
                </div>
            </div>
     
<?php }} ?>


</div> <!-- end container -->
</section><!-- end section -->

