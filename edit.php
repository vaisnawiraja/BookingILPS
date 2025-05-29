<?php 
    session_start(); 
    include_once('conn.php'); 
    if(isset($_POST['edit'])){ 
        $id_staf = $_POST['id_staf']; 
        $nama_staf = $_POST['nama_staf']; 
        $nama_bilik = $_POST['nama_bilik'];
        $department = $_POST['department'];  
        $masa_mula = $_POST['masa_mula']; 
        $masa_tamat = $_POST['masa_tamat'];
        $status = $_POST['status'];  
        $no_telefon = $_POST['no_telefon']; 
 
    $keputusan = mysqli_query($conn, "UPDATE booking SET nama_staf = '$nama_staf', nama_bilik = '$nama_bilik', department = '$department', masa_mula= '$masa_mula', masa_tamat= '$masa_tamat', status = '$status', no_telefon = '$no_telefon' WHERE id_staf= $id_staf"); 
    } 
    header('Location:tambahdata.php'); 
?>