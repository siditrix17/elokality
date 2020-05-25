<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


</head>

  <body >

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">eLokality</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/project/index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration/login.php">Login/Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="locator/locator.php">Locator</a>
          </li>

      </div>
    </nav>


<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "markers";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Bucaramanga Coordinates
        $lati = $_POST['lat'];
        $longi = $_POST['long'];

        // Only show places within 100km
        $distance = $_POST['distance'];
        $type= $_POST['type'];

        $lat = mysqli_real_escape_string($conn, $lati);
        $lon = mysqli_real_escape_string($conn, $longi);
        $distance = mysqli_real_escape_string($conn, $distance);
        $type = mysqli_real_escape_string($conn, $type);

        $query = <<<EOF
        SELECT * FROM (
            SELECT *,
                (
                    (
                        (
                            acos(
                                sin(( $lat * pi() / 180))
                                *
                                sin(( `lat` * pi() / 180)) + cos(( $lat * pi() /180 ))
                                *
                                cos(( `lat` * pi() / 180)) * cos((( $lon - `lng`) * pi()/180)))
                        ) * 180/pi()
                    ) * 60 * 1.1515 * 1.609344
                )
            as distance FROM `markers`
        ) markers
        WHERE distance <= $distance
        LIMIT 15;
    EOF;

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if ($row['type'] == $type) {
                // code...
            //    echo $row["name"] . "<br>"
            $output[]=$row["name"];
              }

            }
        }
        else{
          echo "<h3>Sorry no match found!!</h3>";
        }

?>

<!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Services:

      </h1>


<?php foreach ($output as $item): ?>


      <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><?php echo $item; ?> </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="#">View Project</a>
        </div>
      </div>
      <!-- /.row -->

      <hr>
<?php endforeach; ?>

      <hr>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.contain
