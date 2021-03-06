<?php
session_start();
if (!$_SESSION['isLogin']) {
    header("location: ../index.php");
}else {
    include('../db.php');
}
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="../style.css" rel="stylesheet"> 

    <title>Dashboard</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
    <div class="container">
        <a class="navbar-brand" href="../page/homePage.php"><img src="../img/LOGO.png" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../page/servicePage.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/aboutPage.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Order
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../page/myOrder_Page.php">My Order</a></li>
                        <li><a class="dropdown-item" href="../page/newOrder_Page.php">New Order</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bi bi-person-circle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../page/ProfilPage.php">My Profil</a></li>
                            <li><a class="dropdown-item" href="../process/logoutProcess.php">Log Out</a></li>
                    </ul>
                </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Our Service</h1>
            <p class="lead">Mas Express serves package deliveries and time-sensitive documents of domestic destinations through more than    1,500  exclusive service points from pick-up to delivery spread throughout  Indonesia. This service utilizes the fastest mode of transportation available and serves a wide variety of service types according to customer needs. </p>
        </div>
    </section>


  <!-- container -->
 <div class="container">
        <!-- infopanel -->
        <div class="row justify-content-md-center">
            <div class="col-8 info-panel">
                <div class="row">
                    <div class="col-sm">
                        <img src="../img/reguler.png" alt="employee" class="float-left">
                        <h4>MAZ REGULER</h4>
                        <p>Estimated Time of Arrival: 5-14 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="../img/express.png" alt="employee">
                        <h4>MAZ EXPRESS</h4>
                        <p>Estimated Time of Arrival: 3-5 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="../img/super.png" alt="employee">
                        <h4>MAZ SUPER</h4>
                        <p>Estimated Time of Arrival: 1-2 Days</p>
                    </div>
                </div>
            </div>
        </div>


     <!-- isi content -->
     <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="../img/delivery4.png" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>REGULER</span></h3>
                    <p>REGULER is a delivery service to all regions of Indonesia, with an estimated delivery time of 5-14 business days, depending on the zone of the area to which the delivery destination is.</p>
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-7">
                    <h3>MAZ <span>EXPRESS</span></h3>
                    <p>EXPRESS is a delivery service to all regions of Indonesia, with an estimated delivery time of 3-5 business days, depending on the zone of the area to which the delivery destination is.</p>
                </div>
                <div class="col-lg-5">
                    <img src="../img/delivery.png" alt="workingspace" class="img-fluid">
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="../img/delivery3.png" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>SUPER</span></h3>
                    <p>SUPER is a service with delivery time at the destination the next day or no later than the day after(including Sunday and public holidays). .</p>
                </div>
            </div>
            <br><br>
        </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
'?>