<?php include("../../config/connection.php");


    $sql1 = "SELECT image_link FROM activity WHERE activity_id='".$_POST["idz"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../assets/img/activity_image/";
    $fileupload = $row1["image_link"];
    $filelocation = $path."".$fileupload;

    $T_ID = $_POST["idz"];
    $T_NAME = $_POST["header"];
    $T_LEVEL = $_POST["content"];

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
            $T_ID = $_POST["idz"];
            $T_NAME = $_POST["header"];
            $T_LEVEL = $_POST["content"];
                
            $sql = "UPDATE activity SET  
                header='$T_NAME' ,
                info='$T_LEVEL'
                WHERE activity_id='$T_ID' ";
            
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
            
            mysqli_close($con);
            if($result){
                header("Location: ../../edit-activity");
                
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

            $sql = "UPDATE activity SET  
                    image_link='$newname' , 
                    header='$T_NAME' ,
                    info='$T_LEVEL'
                    WHERE activity_id='$T_ID' ";
         
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location: ../../edit-activity");
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
}
            
?>