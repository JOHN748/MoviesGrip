<?php 

session_start();

$db = mysqli_connect('localhost', 'root', '', 'moviesgrip');

// ********** REGISTER USER ********** //

// Register User

$username = $email = $password_1 = $password_2 = $user_image = "";
$username_error = $email_error = $password_1_error = $password_2_error = $user_image_error = "";

if (isset($_POST['register'])) {
	register();
}

function register(){

	global $db, $username, $email, $user_image, $username_error, $email_error, $password_1_error, $password_2_error, 
		   $user_image_error;

	$username    =  $_POST['username'];
	$email       =  $_POST['email'];
	$password_1  =  $_POST['password_1'];
	$password_2  =  $_POST['password_2'];
	$user_image  =  $_FILES['user_image']['name'];
	$temp_name1 =  $_FILES['user_image']['tmp_name'];

	if (empty($username)) { 
		$username_error = "Username is required"; 
	}else{
		$query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { 
			$username_error = "Username is already taken";
		}
	}

	if (empty($email)) { 
		$email_error = "Email is required"; 
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
    }else{
		$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { 
			$email_error = "Email is already taken";
		}
	}

    if(empty(trim($password_1))){
        $password_1_error = "Please enter a password.";
    } elseif(strlen(trim($password_1)) < 6){
        $password_1_error = "Password must have atleast 6 characters.";
    } 

    if(empty(trim($password_2))){
        $password_2_error = "Please confirm password.";
    } else{
        if(empty($password_1_error) && ($password_1 != $password_2)){
            $password_2_error = "Password did not match.";
        }
    }

    if(empty(trim($user_image))){
    	$user_image_error = "User Image is must needed";
    }

	if (empty($username_error) && empty($email_error) && empty($password_1_error) && empty($password_2_error) && empty($user_image_error)) {
		
		$password = md5($password_1);

		$query = "INSERT INTO users (username, email, role, password, user_image, status, joined_at) 
				  VALUES('$username', '$email', 'User', '$password', '$user_image', 1, NOW())";

		move_uploaded_file($temp_name1, "user/assets/images/user/$user_image");  
		mysqli_query($db, $query);
		$_SESSION['message']  = "Registered Successfully!";
		header('location: index.php');

	}

}


// ********** LOGIN USER ********** //

// Login User

$username_err = $password_err = $user_err = "";

if (isset($_POST['login'])) {
	login();
}

function login(){
	global $db, $username, $username_err, $password_err, $user_err;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username)) {
		$username_err = "Username is required";
	}else{
		$query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 0) { 
			$username_err = "Invalid Username";
		}
	}
	
	if (empty($password)) {
		$password_err = "Password is required";
	}
		
	if (empty($username_err) && empty($password_err) && empty($user_err)) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { 
			
		$logged_in_user = mysqli_fetch_assoc($results);

			if ($logged_in_user['role'] == 'Admin' && $logged_in_user['status'] == 1) {
				
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['message']  = "Logged in Successfully";
				header('location: index.php');		  
			}else if ($logged_in_user['role'] == 'Author' && $logged_in_user['status'] == 1) {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['message']  = "Logged in Successfully";
				header('location: index.php');		  
			}
			else if ($logged_in_user['role'] == 'User' && $logged_in_user['status'] == 1) {
				
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['message']  = "Logged in Successfully";
				header('location: index.php');
			}else{
				$user_err = "Your Account is Inactive";				
			}
			
		}else{
			$password_err = "Incorrect Password";
		}

	}

}

function isAdmin(){

	if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'Admin' ) {
		return true;
	}else{
		return false;
	}
}

function isAuthor(){
	
	if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'Author' ) {
		return true;
	}else{
		return false;
	}
}

function isUser(){

	if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'User' ) {
		return true;
	}else{
		return false;
	}
}


// ********** LOGGED-IN USER DETAILS ********** //

// Logged-In User Details 

$log_userid = $log_username = $log_useremail = $log_userrole = $log_userimage = "";

if(isset($_SESSION['user'])){ 
	loggedin_user();
} 

function loggedin_user(){

	global $log_userid, $log_username, $log_useremail, $log_userrole, $log_userimage;

	$log_userid    = $_SESSION['user']['id'];
	$log_username  = $_SESSION['user']['username'];
	$log_useremail = $_SESSION['user']['email'];
	$log_userrole  = $_SESSION['user']['role'];
	$log_userimage = $_SESSION['user']['user_image'];

}
    

// ********** SECTIONS MANAGEMENT ********** //

// Section Details

function section_details(){

	global $db;
	
	$query = "SELECT * FROM sections ORDER BY id DESc";
	
	$run_query = mysqli_query($db, $query);
	
	$section_details = mysqli_fetch_all($run_query, MYSQLI_ASSOC);

	$getdetails = array();

	foreach ($section_details as $section_detail) {

		array_push($getdetails, $section_detail);

	}

	return $getdetails;
}

// Section Details

$query= "SELECT * FROM sections";
    
$result = mysqli_query($db, $query);

$section_detail = array();

while($section_details = mysqli_fetch_array($result)){   
   
    $section_detail[] = $section_details;

}   

$slider 		   	= $section_detail[0]['status'];
$latest_releases   	= $section_detail[1]['status'];
$popular_downloads 	= $section_detail[2]['status'];
$latest_movies 		= $section_detail[3]['status'];
$latest_webseries	= $section_detail[4]['status'];
$latest_tvshows 	= $section_detail[5]['status'];
$genres 			= $section_detail[6]['status'];
$languages 			= $section_detail[7]['status'];


// ********** MOVIES ********** //

// Movies 

function movie_details(){

	global $db;
	
	$query = "SELECT * FROM movies WHERE status = 'Active' ORDER BY id DESC";
	
	$run_query = mysqli_query($db, $query);
	
	$movie_details = mysqli_fetch_all($run_query, MYSQLI_ASSOC);

	$getdetails = array();

	foreach ($movie_details as $movie_detail) {

		array_push($getdetails, $movie_detail);

	}

	return $getdetails;
}


// Add Movie

$title = $genre = $language = $rating = $quality = $year = $synopsis = $image = $gallery_images = 
$uploaded_by = $status = "";

$title_err = $img_err = $gimg_err = $err = "";

if (isset($_POST['add_movie'])) {
	add_movie();
}

function add_movie(){
	
	global $db, $title, $genre, $language, $rating, $quality, $year, $synopsis, $image, $gallery_images, 
	$uploaded_by, $status, $title_err, $img_err, $gimg_err, $err;

	$title 		  = $_POST['title'];
	$genre  	  = $_POST['genre'];
	$language     = $_POST['language'];
	$rating 	  = $_POST['rating'];
	$quality      = $_POST['quality'];
	$year 		  = $_POST['year'];
	$synopsis 	  = $_POST['synopsis'];
	$uploaded_by  = $_SESSION['user']['username'];
	$status 	  = $_POST['check'];
	
	$image  =  $_FILES['image']['name'];
	$temp_name =  $_FILES['image']['tmp_name'];

	$gallery_images = array_filter($_FILES['gallery_image']['name']); 
	$total_count = count($_FILES['gallery_image']['name']);

	if (!empty($title)) {
		$query = "SELECT * FROM movies WHERE title='$title' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { 
			$title_err = "Movie with this name is already exists";
		}
	}

	if (!empty($image)) {
		$query = "SELECT * FROM movies WHERE image='$image' LIMIT 1";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { 
			$img_err = "Image is already exists";
		}
	}

	if (!empty($image)) {
		if ($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/jpg" || 
			$_FILES['image']['type'] == "image/png") {
			$img_er = false;
		}else{
			$img_er = true;
			$img_err = "Only JPEG, JPG and PNG Images are Allowed";
		}
	}

	$imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
    image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_BMP));

	for( $i=0 ; $i < $total_count ; $i++ ) {
        if (in_array($_FILES['gallery_image']['type'][$i], $imagetype)) {
        	$gimg_er = "";
        }else{
        	$gimg_er = "true";
			$gimg_err = "Only JPEG, JPG and PNG Images are Allowed";        	
        }
	}


	if (empty($title_err) && empty($img_err) && empty($gimg_err)) {
		
		if(is_array($gallery_images)){ 

	    $gallery_image = implode(',',$gallery_images);       

		$query = "INSERT INTO movies (title, genre, language, rating, quality, year, synopsis, 
		          image, gallery_image, uploaded_by, uploaded_on, status) 
				  
				  VALUES('$title', '$genre', '$language', '$rating', '$quality', '$year', '$synopsis',
				  '$image', '$gallery_image', '$uploaded_by', now(), '$status')";

		if(mysqli_query($db, $query)){
			$err = $mysqli -> error;
			if(!is_dir("../assets/images/movies/$title/")) {
			    mkdir("../assets/images/movies/$title/");
			}
			
			move_uploaded_file($temp_name, "../assets/images/movies/$title/$image");
			
			for( $i=0 ; $i < $total_count ; $i++ ) {

			   $tmpFilePath = $_FILES['gallery_image']['tmp_name'][$i];
			   if ($tmpFilePath != ""){
			      $newFilePath = "../assets/images/movies/$title/" . $_FILES['gallery_image']['name'][$i];

			      move_uploaded_file($tmpFilePath, $newFilePath);
			   }
			}  
			
			$_SESSION['success'] ="Movie has been successfully Uploaded!.";	
			header('location: manage-movies.php');

			}else{
				$_SESSION['error'] ="Error occured in Uploading Movie";
				header('location: manage-movies.php');
			}
		}
	}
}


?>