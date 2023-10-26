<?php include("../../config/connection.php");
$filechecknaha = $_FILES['fileupload']['name'];
$conz= mysqli_connect("localhost","root","123456789","it_kkt2");
$checkfilename = "SELECT * FROM download WHERE link = '$filechecknaha' ";
$checkfile_res = mysqli_query($conz,$checkfilename);
if(mysqli_num_rows($checkfile_res)==1){
    echo "<script type='text/javascript'>";
    echo "alert('มีไฟล์นี้อยู่ในระบบแล้ว');";
    echo "history.back()";
    echo "</script>";
}
else{
    $sql1 = "SELECT link FROM download WHERE id='".$_POST["idz"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../program/";
    $fileupload = $row1["link"];
    $filelocation = $path."".$fileupload;

    $ID = $_POST["idz"];
    $NAME = $_POST["name"];
    $CONTENT = $_POST["content"];

    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $filename = $_FILES['fileupload']['name'];
    $newname = $filename;
    $path_copy=$path.$newname;
    $path_link=$path.$newname;
    

if($_FILES["fileupload"]["error"] != 0){
            $ID = $_POST["idz"];
            $NAME = $_POST["name"];
            $CONTENT = $_POST["content"];
                
            $sql = "UPDATE download SET  
                name='$NAME' ,
                content='$CONTENT'
                WHERE id='$ID' ";
            
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
            
            mysqli_close($con);
            if($result){
                header("Location: ../../edit-download");
                
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

            $sql = "UPDATE download SET  
                    link='$newname' , 
                    name='$NAME' ,
                    content='$CONTENT'
                    WHERE id='$ID' ";
         
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location: ../../edit-download");
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
}
}   
?>