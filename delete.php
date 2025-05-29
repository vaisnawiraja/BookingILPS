<?php  
    include_once('conn.php'); 
    $id_staf = $_GET['id_staf']; 
    $query = mysqli_query($conn, "DELETE FROM booking WHERE id_staf ='$id_staf' "); 
 
    header('Location: tambahdata.php'); 
?>