<?php     
if(isset($_GET['id_contact'])){         
    include ('../db.php'); 
        $id_contact = $_GET['id_contact']; 
        $queryDelete = mysqli_query($con, "DELETE FROM contact WHERE id_contact='$id_contact'") or die(mysqli_error($con));         
        if($queryDelete){             
            echo             
            '<script> 
            alert("Delete Success"); 
            window.location = "../page/newContact.php" 
            </script>'; 
        }else{         
            echo 
            '<script>             
            alert("Delete Failed"); 
            window.location = "../page/newContact.php" 
            </script>'; 
        }     
    }else {         
        echo         
        '<script>         
        window.history.back() 
        </script>'; 
    } 
?> 