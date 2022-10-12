<?php

include "../../database/conn.php";

if (isset($_POST['productSubmit'])) {

    $directory = "../../uploads/". $_FILES['pimage']['name'];
    // $filetype = pathinfo($directory, PATHINFO_EXTENSION);

    // if ($filetype == "png") {
    //     echo "image file not allowed";
    //     exit;
    // }

    $pname = $_POST['pname'];
    $pdesc = $_POST['pdesc'];
    $pprice = $_POST['pprice'];
    $filename = $_FILES['pimage']['name'];

    $sql = "INSERT INTO `products` (`p_id`, `p_name`, `p_desc`, `p_price`, `p_picture`, `p_timestamp`) VALUES (NULL, '$pname', '$pdesc', '$pprice', '$filename', current_timestamp())";
    $result = mysqli_query($conn,$sql);

    if (move_uploaded_file($_FILES['pimage']['tmp_name'], $directory)) {
        echo "<br>file uploaded successfully";
    } else {
        echo "file upload failed !";
    }

}



?>