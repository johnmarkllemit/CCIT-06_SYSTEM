<?php include 'header.php'; 
if(isset($_SESSION['logged_in'])){
    header("location: index.php");
    ob_end_flush();
}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 shadow p-4  mt-4">
            <?php if (isset($_GET['msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?= $_GET['msg']; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <center>
            <form method="POST" action="process.php">
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="text" placeholder="First Name" class="form-control" id="fname" name="f_name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="text" placeholder="last Name" class="form-control" id="lname" name="l_name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="email" placeholder="Email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="password" placeholder="Password" class="form-control" id="password" name="password1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="password" placeholder="Confirm Password" class="form-control" id="pass2" name="password2" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger" name="register">Register</button>
            </form>
        </center>
        </div>
    </div>
</div>
</body>
</html>