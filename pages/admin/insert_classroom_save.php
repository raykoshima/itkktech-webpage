<?php include("../../config/connection.php");


    $path = "../../assets/img/classroom_image/";

    $A_HEAD = $_POST["activity_header"];
    $A_CONTENT = $_POST["activity_content"];

    $date = date("Ymd");
    $numrand = (mt_rand());
    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link=$path.$newname;

    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy); 	

    $sql = "INSERT INTO classroom(img,name,level) 
            VALUES ('$newname','$A_HEAD','$A_CONTENT')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit-classroom");
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>