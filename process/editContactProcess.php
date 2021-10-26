<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['edit'])){  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php
         session_start();
         if ($_SESSION['isLogin']) 
         include('../db.php');
 
        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id_contact = $_POST['id_contact'];  
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];  
 
        // Melakukan insert ke databse dengan query dibawah ini 
        // INI BUAT AMBIL DATA AKUN USER YG AKTIF
        $userTemp = $_SESSION['user']['id'];
        $queryEdit = mysqli_query($con,  
            "UPDATE contact SET nama ='$nama',no_telp='$no_telp', alamat='$alamat',id='$userTemp' WHERE id_contact='$id_contact'")    
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die” 
        
        if($queryEdit){             
            echo 
                '<script> 
                alert("Edit Data Success"); 
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