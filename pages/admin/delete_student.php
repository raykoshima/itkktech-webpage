<?php include("../../config/connection.php");
    $the_class = $_POST["class"];
    $sql1 = "SELECT * FROM student WHERE std_id='".$_GET["id"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
            $sql = "DELETE FROM student WHERE std_id = '".$_GET["id"]."'";
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location:../../edit-year".$the_class);
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
 
?>