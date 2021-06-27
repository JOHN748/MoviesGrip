<!-- Functions -->
<?php include ('functions/functions.php'); ?>
<!-- Session -->
<?php include ('includes/session.php') ?>
<!-- Fetch from Database -->
<?php $movie_details = movie_details(); ?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>
    <!-- Website Title -->
    <title>Movies</title>
    <!-- Meta Tags -->
    <?php include 'includes/header/meta-tags.php'; ?>
    <!-- Default CSS -->
    <?php include 'includes/header/header-styles.php'; ?>
    <!-- Script JS -->
    <?php include 'includes/header/header-scripts.php'; ?>
</head>

<!-- Body Section -->
<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <!-- MenuBar -->
    <?php include 'includes/menu/menu.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        
        <!-- Page Content -->
        <div class="page-content">
            
            <!-- Page Container -->
            <div class="container-fluid">

                <!-- Messages -->
                <?php include 'includes/messages.php'; ?>
                <!-- Browse Movies -->
                <?php include 'includes/sections/browse-movies.php'; ?>                

            </div>


            <!-- End Page Container -->
        </div>
        <!-- End Page Content -->

        <?php include 'includes/footer/footer.php'; ?>

    </div>
    <!-- End Main Content -->

</div>
<!-- End layout Wrapper -->

<!-- Right Sidebar -->
<?php include 'includes/menu/right-sidebar.php'; ?>

<!-- Default JS -->
<?php include 'includes/footer/footer-scripts.php'; ?>

</body>
</html>

