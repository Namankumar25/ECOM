<?php

include "../database/conn.php";

if (isset($_POST['signupbutton'])) {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
   
    if ($cpass == $pass) {
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_password`, `u_timestamp`) VALUES (NULL, '$uname', '$uemail', '$hash', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header("location:../index.php");
        }
    }



}



?>