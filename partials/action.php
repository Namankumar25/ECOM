<?php

include "../database/conn.php";

if (isset($_POST['signupbutton'])) {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
   
    if ($cpass == $pass) {
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_password`, `u_timestamp`, `u_role`) VALUES (NULL, '$uname', '$uemail', '$hash', current_timestamp(), 'user')";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header("location:../index.php");
        }
    }
}

if (isset($_POST['loginbutton'])) {
    $uemail = $_POST['uemail'];
    $pass = $_POST['pass'];
   
    // string - "ABC";
    $sql = "SELECT * FROM `users` WHERE `u_email`='$uemail'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($pass,$row['u_password']);

    if ($verify) {
        session_start();
        $_SESSION['userFullName'] = $row['u_name'];
        $_SESSION['role'] = $row['u_role'];
        $_SESSION['userId'] = $row['u_id'];
        $_SESSION['loginSuccessfull'] = true;
        header("location:../index.php");   
    }

}

if (isset($_POST['OrderNowButton'])) {
    $uid = $_POST['uid'];
    $pid = $_POST['pid'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   
    $sql = "INSERT INTO `orders` (`o_id`, `user_id`, `product_id`, `o_address`, `o_phone_number`, `o_timestamp`) VALUES (NULL, '$uid', '$pid', '$address', '$phone', current_timestamp());";
    $result = mysqli_query($conn,$sql);
   
    if ($result) {
      header("location:../index.php?productSuccess");
    }

}
