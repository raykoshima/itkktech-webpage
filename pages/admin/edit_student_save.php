<?php include("../../config/connection.php");

    $STD_ID = $_POST["idz"];
    $std_name = $_POST["name"];
    $std_stdcard_id = $_POST["stdcard_id"];
    $std_card_id = $_POST["card_id"];
    $std_address = $_POST["address"]; 
    $std_phonenum = $_POST["phonenum"];
    $std_status = $_POST["status"];

    $the_class = $_POST["class"];

    $sql = "UPDATE student SET 
            stdcard_id = '$std_stdcard_id',
            card_id = '$std_card_id',
            name = '$std_name',
            address = '$std_address',
            phonenum = '$std_phonenum',
            status = '$std_status'
            WHERE std_id = '$STD_ID'";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit-year".$the_class);
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>