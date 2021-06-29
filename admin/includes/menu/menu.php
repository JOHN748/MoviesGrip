<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- Logo -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo/logo-01.svg" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo/logo-title.png" alt="" height="34">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="px-lg-2">
                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <a href="#">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class='bx bx-fullscreen'></i>
                </button>
                </a>
            </div>
            
            <div class="dropdown d-none d-lg-inline-block ml-1">
                <a href="#">
                <button type="button" class="btn header-item noti-icon waves-effect">
                    <i class="bx bxs-heart beat-heart"></i>
                    <span class="badge badge-primary badge-pill" style="position: absolute; top: 18px; left: 24px;">
                        0
                    </span>
                </button>
                </a>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bxs-collection"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0">Notifications</h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small">View All</a>
                            </div>
                        </div>
                    </div>

                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bxs-heart"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Favourites</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">View your Favourites</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bxs-download"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Downloads</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">View your Downloads</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> View_More
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php echo 'assets/images/admin/'.$log_userimage; ?>">
                    <span class="d-none d-xl-inline-block ml-1"><?php echo $log_username; ?></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="admin/view-user.php?user=<?php echo $log_username; ?>">
                        <i class="fa fa-user-alt mr-2"></i>Profile
                    </a>
                       
                    <a class="dropdown-item" href="index.php">
                        <i class="fa fa-tachometer-alt mr-2"></i>Dashboard
                    </a>
                    
                    <a class="dropdown-item d-block" href="#">
                        <i class="fa fa-wrench mr-2"></i>Settings
                    </a>
                    <div class="dropdown-divider"></div>

                    <?php  if (isset($_SESSION['user'])) : ?>
                    <a class="dropdown-item text-danger" href="index.php?logout='1'"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                    <?php endif ?>

                    <?php  if (!isset($_SESSION['user'])) : ?>
                    <a class="dropdown-item text-danger" href="login.php"><i class="fas fa-sign-in-alt mr-2 text-danger"></i>Login</a>
                    <?php endif ?>

                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header> 

<!-- Left Sidebar Start -->

<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">
                    <span>Admin</span>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class='bx bxs-user-account'></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class='bx bx-home-circle'></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Menu</li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bxs-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-movie-play"></i>
                        <span>Movies</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Movies</a></li>
                        <li><a href="add-movies.php">Add Movies</a></li>
                        <li><a href="#">Manage Movies</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-camera-movie"></i>
                        <span>Web-Series</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Web-Series</a></li>
                        <li><a href="#">Add WebSeries</a></li>
                        <li><a href="#">Manage WebSeries</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bxs-tv'></i>
                        <span>TV-Shows</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">TV-Shows</a></li>
                        <li><a href="#">Add TV-Shows</a></li>
                        <li><a href="#">Manage TV-Shows</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-theater-masks" style="font-size: 1.3em;"></i>
                        <span>Genres</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Genres</a></li>
                        <li><a href="#">Add Genres</a></li>
                        <li><a href="#">Manage Genres</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-theater-masks" style="font-size: 1.3em;"></i>
                        <span>Languages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Languages</a></li>
                        <li><a href="#">Add Languages</a></li>
                        <li><a href="#">Manage Languages</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bxs-heart"></i>
                        <span>Favourites</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="bx bxs-download"></i>
                        <span>Downloads</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-rectangle"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Add User</a></li>
                        <li><a href="#">Manage Users</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span>View Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">User Grid</a></li>
                        <li><a href="#">User List</a></li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->