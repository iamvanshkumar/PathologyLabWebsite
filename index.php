<?php
include 'conn.php';

session_start();






if (isset($_POST['download'])) {
    $fname = $_POST["patientId"];
    $name = $fname . ".pdf";
    $pass = $_POST["patientPass"];
    $folder = "./image/" . $name;

    $_SESSION["folder"] = $folder;

    $sql = "SELECT * FROM report where pass and filename='$pass','$fname'";
    header("Location: view.php");
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        

    } else {
        echo "incorrect";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>kumar pathology</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anonymous+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow&amp;display=swap">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Fixed-navbar-starting-with-transparency-styles.css">
    <link rel="stylesheet" href="assets/css/Fixed-navbar-starting-with-transparency-colors.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Button-Ripple-Effect-Animation-Wave-Pulse.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel-slider.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="assets/css/Effective-Pricing-Cards.css">
    <link rel="stylesheet" href="assets/css/Media-Slider-Bootstrap-3-media.slider.css">
    <link rel="stylesheet" href="assets/css/Media-Slider-Bootstrap-3.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">



    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>

<body style="font-family: Alatsi, sans-serif;border-color: var(--bs-blue);box-shadow: 0px 0px;">
    <!--  ------nav start-------- -->
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
            </div>
            <a href="login.php">
                <button class="btn btn-primary btn-lg border ripple-effect" type="button" style="width: 100px;height: 40px;font-size: 15px;text-align: center;font-family: 'Archivo Narrow', 
                sans-serif;margin-left: 10px;color: var(--bs-white);background: var(--bs-btn-border-color);
                border-radius: 5px;border: 2px none var(--bs-blue);">Sign
                    Up</button>
            </a>
        </div>
    </nav> <!--  ------nav end-------- -->

    <!-- ---------- hero start--------------- -->
    <section class="py-4 py-xl-5" style="padding-top: 0px;margin-top: 89px;">
        <div class="container" style="padding-left: 12px;margin-top: 20px;padding-top: 10px;">
            <div class="border-0 border-dark border rounded overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5"
                            style="background: #ffffff;border-style: none;padding-bottom: 48px;">
                            <h2 class="fw-bold text-black mb-3" style="font-size: 30px;">Welcome To</h2>
                            <h1 class="fw-bold text-primary mb-3"
                                style="padding-top: 0px;font-size: 35px;margin-right: -42px;margin-bottom: -6px;margin-top: 0px;">
                                KUMAR PATHOLOGY CLINIC</h1>
                            <p class="mb-4 text-black"
                                style="font-family: 'Archivo Narrow', sans-serif;margin-top: -10px;margin-left: 0px;">
                                The best you can get!!</p>
                            <div class="my-3"><a class="btn btn-light btn-lg shake animated" role="button" href="#"
                                    style="text-align: center;padding-left: 10px;padding-right: 10px;font-family: 'Archivo Narrow', sans-serif;font-size: 14px;background: #0d7bfd;border-style: none;border-color: var(--bs-blue);color: var(--bs-btn-bg);margin-left: 0;">BOOK&nbsp;
                                    YOUR TEST APPOINTEMENT NOW</a></div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img data-aos="fade"
                            class="w-100 h-100 fit-cover" src="assets/img/hero-img.png"
                            style="margin-left: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- hero end--------------- -->

    <!-- ----------------- download report start--------------- -->


    <section style="padding-right: 0px;background: #699ae3;">
        <div class="d-flex flex-column justify-content-between align-items-center flex-lg-row"
            style="border-radius: 0;background: #00000000;color: var(--bs-white);border-style: none;margin-right: 0px;padding-left: 80px;padding-right: 80px;padding-top: 15px;padding-bottom: 15px;box-shadow: 0px 0.25px 12px 2px var(--bs-border-color-translucent);">
            <div class="text-center text-lg-start py-3 py-lg-1">
                <h2 class="fw-bold mb-2" style="font-size: 25px;"><strong>Download Test Report</strong></h2>
            </div>
            <form class="d-flex justify-content-center flex-wrap my-2" method="post">
                <div class="my-2 mx-2"><input
                        class="form-control form-control form-control form-control form-control form-control form-control form-control form-control"
                        type="text" name="patientId" placeholder="Enter Patient ID"
                        style="margin-right: 0px;font-family: 'Archivo Narrow', sans-serif;border: 1px solid rgb(255,255,255);" required>
                </div>
                <div class="my-2"><input
                        class="form-control form-control form-control form-control form-control form-control form-control form-control form-control"
                        type="password" name="patientPass" placeholder="Enter Password"
                        style="font-family: 'Archivo Narrow', sans-serif;" required></div>
                <div class="my-2">
                    <button class="btn btn-primary ms-sm-2" type="submit" name="download"
                        style="font-family: 'Archivo Narrow', sans-serif;background: var(--bs-teal);border-width: 0.25px;border-style: solid;border-top-style: solid;border-top-color: rgb(255,255,255);border-right: 0.25px solid rgb(255,255,255);border-bottom: 0.25px solid rgb(255,255,255);border-left: 0.25px solid rgb(255,255,255);">Download
                        <svg class="bi bi-download" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="#ffff" viewbox="0 0 16 16">
                            <path
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                            </path>
                            <path
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                            </path>
                        </svg></button>
                </div>
            </form>
        </div>
    </section>
    <!-- ----------------- download report end--------------- -->

    <!-- ----------------- sub hero start--------------- -->
    <section class="py-xl-2">
        <div class="container py-2 py-xl-2" style="margin-top: 14px;padding-top: 8px;">
            <div class="row mb-2">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-family: Alatsi, sans-serif;padding-top: 10px;color: rgb(62,69,85);">Why Choose Us
                    </h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-4"
                style="padding-top: 22px;font-family: 'Archivo Narrow', sans-serif;font-size: 15px;">
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-l-center"><img
                            src="assets/img/SubHero2.png" style="width: 80px;">
                        <div class="px-3">
                            <h5>Certified Lab</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center"><img
                            src="assets/img/SubHero1.png" style="width: 80px;" width="80" height="80">
                        <div class="px-3">
                            <h5>Accurate Reports</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center"><img
                            src="assets/img/SubHero4.png" style="width: 90px;margin-bottom: 2px;" width="80"
                            height="79">
                        <div class="px-3">
                            <h5>24x7 Open</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column align-items-center align-items-xl-center"><img
                            src="assets/img/SubHero5.png" style="width: 80px;">
                        <div class="px-3">
                            <h5>Free Sample Pick-Up</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------- sub hero end--------------- -->

    <!--  ------services start-------- -->
    <section class="pricing8 py-5" style="margin-bottom: -15px; background-color: rgb(232, 242, 245);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="mb-1" style="font-family: Alatsi, sans-serif;color: rgb(62, 69, 85);">SERVICES</h2>
                    <h6 class="subtitle font-weight-normal"
                        style="font-family:'Archivo Narrow', sans-serif;font-size:16px;"><span
                            style="color: rgb(68, 68, 68);">A hectic lifestyle, inadequate rest, lack of physical
                            exercise &amp; irregular eating habits take their toll on health even at an early
                            age.</span></h6>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 align-self-center ml-auto pricing-box">
                    <div class="card mb-4"
                        style="box-shadow: 1px 3px 20px 2px var(--bs-card-border-color);border-style: none;">
                        <div class="card-body text-center p-4"><i class="bi bi-suit-heart"></i><img
                                src="assets/img/health-check.png" style="width: 60px;height: 60px;" />
                            <h5 class="font-weight-normal" style="font-size: 20px;margin-top: 8px;">Health Packages
                            </h5>
                            <p class="mt-4" style="text-align: left;">In a world fraught with never heard of before
                                ailments and lifestyle diseases on the rise, we at dapic, promote
                                prevention.<strong>Kumar Pathology Clinic</strong> offers comprehensive healthcare
                                and medical checkup packages (Blood Test). Book a suitable health check-up plan at
                                home with affordable cost</p>
                        </div><a class="btn border-0 btn-info-gradiant p-3 btn-block text-white" role="button" href="#"
                            style="margin-left: 12px;margin-right: 12px;margin-bottom: 12px;">Explore
                            Health Packages</a>
                    </div>
                </div>
                <div class="col-md-4 align-self-center ml-auto pricing-box">
                    <div class="card mb-4"
                        style="box-shadow: 1px 3px 20px 2px var(--bs-card-border-color);border-style: none;">
                        <div class="card-body text-center p-4"><i class="bi bi-suit-heart"></i><img
                                src="assets/img/food-delivery.png" style="width: 60px;height: 60px;" />
                            <h5 class="font-weight-normal" style="font-size: 20px;margin-top: 8px;">Home Visit
                                Services</h5>
                            <p class="mt-4" style="text-align: left;">We offer the Home Visit Service. Our
                                phlebotomists can collect samples from your home and you can choose to get your test
                                results just as easily by e-mail. <br /><br /><strong> Home Visit Charges :-
                                </strong><br /><strong> Upto 3km – Rs. 50/- </strong><br /><strong> 3-5 km – Rs.
                                    70/- </strong><br /><strong> Beyond 5 km-Rs. 100/- </strong></p>
                        </div><a class="btn border-0 btn-info-gradiant p-3 btn-block text-white" role="button" href="#"
                            style="margin-left: 12px;margin-right: 12px;margin-bottom: 12px;">Book Home
                            Collection</a>
                    </div>
                </div>
                <div class="col-md-4 align-self-center ml-auto pricing-box">
                    <div class="card mb-4"
                        style="box-shadow: 1px 3px 20px 2px var(--bs-card-border-color);border-style: none;">
                        <div class="card-body text-center p-4"><i class="bi bi-suit-heart"></i><img
                                src="assets/img/clock.png" style="width: 60px;height: 60px;" />
                            <h5 class="font-weight-normal" style="font-size: 20px;margin-top: 8px;">24x7 Lab Open
                            </h5>
                            <p class="mt-4" style="text-align: left;">Nobody knows when can an emergency come. Also
                                in this hectic life schedule, person tends to become free after office hours or
                                during holidays/Sundays to do his pending work. No tackle the above
                                situations,<br /><strong>Kumar Pathology Clinic</strong> is now open 24x7.</p>
                        </div><a class="btn border-0 btn-info-gradiant p-3 btn-block text-white" role="button" href="#"
                            style="padding-top: 16px;margin-left: 12px;margin-right: 12px;margin-bottom: 12px;">Know
                            More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--  ------services end-------- -->

    <!-- **************** all test area *************** -->
    <section>
        <!--  ------popular test section  start-------- -->
        <section class="popular-test p-4">
            <div class="container-fluid  container mt-5">
                <div class="row justify-content-center text-center"">
                     <h2 class="" style=" font-family: Alatsi, sans-serif;color: rgb(62, 69, 85);">Popular Tests</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">
                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">

                                    
                                        <a href="#"><?php echo "CBC";?></a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
            <script src="assets/js/slider.js"></script>
        </section> <!--  ------popular test section  end-------- -->

        <!--  ------test package section  start-------- -->
        <section class="Test-package p-4" style="background-color: rgb(232, 242, 245);">
            <div class="container-fluid  container mt-5">
                <div class="row justify-content-center text-center"">
               <h2 class="" style=" font-family: Alatsi, sans-serif;color: rgb(62, 69, 85);">Test Packages</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="slider" class="owl-carousel">
                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
            <script src="assets/js/slider.js"></script>
        </section> <!--  ------test package section end-------- -->

        <!--  ------test package section  start-------- -->
        <section class="Test-package p-4">
            <div class="container-fluid  container mt-5">
                <div class="row justify-content-center text-center"">
               <h2 class="" style=" font-family: Alatsi, sans-serif;color: rgb(62, 69, 85);">Individual Tests</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="slide" class="owl-carousel">
                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>

                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                            <div class="post-slide">
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus
                                        neque
                                        quae tempora......</p>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
            <script src="assets/js/slider.js"></script>

        </section><!--  ------test package section end-------- -->
    </section> <!-- **************** all test area end *************** -->



    <!-- gallery -->
    <section class="gallery" style="background-color: rgb(232, 242, 245);">

        <div class="container-fluid container">
            <div class="row justify-content-center text-center ">
                <h2 class="" style=" font-family: Alatsi, sans-serif;color: rgb(62, 69, 85);">Gallery</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="gallery" class="owl-carousel">
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501"
                                    alt="">
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                            </div>
                        </div>

                        <div class="post-slide">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=503"
                                    alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                                    quae tempora......</p>
                                <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>

                        <div class="post-slide">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1564979268369-42032c5ca998?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500"
                                    alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                                    quae tempora......</p>
                                <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>

                        <div class="post-slide">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1576659531892-0f4991fca82b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501"
                                    alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                                    quae tempora......</p>
                                <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>

                        <div class="post-slide">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1586083702768-190ae093d34d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=305&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=505"
                                    alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                                    quae tempora......</p>
                                <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>

                        <div class="post-slide">
                            <div class="post-img">
                                <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506"
                                    alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque
                                    quae tempora......</p>
                                <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                <a href="#" class="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
        <script type='text/javascript'>$(document).ready(function () {
                $("#gallery").owlCarousel({
                    items: 3,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [980, 2],
                    itemsMobile: [600, 1],
                    navigation: true,
                    navigationText: ["", ""],
                    pagination: true,
                    autoPlay: true
                });

            });</script>

    </section> <!-- gallery -->


    <section>
        about us
    </section>


    <section>
        FAQ
    </section>


    <!-- <iframe src="<?php  ?>" width="90%" height="500px"></iframe> -->

    <footer>
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <h3 class="fs-6">Services</h3>
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#">Health Packages</a></li>
                        <li><a class="link-secondary" href="#">Popular Tests</a></li>
                        <li><a class="link-secondary" href="#">Individual Tests</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column">
                    <ul class="list-unstyled">
                        <li><a class="link-secondary" href="#"></a></li>
                        <li><a class="link-secondary" href="#">Employee success</a></li>
                        <li><a class="link-secondary" href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last"
                    style="padding-top: 18px;">
                    <div class="fw-bold d-flex align-items-center mb-2"><span></span><a
                            class="navbar-brand flash animated" href="#"
                            style="color: var(--bs-blue);font-family: Alatsi, sans-serif;">KUMAR PATHOLOGY CLINIC</a>
                    </div>
                    <p class="mb-4 text-black"
                        style="font-family: 'Archivo Narrow', sans-serif;margin-top: -10px;margin-left: 0px;">The best
                        you can get!!</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center pt-3"
                style="font-family: 'Archivo Narrow', sans-serif;">
                <p class="text-muted mb-0">Copyright © 2023&nbsp; KUMAR PATHOLOGY CLINIC</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook"
                            style="color: var(--bs-blue);">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-whatsapp" xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                            style="color: var(--bs-blue);">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram"
                            style="color: var(--bs-blue);">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></li>
                </ul>
                <p class="text-muted mb-0">Designed by Vansh Kumar</p>
            </div>
        </div>
    </footer>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Button-Ripple-Effect-Animation-Wave-Pulse-button-ripple-effect.js"></script>
    <script src="assets/js/Card-Carousel-slider.js"></script>
    <script src="assets/js/Fixed-navbar-starting-with-transparency-script.js"></script>
    <script src="assets/js/Media-Slider-Bootstrap-3-media.slider.js"></script>

</body>

</html>