<?php include("../../config/connection.php");


    $sql1 = "SELECT img FROM teacher WHERE teacher_id='".$_POST["idz"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../assets/img/teacher_image/";
    $fileupload = $row1["img"];
    $filelocation = $path."".$fileupload;

    $T_ID = $_POST["idz"];
    $T_NAME = $_POST["name"];
    $T_LEVEL = $_POST["level"];

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
            $T_NAME = $_POST["name"];
            $T_LEVEL = $_POST["level"];
                
            $sql = "UPDATE teacher SET  
                name='$T_NAME' ,
                level='$T_LEVEL'
                WHERE teacher_id='$T_ID' ";
            
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
}
else{
              
            unlink($filelocation);
            move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	

            $sql = "UPDATE teacher SET  
                    img='$newname' , 
                    name='$T_NAME' ,
                    level='$T_LEVEL'
                    WHERE teacher_id='$T_ID' ";
         
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
}
            
?>