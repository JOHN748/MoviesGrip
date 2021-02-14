<!-- Login Functions -->
<?php include('functions/functions.php') ?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>
    <!-- Website Title -->
    <title>Register</title>
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
                                <h5 style="color: #436BB3; font-weight: bold;">Register Now</h5>
                                <p>Create Your New MoviesBiz Account Now.</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="assets/images/assets/auth-background.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="p-4">
                        <form class="form-horizontal" method="post" action="register.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="useremail">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
                                <span class="text-danger"><?php echo $username_error; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $email; ?>">
                                <span class="text-danger"><?php echo $email_error; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password_1" placeholder="Enter password">
                                <span class="text-danger"><?php echo $password_1_error; ?></span>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Confirm Password</label>
                                <input type="password" class="form-control" name="password_2" placeholder="Enter password">
                                <span class="text-danger"><?php echo $password_2_error; ?></span>
                            </div>

                            <label>Upload Profile Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="user_image" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <span class="text-danger"><?php echo $user_image_error; ?></span>
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="register">
                                    Register
                                </button>
                            </div>

                            <div class="mt-4 text-center">
                                <p class="mb-0">By registering you agree to the MoviesBiz <a href="#" class="text-primary">Terms of Use</a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="mt-4 text-center">

                <div>
                    <p>Already have an account ? <a href="login.php" class="font-weight-medium text-primary">
                            Login</a></p>
                    <p>Join Now <i class="mdi mdi-heart text-danger"></i> And Get an Exclusive Updates!</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<?php include 'includes/footer/footer-scripts.php'; ?>

<!-- App js -->
<script src="assets/js/app.js"></script>

<!-- bs custom file input plugin -->
<script src="assets/libs/form-element/file-input.js"></script>
<script src="assets/libs/form-element/form-element.js"></script>

</body>
</html>
