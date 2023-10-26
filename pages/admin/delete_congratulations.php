<?php include("../../config/connection.php");
    $sql1 = "SELECT * FROM congratulations WHERE congratulations_id='".$_GET["congratulations_id"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../assets/img/congratulations/";
    $fileupload = $row1["img"];
    $filelocation = $path."".$fileupload;
              
            unlink($filelocation);
            $sql = "DELETE FROM congratulations WHERE congratulations_id = '".$_GET["congratulations_id"]."'";
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location: ../../edit_congratulations");
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
 
?>