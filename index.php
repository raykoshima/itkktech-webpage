<!DOCTYPE html>
<html lang="en">
<?php 
include("config/config.php");
include("pages/h1.php"); // header หลัก

if(isset($_SESSION["admin_id"])){
  $account = 1;
}
else{
  $account = 0;
}

if(empty($_GET['thispage'])){
  $_GET['thispage'] = 'home';
}

$page = $_GET['thispage'];

if($account == 1){ // login แล้ว
  include("pages/admin/header.php");
  echo "<title>ITKKTECH | Admin</title>";
  if($page == 'home'){ // หน้าหลัก
    echo "<title>ITKKTECH | หน้าหลัก</title>";
    include("pages/header_index.php");

    include("pages/faq.php");
    include("pages/activity.php");
    include("pages/news.php");
  }
  elseif($page == 'teacher'){ // หน้ารายชื่อครู
    echo "<title>ITKKTECH | ครูผู้สอน</title>";
    include("pages/header_2.php");
    include("pages/teacher.php");
  }
  
  elseif($page == 'classroom'){ // หน้าห้องเรียน
    echo "<title>ITKKTECH | ห้องเรียน</title>";
    include("pages/header_2.php");
    include("pages/classroom.php");

  }
  elseif($page == 'download'){ // หน้า download program
    echo "<title>ITKKTECH | โปรแกรม</title>";
    include("pages/header_2.php");
    include("pages/download.php");
  }
  elseif($page == 'congratulations'){ // หน้า congratulations
    echo "<title>ITKKTECH | จบการศึกษา</title>";
    include("pages/header_2.php");
    include("pages/congratulations.php");
  }
  elseif($page == 'class1'){ // รายชื่อ ปวช.1
    echo "<title>ITKKTECH | นักเรียนปวช.1</title>";
    include("pages/header_2.php");
    $class = 1;
    include("pages/student.php");
  }
  elseif($page == 'class2'){ // รายชื่อ ปวช.2
    echo "<title>ITKKTECH | นักเรียนปวช.2</title>";
    include("pages/header_2.php");
    $class = 2;
    include("pages/student.php");
  }
  elseif($page == 'class3'){ // รายชื่อ ปวช.3
    echo "<title>ITKKTECH | นักเรียนปวช.3</title>";
    include("pages/header_2.php");
    $class = 3;
    include("pages/student.php");
  }
  elseif($page == 'class4'){ // รายชื่อ ปวส.1
    echo "<title>ITKKTECH | นักศึกษาปวส.1</title>";
    include("pages/header_2.php");
    $class = 4;
    include("pages/student.php");
  }
  elseif($page == 'class5'){ // รายชื่อ ปวส.2
    echo "<title>ITKKTECH | นักศึกษาปวส.2</title>";
    include("pages/header_2.php");
    $class = 5;
    include("pages/student.php");
  }
  elseif($page == 'skill'){ // รายชื่อ ปวส.2
    echo "<title>ITKKTECH | แข่งขันทักษะ</title>";
    include("pages/header_2.php");
    $class = 5;
    include("pages/skill.php");
  }

// ---------------------------------------------------------------- หน้า admin เฉพาะ

  
  elseif($page == 'logout'){ // logout
    include("pages/admin/logout.php");
  }
  elseif($page == 'edit-faq'){ // แก้ไข faq
    include("pages/edit_faq.php");
  }
  elseif($page == 'insert-faq'){ //
    include("pages/insert_faq.php");
  }
  elseif($page == 'edit-activity'){ // แก้ไข กิจกรรม
    include("pages/edit_activity.php");
  }
  elseif($page == 'insert-activity'){
    include("pages/insert_activity.php");
  }
  elseif($page == 'edit-news'){ // แก้ไข ข่าวสาร
    include("pages/edit_news.php");
  }
  elseif($page == 'insert-news'){
    include("pages/insert_news.php");
  }
  elseif($page == 'edit-classroom'){ // แก้ไข ประชาสัมพันธ์
    include("pages/edit_classroom.php");
  }
  elseif($page == 'insert_congratulations'){ // แก้ไข congratulations
    include("pages/insert_congratulations.php");
  }
  elseif($page == 'edit_congratulations'){ // แก้ไข congratulations
    include("pages/edit_congratulations.php");
  }
  elseif($page == 'insert_skills'){ // แก้ไข skills
    include("pages/insert_skills.php");
  }
  elseif($page == 'edit_skills'){ // แก้ไข skills
    include("pages/edit_skills.php");
  }
  elseif($page == 'insert-classroom'){
    include("pages/insert_classroom.php");
  }
  elseif($page == 'edit-teacher'){ // แก้ไขรายชื่อ ครู
    include("pages/edit_teacher.php");
  }
  elseif($page == 'insert_teacher'){
    include("pages/insert_teacher.php");
  }
  elseif($page == 'edit-year1'){ // แก้ไขรายชื่อ ปวช.1
    
    $class = 1;
    include("pages/edit_student.php");
  }
  elseif($page == 'insert_student1'){ // เพิ่มรายชื่อ ปวช.1
    $class = 1;
    include("pages/insert_student.php");
  }
  elseif($page == 'edit-year2'){ // แก้ไขรายชื่อ ปวช.2
    
    $class = 2;
    include("pages/edit_student.php");
  }
  elseif($page == 'insert_student2'){ // เพิ่มรายชื่อ ปวช.2
    $class = 2;
    include("pages/insert_student.php");
  }
  elseif($page == 'edit-year3'){ // แก้ไขรายชื่อ ปวช.3
  
    $class = 3;
    include("pages/edit_student.php");
  }
  elseif($page == 'insert_student3'){ // เพิ่มรายชื่อ ปวช.3
    $class = 3;
    include("pages/insert_student.php");
  }
  elseif($page == 'edit-year4'){ // แก้ไขรายชื่อ ปวส.1
    
    $class = 4;
    include("pages/edit_student.php");
  }
  elseif($page == 'insert_student4'){ // เพิ่มรายชื่อ ปวส.1
    $class = 4;
    include("pages/insert_student.php");
  }
  elseif($page == 'edit-year5'){ // แก้ไขรายชื่อ ปวส.2
   
    $class = 5;
    include("pages/edit_student.php");
  }
  elseif($page == 'insert_student5'){ // เพิ่มรายชื่อ ปวส.2
    $class = 5;
    include("pages/insert_student.php");
  }
  elseif($page == 'edit-download'){ // แก้ไข โปรแกรมที่ให้โหลด 
    include("pages/edit_download.php");
  }
  elseif($page == 'insert-download'){ // เพิ่มโปร
    include("pages/insert_download.php");
  }

  else{
  $page = 'home';
  echo "<title>ITKKTECH | 404</title>";
  include("pages/404.php");

  }

} else { // ยังไม่ได้ login | no login -------------------------------------------------------------------------------------------------------
  include("pages/header.php");
  if($page == 'home'){ // หน้าหลัก
    
    echo "<title>ITKKTECH | หน้าหลัก</title>";
    include("pages/header_index.php");

    //include("pages/skills.php");
    include("pages/faq.php");
    include("pages/activity.php");
    include("pages/news.php");
    
    
    
  }
  elseif($page == 'teacher'){ // หน้ารายชื่อครู
    
    echo "<title>ITKKTECH | ครูผู้สอน</title>";
    include("pages/header_2.php");

    include("pages/teacher.php");


  }
  elseif($page == 'classroom'){ // หน้าห้องเรียน
    
    echo "<title>ITKKTECH | ห้องเรียน</title>";
    include("pages/header_2.php");

    include("pages/classroom.php");

  }
  elseif($page == 'download'){ // หน้า download program
    echo "<title>ITKKTECH | โปรแกรม</title>";
    include("pages/header_2.php");
    include("pages/download.php");
  }
  elseif($page == 'congratulations'){ // หน้า congratulations
    echo "<title>ITKKTECH | congratulations</title>";
    include("pages/header_2.php");
    include("pages/congratulations.php");
  }
  elseif($page == 'skill'){ // หน้า skill
    echo "<title>ITKKTECH | skill</title>";
    include("pages/header_2.php");
    include("pages/skill.php");
  }


  elseif($page == 'system'){ // หน้า login
    echo "<title>ITKKTECH | Admin</title>";
    include("pages/header_2.php");
    include("pages/admin/form_login.php");
  }
  elseif($page == 'publicize'){
    echo "<title>ประชาสัมพันธ์</title>";
    include("pages/header_2.php");
    include("pages/publicize.php");
  }
  elseif($page == 'class1'){ // รายชื่อ ปวช.1
    echo "<title>ITKKTECH | นักเรียนปวช.1</title>";
    include("pages/header_2.php");
    $class = 1;
    include("pages/student.php");
  }
  elseif($page == 'class2'){ // รายชื่อ ปวช.2
    echo "<title>ITKKTECH | นักเรียนปวช.2</title>";
    include("pages/header_2.php");
    $class = 2;
    include("pages/student.php");
  }
  elseif($page == 'class3'){ // รายชื่อ ปวช.3
    echo "<title>ITKKTECH | นักเรียนปวช.3</title>";
    include("pages/header_2.php");
    $class = 3;
    include("pages/student.php");
  }
  elseif($page == 'class4'){ // รายชื่อ ปวส.1
    echo "<title>ITKKTECH | นักศึกษาปวส.1</title>";
    include("pages/header_2.php");
    $class = 4;
    include("pages/student.php");
  }
  elseif($page == 'class5'){ // รายชื่อ ปวส.2
    echo "<title>ITKKTECH | นักศึกษาปวส.2</title>";
    include("pages/header_2.php");
    $class = 5;
    include("pages/student.php");
  }

  else{
    $page = 'home';
    echo "<title>ITKKTECH | 404</title>";
    include("pages/404.php");

  }
}

  include("pages/footer.php");
  ?>