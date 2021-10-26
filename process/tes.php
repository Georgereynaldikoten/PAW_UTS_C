<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if(isset($_POST['register'])){
// untuk mengoneksikan dengan database dengan memanggil file db.php
include('../db.php');
// tampung nilai yang ada di from ke variabel
// sesuaikan variabel name yang ada di registerPage.php disetiap input
$name = $_POST['name'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//validation
// Cek username di database
// $cek_username=mysql_num_rows(mysql_query
//              ("SELECT username FROM users
//                WHERE username='$username'"));

// if ($cek_username > 0){
   
//     echo'<script> alert("Username sudah ada yang pakai. Ulangi lagi"); 
//     window.location = "../index.php"</script>';
//   }else{

//   }
// Melakukan insert ke databse dengan query dibawah ini
$query = mysqli_query($con,
"INSERT INTO users(name, email, no_telp, username, password)
VALUES ('$name', '$email', '$no_telp', '$username', '$password')")
or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die” 


if($query)
{
echo
'<script> alert("Register Success"); window.location = "../index.php"</script>';
}else{
echo
'<script>
alert("Register Failed");</script>';
}
}else{
echo
'<script>
window.history.back()
</script>';
}
?>