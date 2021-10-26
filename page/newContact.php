<?php
    session_start();
    if ($_SESSION['isLogin']) 
    include('../db.php');
?>
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

        <style>
            .side-bar {
                margin-top: 20px;
                margin-left: 200px;
                width: 300px;
                min-height: 500px;
            }

            .side-bar a{
                padding-left: 10px;
                font-size: 18px;
                text-decoration: none;
                color: black;
            }
                        
            .side-bar .menu .content-menu {
                padding: 9px 7px;
            }

            .side-bar .isActive {
                background-color: #EAF2FF!important;
                /* border-right: 8px solid #010E2F; */
            }
            
            .side-bar h2{
                padding-left: 10px;
                text-decoration: none;
                color: black;
            }

            .table td{
                text-align: right;
            }
        </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #314D63">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../img/LOGO.png" alt="logo"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../page/servicePage.php">Service</a>
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
                        <a class="nav-link dropdown-toggle bi bi-person-circle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active" href="../page/ProfilPage.php">My Profil</a></li>
                            <li><a class="dropdown-item" href="../process/logoutProcess.php">Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Side-Bar -->
    <div class="d-flex"> 
        <div class="side-bar"> 
            <h2 class="text text-center pt-2">My Profil</h2> 
                <hr> 
                <div class="menu"> 
                <div class="content-menu" > 
                        <a href="../page/ProfilPage.php" style="font-weight:600" >Personal Info</a> 
                    </div>
                    <div class="content-menu isActive" > 
                        <a href="../page/newContact.php" style="font-weight:600">Other Contact</a>                             
                    </div> 
                <hr> 
                </div> 
        </div>

   <!-- Content -->
   <div class="container p-3 m-4" style="background-color: #FFFFFF; border-top: 5px solid #314D63; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 900px; height: 550px;" > 
        <h4 >Other Contact</h4> 
        <hr>
        <a class="btn btn-primary btn-sm" href="../page/addDataContact.php">ADD CONTACT</a><br><br><br>
            <?php 
                // INI BUAT AMBIL DATA AKUN USER YG AKTIF
                 $userTemp = $_SESSION['user']['id'];
                 $query = mysqli_query($con, "SELECT * FROM contact WHERE id = '$userTemp'") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {                     
                    echo ' 
                        <div class="row" > 
                            <div class = "col-md-6 offset-md-3""><img src="../img/nullContact.png" alt="logo"/> </div>                           
                        </div>
                        <div class="row" > 
                            <div class="col-md-6 offset-md-3"><h3>Data Not Available</h3></div>                    
                        </div>
                     '; 
                }else{                           
                    while($data = mysqli_fetch_assoc($query)){                     
                        echo' 
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td>'.$data['nama'].'
                                </tr>
                                
                                <tr>
                                    <th>Phone Number</th>
                                    <td>'.$data['no_telp'].'</td>
                                </tr>
                                
                                <tr>
                                    <th>Address</th>
                                    <td>'.$data['alamat'].'</td>
                                </tr>
                            </table>
                            <a class="btn btn-primary btn-sm" href="../page/editContactPage.php?id_contact='.$data['id_contact'].'">EDIT PROFILE</a>
                            <a class="btn btn-danger btn-sm" href="../process/deleteContact.php?id_contact='.$data['id_contact'].'"onClick="return confirm ( \'Yakin?\')">DELETE CONTACT</a>
                        ';
                    } 
                } 
                ?>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>