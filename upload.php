<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $id = $_POST["patientId"];
    $pass = $_POST["patientPass"];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;


    // Using substr 
    $x = substr($filename, 0, strrpos($filename, '.'));

	$db = mysqli_connect("localhost", "root", "", "lab");

	// Get all the submitted data from the form
	$sql = "INSERT INTO report (id,pass,filename) VALUES ('$id','$pass','$x')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>kumar pathology</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anonymous+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Fixed-navbar-starting-with-transparency-styles.css">
    <link rel="stylesheet" href="assets/css/Fixed-navbar-starting-with-transparency-colors.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Button-Ripple-Effect-Animation-Wave-Pulse.css">
    <link rel="stylesheet" href="assets/css/Effective-Pricing-Cards.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-transparency"
        style="height: 90px;box-shadow: 0px 1px 20px var(--bs-navbar-disabled-color);background: #ffffff;">
        <div class="container">
            <div><a class="navbar-brand flash animated" href="#"
                    style="color: var(--bs-blue);font-family: Alatsi, sans-serif;">KUMAR PATHOLOGY CLINIC</a><button
                    class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                        class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button></div>
            <div id="navcol-1" class="collapse navbar-collapse" style="font-family: 'Archivo Narrow', sans-serif;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" aria-expanded="false"
                            data-bs-toggle="dropdown" href="#">Tests</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a
                                class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third
                                Item</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div><button class="btn btn-primary btn-lg border ripple-effect" type="button"
                style="width: 100px;height: 40px;font-size: 15px;text-align: center;font-family: 'Archivo Narrow', sans-serif;margin-left: 10px;color: var(--bs-white);background: var(--bs-btn-border-color);border-radius: 5px;border: 2px none var(--bs-blue);">Sign
                Up</button>
        </div>
    </nav>
    <section class="py-4 py-xl-5">

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Log in</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg
                                    class="bi bi-person" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                    </path>
                                </svg></div>
                            <form method="POST" class="text-center"  action="" enctype="multipart/form-data">
                                <div class="mb-3"><input class="form-control" type="text" name="patientId"
                                        placeholder="Enter Patient ID" /></div>
                                        <!-- <input class="form-control" name="uploadfile" value="" type="file" style="margin-bottom: 12px;" /> -->
                                        <input class="form-control" type="file" name="uploadfile" value="" />

                                <div class="mb-3"><input class="form-control" type="password" name="patientPass"
                                        placeholder="Password" /></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="upload">Upload</button></div>
                                <p class="text-muted">Forgot your password?</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Button-Ripple-Effect-Animation-Wave-Pulse-button-ripple-effect.js"></script>
    <script src="assets/js/Fixed-navbar-starting-with-transparency-script.js"></script>
</body>

</html>