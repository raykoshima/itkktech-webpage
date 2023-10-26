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
    $path = "../../program/";

    $P_NAME = $_POST["program_name"];
    $CONTENT = $_POST["content"];

    $upload=$_FILES['fileupload'];
    $type = strrchr($_FILES['fileupload']['name'],".");
    $filename = $_FILES['fileupload']['name'];
    $newname = $filename;
    $path_copy=$path.$newname;

    move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);

    $sql = "INSERT INTO download(link, name, content) 
            VALUES ('$newname','$P_NAME','$CONTENT')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit-download");
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
}
?>