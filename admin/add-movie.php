<!-- Functions -->
<?php include ('../functions/functions.php'); ?>
<!-- Session -->
<?php include ('includes/session.php') ?>
<!-- Fetch from Database -->

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>
    <!-- Website Title -->
    <title>Add Movie</title>
    <!-- Meta Tags -->
    <?php include 'includes/header/meta-tags.php'; ?>
    <!-- Default CSS -->
    <?php include 'includes/header/header-styles.php'; ?>
    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select-field/css/select-field.min.css">
    <!-- Select2 Bootstrap4 CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select-field/css/select-field-bootstrap.min.css">
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

                <!-- Content Title -->
                <div class="row pt-4">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Add Movie</h4>
                            <!-- Breadcrumb -->
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Add Movie</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End content Title -->

                <!-- Main Content -->                

                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal" method="post" action="add-movie.php" enctype="multipart/form-data">
                            
                            <div class="card">
                                <div class="card-body card-block">

                                    <div class="p-2 border-bottom">                              
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        01
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Movie Header</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <div class="row mt-2">
                                    <div class="col-md-2 text-center">
                                        <img id="preview-image" class="img-prev rounded" src="#" alt="Upload" onerror=this.src="../assets/images/movies/not_found.png" />
                                    </div>
                                    <div class="col-md-10">
                            
                                        <div class="form-group mt-3 mb-4">
                                            <label class=" form-control-label">Movie Name</label>
                                            <input type="text" name="title" placeholder="Enter the Movie Name" class="form-control" value="" required>
                                            <span class="text-danger"><?php echo $title_err; ?></span>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mb-3">
                                                    <label class=" form-control-label">Upload Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"  name="image" id="customFile" onchange="readURL(this);" required>
                                                        <label class="custom-file-label" for="customFile">
                                                            <?php if(empty($image)): ?>
                                                            Choose Image
                                                            <?php else:
                                                                echo $image;
                                                                endif
                                                            ?>
                                                        </label>
                                                    </div>
                                                    <span class="text-danger"><?php echo $img_err; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group mb-3">
                                                    <label class=" form-control-label">Released Date</label>
                                                    <input class="form-control" type="month" name="year" value="2019-08" id="example-month-input">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body card-block">

                                    <div class="p-2 border-bottom mb-3">                              
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        02
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Movie Info</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select name="genre" class="form-control" required>
                                                <option value="">Select Genre</option>  
                                                <?php 
                                                    $result   = mysqli_query($db, "SELECT * FROM genre ORDER BY id ASC");
                                                    while($data=mysqli_fetch_array($result))
                                                    {
                                                ?>
                                                <option value="<?php echo $data['genre'];?>">
                                                    <?php echo $data['genre'];?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <select name="rating" class="form-control" required>
                                                <option value="">Select Rating</option>  
                                                <?php 
                                                    $result   = mysqli_query($db, "SELECT * FROM ratings ORDER BY id DESC");
                                                    while($data=mysqli_fetch_array($result))
                                                    {
                                                ?>
                                                <option value="<?php echo $data['rating'];?>">
                                                    <?php echo $data['rating'];?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div id="rs" class="form-group">
                                            <label>Language</label>
                                            <select multiple data-placeholder="Choose Language" name="language[]" class="form-control" data-allow-clear="1">
                                                <?php 
                                                    $result   = mysqli_query($db, "SELECT * FROM languages ORDER BY id ASC");
                                                    while($data=mysqli_fetch_array($result))
                                                    {
                                                ?>
                                                <option value="<?php echo $data['language'];?>">
                                                    <?php echo $data['language'];?>
                                                </option>
                                                <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div id="rs" class="form-group">
                                            <label>Quality</label>
                                            <select multiple data-placeholder="Choose Quality" name="quality[]" class="form-control" data-allow-clear="1">
                                                <?php 
                                                    $result   = mysqli_query($db, "SELECT * FROM qualities ORDER BY id ASC");
                                                    while($data=mysqli_fetch_array($result))
                                                    {
                                                ?>
                                                <option value="<?php echo $data['quality'];?>">
                                                    <?php echo $data['quality'];?>
                                                </option>
                                                <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mt-3 mb-3">
                                            <label class=" form-control-label">Synopsis</label>
                                            <textarea name="synopsis" class="form-control" placeholder="Write the Movie Synopsis..." rows="7" required><?php echo $synopsis ?></textarea>
                                        </div>
                                    </div>

                                    </div>

                                </div>
                            </div>                                    
                                   
                            <div class="card">
                                <div class="card-body card-block">

                                    <div class="p-2 border-bottom">                              
                                        <div class="media align-items-center">
                                            <div class="mr-3">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                        03
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Gallery Images</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <div class="row mt-2">

                                    <div class="col-md-12">


                                        <div class="container horizontal-scrollable">
                                            <div class="row">
                                                <div class="gallery_preview">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12"> 
                                                <div class="form-group mb-3">
                                                    <label class=" form-control-label">Gallery Images</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" multiple  name="gallery_image[]" id="gallery_image" required>
                                                        <label class="custom-file-label" for="customFile">
                                                            Choose Images
                                                        </label>
                                                    </div>
                                                    <span class="text-danger"><?php echo $gimg_err; ?></span>
                                                    <span class="text-danger"></span>
                                                </div>
                                                <div class="form-group mt-3 mb-4">
                                                    <label class=" form-control-label">Movie Slug</label>
                                                    <input type="text" name="slug" placeholder="Enter the Movie slug" class="form-control" value="" required>
                                                    <span class="text-danger"><?php echo $slug_err; ?></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="square-switch">
                                        <input type="hidden" name="check" value="Inactive"/>
                                        <input type="checkbox" id="square-switch3" switch="bool" name="check" value="Active" checked="">
                                        <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="float-right">
                                        <a href="#" onclick="history.go(-1)" class="btn btn-danger">Cancel</a>
                                        <button type="submit" name="add_movie" class="btn btn-primary">
                                            Add Movie
                                        </button>
                                    </div>
                                </div>
                            </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>         
            <!-- Content End -->

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
<!-- Form Element JS -->
<script src="assets/libs/form-element/file-input.js"></script>
<script src="assets/libs/form-element/form-element.js"></script>
<script src="assets/libs/form-element/single-image-preview.js"></script>
<script src="assets/libs/form-element/multiple-image-preview.js"></script>
<!-- Select2 JS -->
<script src="assets/libs/select-field/js/select-field.min.js"></script>
<script src="assets/libs/select-field/js/select-field.js"></script>

</body>
</html>