<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['edit'])){  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php'); 
 
        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        $id = $_POST['id']; 
        $username = $_POST['username']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $name = $_POST['name'];
        $no_telp = $_POST['no_telp']; 
        $email = $_POST['email']; 
        $alamat = $_POST['alamat']; 
 
        // Melakukan insert ke databse dengan query dibawah ini 
        $queryEdit = mysqli_query($con,  
            "UPDATE users SET username ='$username', password='$password', name='$name', no_telp='$no_telp', email='$email', alamat='$alamat' WHERE id='$id'")    
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die” 
        
        if($queryEdit){             
            echo 
                '<script> 
                alert("Edit Data Success"); 
                window.location = "../page/ProfilPage.php" 
                </script>'; 
            }else{             
                echo 
                    '<script>                 
                    alert("Edit Data Failed");  
                    </script>'; 
            } 
    
    }else{         
        echo 
            '<script>             
            window.history.back() 
            </script>'; 
    } 
?> 