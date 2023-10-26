<?php include("../../config/connection.php");


    $path = "../../assets/img/skills/";

    $N_NAME = $_POST["name"];
    $N_LEVEL = $_POST["department"];
    $class = $_POST["class"];
    $reward = $_POST["reward"];
    $date = $_POST["date"];
    $details = $_POST["details"];
    $leftorright = $_POST["leftorright"];
   

    $date = date("Ymd");
    $numrand = (mt_rand());
    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link=$path.$newname;

    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy); 	

    $sql = "INSERT INTO skill(img,name,department,class,reward,date,details,leftorright) 
            VALUES ('$newname','$N_NAME','$N_LEVEL','$class','$reward','$date','$details','$leftorright')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit_skills");
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>