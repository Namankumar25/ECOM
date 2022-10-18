<?php session_start(); ?>
<?php include "partials/header.php"; ?>
<?php include "database/conn.php"; ?>

<?php
if (isset($_SESSION['loginSuccessfull'])) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message!</strong> login Successful
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}

if (isset($_GET['productSuccess'])) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message!</strong> Product Added Successfully 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
}
?>

<?php include "partials/navbar.php"; ?>


<!-- carosel section -->
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/1.jpg" class="d-block w-100" alt="..." style="height:490px;">
            </div>
            <div class="carousel-item">
                <img src="assets/2.jpeg" class="d-block w-100" alt="..." style="height:490px;">
            </div>
            <div class="carousel-item">
                <img src="assets/3.jpeg" class="d-block w-100" alt="..." style="height:490px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<!-- products section -->
<div class="container my-3">
    <h1>Pick your best !</h1>
    <div class="row container mt-4">

    <?php
        $uid = $_SESSION['userId'];

        $psql = "SELECT * FROM `products`";
        $presult = mysqli_query($conn,$psql);
        while ($row = mysqli_fetch_assoc($presult)) {
            echo '
            <div class="card mx-2 mt-3 col-lg-3" style="width: 18rem;border:none;">
                <img src="uploads/'.$row['p_picture'].'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$row['p_name'].'</h5>
                    <h6 class="text-bold text-warning">Price - Rs '.$row['p_price'].'/-</h6>
                    <p class="card-text">'.$row['p_desc'].'</p>
                    <a href="pages/order.php?uid='.$uid.'&&pid='.$row['p_id'].'" class="btn btn-primary">Order now</a>
                </div>
            </div>            
            ';
        }
    
    ?>






    </div>
</div>

<?php include "partials/footer.php"; ?>