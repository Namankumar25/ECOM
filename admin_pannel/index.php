<?php
session_start();
if (!isset($_SESSION['loginSuccessfull']) || $_SESSION['role'] != "admin") {
    header("location:../index.php");
}
?>

<?php include "../partials/header.php"; ?>

<div class="container">
    <h1>Welcome to the admin pannel</h1>
    <a href="../partials/logout.php">Logout</a>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add Product
    </button>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Product details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form enctype="multipart/form-data" method="POST" action="partials/action.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="pdesc">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Product Price</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="pprice">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="pimage">
                        </div>

                        <button type="submit" class="btn btn-primary" name="productSubmit">Submit</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>




<?php include "../partials/footer.php"; ?>