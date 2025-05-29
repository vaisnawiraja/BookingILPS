<?php 
 
      include('conn.php'); 
        if(isset($_GET['view'])){ 
        $id_staf= $_GET['view']; 
        $query = "SELECT * FROM booking WHERE id_staf={'id_staf'}";  
        $result = mysqli_query($conn,$query); 
    $i= 1; 
      while($row = mysqli_fetch_assoc($result)){ 
          $id_staf = $row['id_staf']; 
          $nama_staf_staf= $row['nama_staf']; 
          $nama_bilik = $row['nama_bilik']; 
          $department = $row['department']; 
          $masa_mula= $row['masa_mula']; 
          $masa_tamat= $row['masa_tamat']; 
          $status= $row['status'];  
          $no_telefon = $row['no_telefon']; 
          
          echo  "<tr>"; 
          echo  "<th scope='row'>$i</th>"; 
          echo  "<td>$nama_staf</td>"; 
          echo  "<td>$nama_bilik</td>"; 
          echo  "<td>$department</td>"; 
          echo  "<td>$masa_mula</td>"; 
          echo  "<td>$masa_tamat</td>"; 
          echo  "<td>$status</td>"; 
          echo  "<td>$no_telefon</td>"; 
          echo  "</tr>"; 
          $i++; 
            } 
          } 
?>