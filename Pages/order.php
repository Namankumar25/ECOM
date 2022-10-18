<?php session_start(); ?>
<?php include "../partials/header.php"; ?>
<?php include "../database/conn.php"; ?>

<?php
    if (!isset($_GET['uid']) && !isset($_GET['pid']) ) {
        header("location:../index.php");
    }
?>


<div class="container">
    <h1>order now</h1>
    <form action="../partials/action.php" method="POST">
        <input type="hidden" name="uid" value=<?php echo $_GET['uid'];?>>
        <input type="hidden" name="pid" value=<?php echo $_GET['pid'];?>>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                name="address"
            ></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="OrderNowButton">Submit</button>
    </form>
</div>


<?php include "../partials/footer.php"; ?>