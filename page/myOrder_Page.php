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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style.css" rel="stylesheet"> 

    <title>Dashboard</title>
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item active" href="../page/myOrder_Page.php">My Order</a></li>
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

    <!-- Content -->
    <div class="container-xl bg bg-light text-dark" style="margin-top: 100px">
    <div class="d-flex align-items-center">  
        <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Sender</th>
                <th scope="col">Recipient</th>
                <th scope="col">Order Type</th>
                <th scope="col">Pick Up Address</th>
                <th scope="col">Drop Address</th>
                <th scope="col">Item</th>
                <th scope="col">Service Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
           $userTemp = $_SESSION['user']['id'];
           $query = mysqli_query($con, "SELECT * FROM neworder WHERE id_user = '$userTemp'") or die(mysqli_error($con));
            if (mysqli_num_rows($query) == 0) {
            echo '<tr> <td colspan="9" class="text-center"> ~Belum ada data~ </td> </tr>';
            }else{
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                echo'
                <tr>
                    <th scope="row" class="text-center">'.$no.'</th>
                    <td>'.$data['sender'].'</td>
                    <td>'.$data['recipient'].'</td>
                    <td>'.$data['ordertype'].'</td>
                    <td>'.$data['senderadd'].'</td>
                    <td>'.$data['dropadd'].'</td>
                    <td>'.$data['itemType'].'</td>
                    <td>'.$data['service'].'</td>
                    <td class="text-center">
                    <a href="./editOrder_Page.php?id='.$data['id'].'"><i style="color: green" class="fa fa-edit"></i></a>
                    <a href="../process/deleteOrder_Process.php?id='.$data['id'].'"
                    onClick="return confirm ( \'Yakin?\')">
                    <i style="color: red" class="fa fa-trash"></i>
                    </a>
                    </td>
                </tr>';
                $no++;
                }
            }
        ?>
        </tbody>
        </table> 
    </div>
    <div class="d-flex justify-content-end">
        <a href="../page/homePage.php">
        <button type="submit" class="btn btn-primary" name="login">Done</button>
        </a>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>