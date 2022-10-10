<?php include "partials/header.php"; ?>
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


        <div class="card mx-2 mt-3 col-lg-3" style="width: 18rem;border:none;">
            <img src="assets/2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Iphone 14</h5>
                <h6 class="text-bold text-warning">Price - 1.5lakh</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi illo id fuga nesciunt</p>
                <a href="#" class="btn btn-primary">Order now</a>
            </div>
        </div>



        
    </div>
</div>

<?php include "partials/footer.php"; ?>