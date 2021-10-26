<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="./style.css" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
        <div class="container">
             <img src="./img/LOGO.png" alt="logo" class="float-left">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#login" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"data-bs-toggle="modal" 
                            href="#exampleModalToggle">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"  data-bs-toggle="modal" 
                            href="#exampleModalToggle" >Pick Up</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" 
                            href="#exampleModalToggle" >Drop-off</a></li>

                        </ul>
                    </li>
        
                    
                    
                    <li>

                    <div>
                        <button type="button" class="btn btn-primary button" data-bss-hover-animate="rubberBand" id="login" data-bs-toggle="modal" href="#exampleModalToggle" role="button">login </button>
                        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                        <script src="./bs-init.js"></script>
                    </div>
     <!-- LOGIN -->
        <div>
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalToggleLabel">Login</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    <div class="modal-body">
                                        <form action="./process/loginProcess.php" method="post">
                                            <!-- USERNAME -->
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                        <input type="username" class="form-control" id="username" name="username"placeholder="username"/>
                                            </div>
                                        
                                            <!-- PASSWORD -->
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                                            </div>
                                            
                                            <!-- CHECKBOX -->
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="rememberMe" />
                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                        
                                            </div>
                                            
                                            <!-- SIGNUP BOX -->
                                            <div class="modal-footer d-block">
                                                <p class="float-start">Not yet account 
                                                    
                                                <!-- BUTTON -->
                                                    <a href="#" id="register" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</a>
                                                </p>
                                                    <button type="submit" class="btn btn-primary float-end" name="login">Sign In</button>
                                            </div>
                                        </form>
                                    </div>
                    </div>
                </div>
            </div>
        

         <!-- REGISTER -->
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Register</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <form action="./process/tes.php" method="post">
                                    <!-- NAMA -->
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                                    </div>
                         
                                    <!-- EMAIL -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"placeholder="Email" />
                                    </div>
                                        
                                    <!-- NOMOR TELPON -->
                                    <div class="mb-3">
                                        <label class="form-label">No Telp</label>
                                            <input type="tel" maxlength="12" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telpon" />
                                    </div>
                                    
                                    <!-- USERNAME -->
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                                    </div>
                                                        
                                    <!--PASSWORD  -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                    </div>
                                                        
                                    <div class="modal-footer d-block">

                                        <!-- BUTTON SIGNUP -->
                                        <p class="float-start">Already Have a Account? 
                                            <a href="#" id="login" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Login</a>
                                        </p>
                                            <button type="submit" name="register" class="btn btn-primary float-end" >Sign Up</button>
                                    </div>
                                </form>
                            </div>


                    </div>
                </div>
            </div>

        </div>
                    
                    </li>


                </ul>
            </div>
        </div>
    </nav>

  <!-- Jumbotron -->
  <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">WELCOME</h1>
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
                        <img src="./img/reguler.png" alt="employee" class="float-left">
                        <h4>MAZ REGULER</h4>
                        <p>Estimated Time of Arrival: 5-14 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="./img/express.png" alt="employee">
                        <h4>MAZ EXPRESS</h4>
                        <p>Estimated Time of Arrival: 3-5 Days</p>
                    </div>
                    <div class="col-sm">
                        <img src="./img/super.png" alt="employee">
                        <h4>MAZ SUPER</h4>
                        <p>Estimated Time of Arrival: 1-2 Days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- isi content -->
        <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="./img/delivery4.png" alt="workingspace" class="img-fluid">
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
                    <img src="./img/delivery.png" alt="workingspace" class="img-fluid">
                </div>
            </div>
            <div class="row workingspace">
                <div class="col-lg-5">
                    <img src="./img/delivery3.png" alt="workingspace" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h3>MAZ <span>SUPER</span></h3>
                    <p>SUPER is a service with delivery time at the destination the next day or no later than the day after(including Sunday and public holidays). .</p>
                </div>
            </div>
            <br><br>
        </div>

    <!--  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>