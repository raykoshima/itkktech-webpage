<?php include("../../config/connection.php");


    $sql1 = "SELECT img FROM news WHERE news_id='".$_POST["idz"]."'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    
    $path = "../../assets/img/news_image/";
    $fileupload = $row1["img"];
    $filelocation = $path."".$fileupload;

    $N_ID = $_POST["idz"];
    $N_NAME = $_POST["title"];
    $N_LEVEL = $_POST["content"];

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
            $N_NAME = $_POST["title"];
            $N_LEVEL = $_POST["content"];
                
            $sql = "UPDATE news SET  
                title='$N_NAME' ,
                content='$N_LEVEL'
                WHERE news_id='$N_ID' ";
            
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
            
            mysqli_close($con);
            if($result){
                header("Location: ../../edit-news");
                
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

            $sql = "UPDATE news SET  
                    img='$newname' , 
                    title='$N_NAME' ,
                    content='$N_LEVEL'
                    WHERE news_id='$N_ID' ";
         
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
         
        mysqli_close($con);
        if($result){
            header("Location: ../../edit-news");
            
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Error back to delete again');";
                echo "</script>";
        }
}
            
?>