<?php 
    session_start(); 
    include_once('conn.php'); 
    if(isset($_POST['submit'])){ 
        $id_staf = $_POST['id_staf']; 
        $nama_staf = $_POST['nama_staf']; 
        $nama_bilik = $_POST['nama_bilik'];
        $department = $_POST['department']; 
        $masa_mula= $_POST['masa_mula']; 
        $masa_tamat = $_POST['masa_tamat']; 
        $no_telefon = $_POST['no_telefon']; 
 
    $keputusan = mysqli_query($conn, "INSERT INTO booking(id_staf, nama_staf, nama_bilik, department, masa_mula, masa_tamat, no_telefon) VALUES ('$id_staf', '$nama_staf', '$nama_bilik','$department','$masa_mula', '$masa_tamat', '$no_telefon')"); 
    } 
    header('Location:fpuser.php'); 
?>
