<?php include("../../config/connection.php");


    $sql1 = "SELECT img FROM congratulations WHERE congratulations_id='".$_POST["idz"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../assets/img/congratulations/";
    $fileupload = $row1["img"];
    $filelocation = $path."".$fileupload;

    $N_ID = $_POST["idz"];
    $N_NAME = $_POST["name"];
    $N_LEVEL = $_POST["level"];
    $leftorright = $_POST["leftorright"];
    $details = $_POST["details"];

    $date = date("Ymd");
    $numrand = (mt_rand());
    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $newname = $date.$numrand.$type;
    $path_copy=$path.$newname;
    $path_link=$path.$newname;
    

    if($_POST["idz"]==''){
        echo "<script type='text/javascript'>"; 
        echo "alert('Error Contact Admin !!');"; 
        echo "window.location = 'Showdata.php'; "; 
        echo "</script>";
    }

if($_FILES["fileupload"]["error"] != 0){
    $N_ID = $_POST["idz"];
    $N_NAME = $_POST["name"];
    $N_LEVEL = $_POST["level"];
    $leftorright = $_POST["leftorright"];
    $details = $_POST["details"];

                
            $sql = "UPDATE congratulations SET  
                 img='$newname',
                name='$N_NAME' ,
                level='$N_LEVEL',
                leftorright='$leftorright',
                details='$details'
                WHERE congratulations_id='$N_ID' ";
            
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
}
else{
              
            unlink($filelocation);
            move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	

            $sql = "UPDATE congratulations SET  
                     img='$newname',
                    name='$N_NAME' ,
                    level='$N_LEVEL',
                    leftorright='$leftorright',
                    details='$details'
                    WHERE congratulations_id='$N_ID' ";
         
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
}
            
?>