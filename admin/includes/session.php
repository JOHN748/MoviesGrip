<?php 
if (!isAdmin()) {
    $_SESSION['success'] = "You must log in first";
    header('location: ../login');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../");
}
?>
