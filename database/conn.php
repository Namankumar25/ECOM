

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerceapp";
$conn = mysqli_connect($hostname,$username,$password,$dbname);

if ($conn) {
    echo "success";
}

?>