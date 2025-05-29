<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sistem E-Booking Bilik Pentadbiran | ILPS</title> 
</head> 
<style> 
a.print_link { 
    display: inline-block; 
    padding: 5px 10px; 
    border-radius: 3px; 
    background-color: black; 
    color: blanchedalmond; 
    transition: all 0.2s ease-in-out; 
} 
a.print_link:hover { 
    background-color: #ffffff; 
    color: #b95d6a; 
} 
</style> 
<body> 
<div class="modal fade" id="view_<?php echo $row['id_staf']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <!-- Scrollable modal --> 
    <div class="modal-dialog modal-dialog-scrollable"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h1 class="modal-title fs-5" id="exampleModalLabel">View Booking</h1> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
      </div> 
      <div class="modal-body"> 
      <center><img src="img/logoselandar.png" width="300px"></center>
        <form method="POST" action=""> 
          <div class="mb-3"> 
          <input type="hidden" class="form-control" name="id" value="<?php echo $row['id_staf']; ?>"> 
            <label for="recipient-name" class="col-form-label">Staf Name</label> 
            <input type="" class="form-control" name="nama_staf" value="<?php echo $row['nama_staf']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Room Name</label> 
            <input type="" class="form-control" name="nama_bilik" value="<?php echo $row['nama_bilik']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Department</label> 
            <input type="" class="form-control" name="department" value="<?php echo $row['department']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Date Time Start</label> 
            <input type="" class="form-control" name="masa_mula" value="<?php echo $row['masa_mula']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Date Time End</label> 
            <input type="" class="form-control" name="masa_tamat" value="<?php echo $row['masa_tamat']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Status</label> 
            <input type="" class="form-control" name="status" value="<?php echo $row['status']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Phone Number</label> 
            <input type="" class="form-control" name="no_telefon" value="<?php echo $row['no_telefon']; ?>"> 
          </div> 
          <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
          </div> 
                                
                                     
          <?php include('print.php'); ?>
        </form> 
      </div> 
    </div> 
  </div> 
</div> 
</body> 
</html>
