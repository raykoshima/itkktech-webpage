<?php include("../../config/connection.php");

    $STD_ID = $_POST["idz"];
    $FAQ_Q = $_POST["faq_q"];
    $FAQ_A = $_POST["faq_a"];

    $sql = "UPDATE faq SET 
            faq_header = '$FAQ_Q',
            faq_info = '$FAQ_A'
            WHERE faq_id = '$STD_ID'";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../edit-faq");
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>