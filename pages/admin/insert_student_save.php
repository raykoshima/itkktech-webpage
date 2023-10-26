<?php include("../../config/connection.php");

    
    $stdcard_id = $_POST["stdcard_id"];
    $card_id = $_POST["card_id"];
    $name = $_POST["name"];
    $address = $_POST["address"]; 
    $phonenum = $_POST["phonenum"];
    $status = $_POST["status"];

    $the_class = $_POST["class"];

    $sql = "INSERT INTO student(stdcard_id, card_id, name, address, phonenum, status, class) 
            VALUES ('$stdcard_id','$card_id','$name','$address','$phonenum','$status','$the_class')";

    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    if($result){
        header("Location:../../insert_student".$the_class);
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('Error back to delete again');";
        echo "</script>";
    }
?>