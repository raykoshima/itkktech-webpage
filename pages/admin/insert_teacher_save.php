<?php include("../../config/connection.php");


    $path = "../../assets/img/teacher_image/";

    $T_NAME = $_POST["t_name"];
    $T_LEVEL = $_POST["level"];

    $date = date("Ymd");
    $numrand = (mt_rand());
    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link=$path.$newname;

    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy); 	

    $sql = "INSERT INTO teacher(img, name, level) 
            VALUES ('$newname','$T_NAME','$T_LEVEL')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit-teacher");
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>