<?php
session_start();


$sname = "localhost";

$unmae = "root";

$password = "";

$db_name = "lab";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

if (isset($_POST['download'])) {


    $fname = $_POST["patientId"];
    $pass = $_POST["patientPass"];
    $folder = "./image/" . $fname;



    // Using substr 
    $x = substr($file, 0, strrpos($file, '.'));


    $sql = "SELECT * FROM report where pass and filename='$pass','$fname'";

    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['fname'] === $fname) {

            echo $fname;

        }
    } else {
        echo "incorrect";
    }
}

?>




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
                        style="margin-right: 0px;font-family: 'Archivo Narrow', sans-serif;border: 1px solid rgb(255,255,255);">
                </div>
                <div class="my-2"><input
                        class="form-control form-control form-control form-control form-control form-control form-control form-control form-control"
                        type="password" name="patientPass" placeholder="Enter Password"
                        style="font-family: 'Archivo Narrow', sans-serif;"></div>
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








<iframe src="<?php echo $folder; ?>" width="90%" height="500px"></iframe>
