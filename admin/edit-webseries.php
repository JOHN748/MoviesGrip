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
    <title>Edit Series</title>
    <base href="/MoviesGrip/admin/">
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
                            <h4 class="mb-0 font-size-18">Edit Series</h4>
                            <!-- Breadcrumb -->
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Edit Series</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End content Title -->

                <!-- Main Content -->                

                <div class="row">
                    <div class="col-12">
                        <form class="form-horizontal" method="post" action="edit-webseries.php" enctype="multipart/form-data">
                            
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
                                                <h5 class="font-size-16 mb-1">Series Header</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <div class="row mt-2">
                                    <div class="col-md-2 text-center">
                                        <img id="preview-image" class="img-prev rounded" src="../assets/images/webseries/<?php echo $set_title; ?>/<?php echo $set_image; ?>" onerror="this.onerror=null;this.src='../assets/images/webseries/not_found.png';" alt="Not Found"/>
                                    </div>
                                    <div class="col-md-10">
                            
                                        <div class="form-group mt-3 mb-4">
                                            <label class=" form-control-label">Series Name</label>
                                            <input type="text" name="title" placeholder="Enter the Series Name" class="form-control" value="<?php echo $set_title; ?>" required>
                                            <span class="text-danger"><?php echo $title_err; ?></span>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group mb-3">
                                                    <label class=" form-control-label">Upload Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"  name="image" id="customFile" onchange="readURL(this);" required>
                                                        <label class="custom-file-label" for="customFile">
                                                            <?php if(empty($set_image)): ?>
                                                            Choose Image
                                                            <?php else:
                                                                echo $set_image;
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
                                                    <input class="form-control" type="month" name="year" value="<?php echo $set_year; ?>" id="example-month-input">
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
                                                <h5 class="font-size-16 mb-1">Series Info</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select name="genre" class="form-control" required>
                                                <?php 
                                                    $result   = mysqli_query($db, "SELECT * FROM genre ORDER BY id ASC");
                                                    while($data=mysqli_fetch_array($result)):
                                                ?>
                                                <option 
                                                    <?php if($data['genre'] == $set_genre): ?> 
                                                        selected="selected"
                                                    <?php endif; ?>
                                                        value="<?php echo $data['genre']; ?>"
                                                >
                                                    <?php echo $data['genre']; ?>
                                                </option>
                                                <?php endwhile; ?>    
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <select name="rating" class="form-control" required>
                                                <?php 
                                                    $result   = mysqli_query($db, "SELECT * FROM ratings ORDER BY id ASC");
                                                    while($data=mysqli_fetch_array($result)):
                                                ?>
                                                <option 
                                                    <?php if($data['rating'] == $set_rating): ?> 
                                                        selected="selected"
                                                    <?php endif; ?>
                                                        value="<?php echo $data['rating']; ?>"
                                                >
                                                    <?php echo $data['rating']; ?>
                                                </option>
                                                <?php endwhile; ?>
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
                                                <option 
                                                    <?php $sel_language = explode(',',$set_language); ?>
                                                    <?php if(in_array($data['language'], $sel_language)): ?>
                                                        selected="selected"
                                                    <?php endif; ?>
                                                        value="<?php echo $data['language']; ?>">
                                                    <?php echo $data['language']; ?>
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
                                                <option 
                                                    <?php $sel_quality = explode(',',$set_quality); ?>
                                                    <?php if(in_array($data['quality'], $sel_quality)): ?>
                                                        selected="selected"
                                                    <?php endif; ?>
                                                        value="<?php echo $data['quality']; ?>">
                                                    <?php echo $data['quality']; ?>
                                                </option>
                                                <?php } ?>
                                          </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mt-3 mb-3">
                                            <label class=" form-control-label">Synopsis</label>
                                            <textarea name="synopsis" class="form-control" placeholder="Write the Movie Synopsis..." rows="7" required><?php echo $set_synopsis ?></textarea>
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
                                                <div id="gallery_prev">
                                                    <?php 
                                                        $images = explode(',', $set_gallery_images );
                                                        $value = '';
                                                    ?>
                                                    <?php foreach ($images as $img): ?>
                                                        <img class="col-3 rounded pb-3" src="../assets/images/webseries/<?php echo $set_title; ?>/<?php echo $img?>">
                                                    <?php endforeach; ?>
                                                </div>
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
                                                            <?php if(!empty($set_gallery_images)): ?>
                                                                <?php echo $set_gallery_images; ?>
                                                            <?php else: ?>
                                                                Choose Gallery Images
                                                            <?php endif; ?>
                                                        </label>
                                                    </div>
                                                    <span class="text-danger"><?php echo $gimg_err; ?></span>
                                                    <span class="text-danger"></span>
                                                </div>
                                                <div class="form-group mt-3 mb-4">
                                                    <label class=" form-control-label">Movie Slug</label>
                                                    <input type="text" name="slug" placeholder="Enter the Movie slug" class="form-control" value="<?php echo $set_slug; ?>" required>
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
                                        <input type="hidden" name="id" value="<?php echo $set_id; ?>">
                                        <input type="hidden" name="delete-img" value="<?php echo $set_image; ?>">
                                        <input type="hidden" name="delete-gimg" value="<?php echo $set_gallery_images; ?>">
                                        <a href="#" onclick="history.go(-1)" class="btn btn-danger">Cancel</a>
                                        <button type="submit" name="update_series" class="btn btn-primary">
                                            Update Movie
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