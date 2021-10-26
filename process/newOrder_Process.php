<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['order'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        session_start();
        if ($_SESSION['isLogin']) 
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
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
        // Melakukan insert ke databse dengan query dibawah ini
        $userTemp = $_SESSION['user']['id'];
        $query = mysqli_query($con,
            "INSERT INTO neworder(sender, origincity, senderphone, senderpost, senderadd,
            recipient, destinationcity, reciptphone, reciptpost, dropadd,
            itemName, itemType, service, quantity, weight, height, width, length, notes, ordertype, id_user)
                VALUES
            ('$sender', '$origin', '$sender_phone','$senderpost', '$senderadd',
            '$recipient', '$destination', '$phone_recipt','$post_recipt', '$dropaddress', 
            '$item_name', '$item_type', '$service', '$quantity', '$weight', '$height', '$width', 
            '$length', '$note', '$ordertype', (SELECT id from users WHERE id='$userTemp'))")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

                if($query){
                    echo
                    '<script>
                    alert("Create Data Success"); window.location = "../page/myOrder_Page.php"
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