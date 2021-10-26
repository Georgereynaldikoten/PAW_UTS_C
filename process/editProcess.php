<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['update'])){
        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');
        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id = $_POST['id'];
        $sender = $_POST['sender_name'];
        $origin = $_POST['sender_origin'];
        $sender_phone = $_POST['phone_number'];
        $senderpost = $_POST['post_code'];
        $senderadd = $_POST['address1'];
        $recipient = $_POST['name_recip'];
        $destination = $_POST['destination'];
        $phone_recipt = $_POST['phone_recipt'];
        $post_recipt = $_POST['post_recipt'];
        $dropaddress = $_POST['address2'];
        $item_name = $_POST['item_name'];
        $item_type = $_POST['item_type'];
        $service = $_POST['service'];
        $quantity = $_POST['quantity'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];
        $note = $_POST['notes'];
        $ordertype = $_POST['ordertype'];

        // Melakukan perubahan data ke databse
        $sql = "UPDATE neworder SET sender='$sender', origincity='$origin', senderphone='$sender_phone', senderpost='$senderpost', senderadd='$senderadd',
        recipient='$recipient', destinationcity='$destination', reciptphone='$phone_recipt', reciptpost='$post_recipt', dropadd='$dropaddress',
        itemName='$item_name', itemType='$item_type', service='$service', quantity='$quantity', weight='$weight', height='$height', width='$width', length='$length', notes='$note', ordertype='$ordertype'
        WHERE id=$id";
        if ($con->query($sql) === TRUE) {
            echo
                '<script>
                alert("Edit Success"); window.location = "../page/myOrder_Page.php"
                </script>';
        }else {
            echo
                '<script>
                alert("Edit Failed");
                </script>';
        }
    }
?>