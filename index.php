<!-- Functions -->
<?php include ('functions/functions.php'); ?>
<!-- Session -->
<?php include ('includes/session.php') ?>
<!-- Fetch from Database -->

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>
    <!-- Website Title -->
    <title>Movies Biz</title>
    <!-- Meta Tags -->
    <?php include 'includes/header/meta-tags.php'; ?>
    <!-- Default CSS -->
    <?php include 'includes/header/header-styles.php'; ?>
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
            
            <!-- Movies Slider -->
            <?php 
                if ($slider == 'Active') {
                    include 'includes/sections/sliders.php';
                 } 
            ?>

            <!-- Page Container -->
            <div class="container-fluid">

                <!-- Messages -->
                <?php include 'includes/messages.php'; ?>
                
                <!-- Content -->

                <!-- Latest Releases -->
                <?php
                    if ($latest_releases == 'Active') {
                        include 'includes/sections/latest-releases.php'; 
                    } 
                ?>

                <!-- Popular Downloads -->
                <?php
                    if ($popular_downloads == 'Active') {
                        include 'includes/sections/popular-downloads.php'; 
                    } 
                ?>

                <!-- Latest Movies -->
                <?php
                    if ($latest_movies == 'Active') {
                        include 'includes/sections/latest-movies.php'; 
                    } 
                ?>

                <!-- Latest Webseries -->
                <?php
                    if ($latest_webseries == 'Active') {
                        include 'includes/sections/latest-webseries.php'; 
                    } 
                ?>

                <!-- Latest TV-Shows -->
                <?php
                    if ($latest_tvshows == 'Active') {
                        include 'includes/sections/latest-tvshows.php'; 
                    } 
                ?>

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

<!-- End -->