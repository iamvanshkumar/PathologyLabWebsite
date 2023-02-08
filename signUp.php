<?php

include 'conn.php';
session_start();
// --------------------------------
if (isset($_POST['adminLogin'])) {

    $username = $_POST['adminId'];
    $password = $_POST['adminPass'];

    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select *from login where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo '<div class="alert alert-success">Thank You!now please login </div>';
        header("Location: adminDashboard.php");

    } else {
        echo '<div class="alert alert-danger" style="margin-top:100px;">Invalid username or password </div>';
    }


}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>kumar pathology | Admin Login</title>
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
    <link rel="stylesheet" href="login.css">
</head>

<body class="login_body">


    <nav class="navbar navbar-light navbar-expand-md fixed-top"
        style="height: 90px;box-shadow: 0px 1px 20px var(--bs-navbar-color);background: #ffffff;">
        <div class="container">
            <div><a class="navbar-brand flash animated" href="#"
                    style="color: var(--bs-blue);font-family: Alatsi, sans-serif;">KUMAR PATHOLOGY CLINIC</a><button
                    class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span
                        class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button></div>
            <div id="navcol-1" class="collapse navbar-collapse" style="font-family: 'Archivo Narrow', sans-serif;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
   <!-- ---navbar end--- -->

    <section class="section_login">
        <div class="container d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-5">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg class="bi bi-person"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                </path>
                            </svg></div>
                        <h3 class="mb-4">Admin Login</h3>
                        <form method="POST" name="" class="text-center" action=""
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <input required class="form-control" type="text" name="adminId" placeholder="Enter Admin ID" />
                            </div>
                            <div class="mb-3">
                                <input required class="form-control" type="password" name="adminPass"
                                    placeholder="Enter Password" />
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-block w-100  mt-4"  type="submit"
                                    name="adminLogin">Login</button>
                            </div>
                        </form>
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