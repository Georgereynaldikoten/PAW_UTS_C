<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['save'])){  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php
         session_start();
         if ($_SESSION['isLogin']) 
         include('../db.php');
 
        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];  
 
        // Melakukan insert ke databse dengan query dibawah ini 
        // INI BUAT AMBIL DATA AKUN USER YG AKTIF
        $userTemp = $_SESSION['user']['id'];
        $query = mysqli_query($con,  
            "INSERT INTO contact(nama, no_telp, alamat,id)  
                VALUES 
            ( '$nama', '$no_telp', '$alamat', (SELECT id from users WHERE id='$userTemp'))")                 
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die” 
        
        if($query){             
            echo 
                '<script> 
                alert("Create Data Success"); 
                window.location = "../page/newContact.php" 
                </script>'; 
            }else{             
                echo 
                    '<script>                 
                    alert("Create Data Failed");  
                    </script>'; 
            } 
    
    }else{         
        echo 
            '<script>             
            window.history.back() 
            </script>'; 
    } 
?> 