<?php include("../../config/connection.php");
    
            $sql = "DELETE FROM faq WHERE faq_id = '".$_GET["id"]."'";
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location:../../edit-faq");
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
 
?>