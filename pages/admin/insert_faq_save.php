<?php include("../../config/connection.php");

    
    $FAQ_Q = $_POST["faq_q"];
    $FAQ_A = $_POST["faq_a"];

    $sql = "INSERT INTO faq(faq_header, faq_info) 
            VALUES ('$FAQ_Q','$FAQ_A')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../insert-faq".$the_class);
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>