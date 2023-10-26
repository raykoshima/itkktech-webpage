<?php include("../../config/connection.php");


    $path = "../../assets/img/congratulations/";

    $name = $_POST["name"];
    $level = $_POST["level"];
    $leftorright = $_POST["leftorright"];
    $details = $_POST["details"];

    $date = date("Ymd");
    $numrand = (mt_rand());
    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link=$path.$newname;

    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy); 	

    $sql = "INSERT INTO congratulations(img,name,level,leftorright,details) 
            VALUES ('$newname','$name','$level','$leftorright','$details')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit_congratulations");
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>