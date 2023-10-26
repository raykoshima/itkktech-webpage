<?php
if(isset($class)){
    if($class == "1"){
        $GLOBALS['outputtext'] = "ปวช.1";
    }
    elseif($class == "2"){
        $GLOBALS['outputtext'] = "ปวช.2";
    }
    elseif($class == "3"){
        $GLOBALS['outputtext'] = "ปวช.3";
    }
    elseif($class == "4"){
        $GLOBALS['outputtext'] = "ปวส.1";
    }
    elseif($class == "5"){
        $GLOBALS['outputtext'] = "ปวส.2";
    }
}
function status($statusid){
    if($statusid == 0){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-danger'>พ้นสภาพ</button>";
    }
    elseif($statusid == 1){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-success'>ศึกษาอยู่</button>";
    }
    elseif($statusid == 2){
        $GLOBALS['statustext'] = "<button type='button' class='btn btn-secondary'>ไม่ทราบ</button>";
    }
}
?>
<section>
    <div class="section-header" data-aos="fade-up">
        <span>รายชื่อนักเรียน <?php echo $outputtext?></span><br>
        <h2>รายชื่อนักเรียน <?php echo $outputtext?></h2>
    </div>

<?php //php techer info
$student_query = "SELECT * FROM student WHERE class = '$class'" ; 
$student_result = mysqli_query($con, $student_query); 
?>
    <div class="container-sm" data-aos="fade-up">
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">รหัสนักศึกษา</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">สถานะ</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($student_row = mysqli_fetch_array($student_result)) {
    $statusid = $student_row["status"];
    status($statusid);
  ?>
    <tr>
      <td><?php echo $student_row["stdcard_id"];?></td>
      <td><?php echo $student_row["name"];?></td>
      <td><?php echo $statustext;?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

    </section>