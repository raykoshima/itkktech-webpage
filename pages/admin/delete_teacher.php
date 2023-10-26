<?php include("../../config/connection.php");
    $sql1 = "SELECT * FROM teacher WHERE teacher_id='".$_GET["id"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../assets/img/teacher_image/";
    $fileupload = $row1["img"];
    $filelocation = $path."".$fileupload;
              
            unlink($filelocation);
            $sql = "DELETE FROM teacher WHERE teacher_id = '".$_GET["id"]."'";
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location: ../../edit-teacher");
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
 
?>