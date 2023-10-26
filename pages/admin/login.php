<?php 
include("../../config/config.php");
        if(isset($_POST['username'])){
        // รับ user
                  $username = $_POST['username'];
                  $password = $_POST['password'];
				//query 
                  $sql="SELECT * FROM system WHERE username = '".$username."' AND password ='".$password."'";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["admin_id"] = $row["a_id"];
                      $_SESSION["admin_username"] = $row["username"];

                      header("Location:../../home");
                      

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


          header("Location:pages/404.php"); // ไปลองใหม่

        }
?>