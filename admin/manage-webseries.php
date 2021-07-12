<!-- Functions -->
<?php include ('../functions/functions.php'); ?>
<!-- Session -->
<?php include ('includes/session.php') ?>
<!-- Fetch from Database -->
<?php $manage_webseries = manage_webseries(); ?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>
    <!-- Website Title -->
    <title>Manage Webseries</title>
    <!-- Meta Tags -->
    <?php include 'includes/header/meta-tags.php'; ?>
    <!-- Default CSS -->
    <?php include 'includes/header/header-styles.php'; ?>
    <!-- Datatable CSS -->
    <?php include 'includes/header/datatable-styles.php' ?> 
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
                
                <!-- Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Table Tools -->
                                <div class="table-tools float-lc">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">

                                            <div class="btn-group mr-2">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-paper-plane"></i>
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item btn-copy">
                                                        <i class="fas fa-copy"></i>&nbsp Copy
                                                    </a>
                                                    <a class="dropdown-item btn-excel">
                                                        <i class="fas fa-file-excel"></i>&nbsp Excel
                                                    </a>
                                                    <a class="dropdown-item btn-pdf">
                                                        <i class="fas fa-file-pdf"></i>&nbsp PDF
                                                    </a>
                                                    <a class="dropdown-item btn-csv">
                                                        <i class="fas fa-file-csv"></i>&nbsp CSV
                                                    </a>
                                                    <a class="dropdown-item btn-print">
                                                        <i class="fas fa-print"></i>&nbsp Print
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="btn-group mr-2">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-eye"></i> 
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item btn-default">
                                                        <i class="fas fa-eye"></i>&nbsp Show Default
                                                    </a>
                                                    <a class="dropdown-item btn-info">
                                                        <i class="fas fa-eye-slash"></i>&nbsp Series Info
                                                    </a>
                                                    <a class="dropdown-item btn-details">
                                                        <i class="fas fa-eye-slash"></i>&nbsp Series Details
                                                    </a>
                                                    <a class="dropdown-item btn-images">
                                                        <i class="fas fa-eye-slash"></i>&nbsp Series Images
                                                    </a>
                                                    <a class="dropdown-item btn-manage">
                                                        <i class="fas fa-eye-slash"></i>&nbsp Manage Series
                                                    </a>
                                                    <a class="dropdown-item btn-showall">
                                                        <i class="fas fa-eye"></i>&nbsp Show All
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <form name="multipledeletion" method="post">

                                <div class="table-tools float-rc">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <input type="text" id="searchbox" class="form-control float-rc ml-3  mb-3" placeholder="Search Users.." style="width: auto;">

                                            <button type="submit" name="multi-s-delete" class="btn btn-danger btn-md float-rc ml-3 mb-3" onClick="return confirm('Are you sure you want to delete?');" ><i class="fas fa-trash-alt"></i></button>
                                            
                                            <a href="add-webseries.php" class="btn btn-danger btn-create-users float-rc mb-3">
                                                <i class="fas fa-plus"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <!-- Product Table -->
                                <table id="datatable" class="table table-striped table-hover table-bordered display nowrap"
                                       style="width: 100%;">
                                    <thead class="bg-soft-primary" style="width: 100% !important;">
                                        <tr>
                                            <th class="text-center align-middle"><input type="checkbox" class="" id="select_all"/></th>
                                            <th class="text-center align-middle">No</th>
                                            <th class="text-center align-middle">Title</th>
                                            <th class="text-center align-middle">Image</th>
                                            <th class="text-center align-middle">Gallery Image</th>
                                            <th class="text-center align-middle">Genre</th>
                                            <th class="text-center align-middle">Language</th>
                                            <th class="text-center align-middle">Quality</th>
                                            <th class="text-center align-middle">Rating</th>
                                            <th class="text-center align-middle">Year</th>
                                            <th class="text-center align-middle">Synopsis</th>
                                            <th class="text-center align-middle">Slug</th>
                                            <th class="text-center align-middle">Uploaded By</th>
                                            <th class="text-center align-middle">Uploaded On</th>
                                            <th class="text-center align-middle">Status</th>
                                            <th class="text-center align-middle">Manage</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($manage_webseries as $key => $manage_series): ?>
                                        <tr>
                                            <td class="text-center align-middle">
                                                <input type="checkbox" class="checkbox select_img" name="ids[]" value="<?php echo $manage_series['id'];?>"/>
                                                <input type="checkbox" class="checkbox" name="imgs[]" value="<?php echo $manage_series['title'];?>" style="display: none;"/>
                                            </td>
                                            <td class="text-center align-middle"><?php echo $key + 1; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['title']; ?></td>

                                            <?php $img_path = "../assets/images/webseries/" ?>                                            
                                            <td class="text-center align-middle">
                                                <img class="rounded" src="<?php echo $img_path.'/'.$manage_series['title'].'/'.$manage_series['image']; ?>"
                                                style="width: 50px; height: 50px;">    
                                            </td>

                                            <td class="text-center align-middle">
                                                <span class="group">
                                                <?php
                                                    $images = explode(",", $manage_series['gallery_image']);
                                                    $counter = 0;    
                                                    foreach($images as $value):
                                                        if($counter < 3): 
                                                ?>
                                                        <img class="rounded" src="<?php echo $img_path.'/'.$manage_series['title'].'/'.$value; ?>" 
                                                        style="width: 50px; height: 50px;">
                                                <?php
                                                    endif;
                                                    $counter++;
                                                endforeach;
                                                ?>
                                                </span>
                                                <span class="badge rounded bg-soft-danger p-1" 
                                                style="font-size: 11px;">
                                                    <?php echo '+'.count($images); ?>
                                                </span>
                                            </td>

                                            <td class="text-center align-middle"><?php echo $manage_series['genre']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['language']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['quality']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['rating']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['year']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['synopsis']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['slug']; ?></td>                                       
                                            <td class="text-center align-middle"><?php echo $manage_series['uploaded_by']; ?></td>
                                            <td class="text-center align-middle"><?php echo $manage_series['uploaded_on']; ?></td>
                                            

                                    </form>


                                    <form method="post">
                                        <td class="text-center align-middle">
                                            <input type="hidden" name="status" value="<?php echo $manage_series['id']; ?>">
                                            <?php $status = $manage_series['status']; ?>

                                            <?php if ($status == "Active"): ?>
                                            <button class="btn" type="submit" name="unpublish_series">
                                                <i class="fas fa-check text-success"></i>
                                            </button>
                                            <?php elseif ($status == "Inactive"): ?>
                                                    <button type="submit" name="publish_series" class="btn">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                            <?php endif; ?>
                                        </td>

                                        <td class="text-center align-middle">
                                            
                                            <a href="../webseries/<?php echo $manage_series['slug'] ?>" class="mr-3" style="color: dodgerblue;">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="edit-series/<?php echo $manage_series['slug'] ?>" 
                                            class="mr-3">
                                                <i class="fas fa-pencil-alt text-success"></i>
                                            </a>

                                            <input type="hidden" name="delete-series" value="<?php echo $manage_series['id']; ?>">
                                            <input type="hidden" name="delete-image" value="<?php echo $manage_series['title']; ?>">
                                            
                                            <button type="submit" name="single-s-delete" class="btn">
                                                <i class="fas fa-trash-alt text-danger"></i>
                                            </button>
                                        </td>

                                    </form>

                                        </tr>

                                        <?php endforeach ?>
                                    
                                    </tbody>
                                </table>
                                

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->


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

<!-- Datatable JS -->
<?php include 'includes/footer/datatables-scripts.php'; ?>
<script src="assets/libs/datatables/js/datatable-manage.js"></script>

</body>
</html>