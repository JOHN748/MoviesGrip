<!-- Login Functions -->
<?php include 'functions/functions.php' ?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>
    <!-- Website Title -->
    <title>Login</title>
    <!-- Meta Tags -->
    <?php include 'includes/header/meta-tags.php'; ?>
    <!-- Default CSS -->
    <?php include 'includes/header/header-styles.php'; ?>
</head>

<!-- Body Section -->
<body data-sidebar="dark">

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 style="color: #436BB3; font-weight: bold;">Happy to See You Again!</h5>
                                <p>Log in to MoviesBiz.</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="assets/images/assets/auth-background.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="p-4">
                        <form class="form-horizontal" action="login.php" method="post">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username" value="<?php echo $username ?>">
                                <span class="text-danger"><?php echo $username_err; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password">
                                <span class="text-danger"><?php echo $password_err; ?></span>
                            </div>

                            <div class="mb-2 text-center">
                                <span class="text-danger">
                                    <?php echo $user_err; ?>
                                </span>
                            </div>
                            
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div> 

                            <div class="mt-3">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="login">Log In
                                </button>
                            </div>

                            <div class="mt-4 text-center">
                                <a href="auth-recoverpw.php" class="text-muted"><i class="mdi mdi-lock mr-1"></i>
                                    Forgot your password?</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="mt-4 text-center">
                <div>
                    <p>Don't have an account ? <a href="register.php" class="font-weight-medium text-primary">
                            Regsiter now </a></p>
                    <p>Join Now <i class="mdi mdi-heart text-danger"></i> And get an Exclusive Updates!</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer/footer-scripts.php'; ?>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>
