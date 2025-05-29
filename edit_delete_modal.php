<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <title>Sistem E-Booking Bilik Pentadbiran | ILPS</title> 
</head> 
<body> 
     <!-- Modal EDIT--> 
     
     <div class="modal fade" id="edit_<?php echo $row['id_staf']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
            <div class="modal-dialog modal-dialog-scrollable"> 
            <div class="modal-dialog modal-xl">
            <div class="modal-content"> 
            <div class="modal-header"> 
              <h1 class="modal-title fs-5" id="exampleModalLabel">Update Booking</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div> 
           
            <div class="modal-body"> 
                <form method ="POST" action="edit.php"> 
                <div> 
                <input type="hidden" class="form-control" name="id_staf"  value="<?php echo $row['id_staf']; ?>"> 
 
                   <b><label>Staf Name</label></b>
                    <input type="text" class="form-control"  name="nama_staf" value="<?php echo $row['nama_staf']; ?>"> 
                </div> 
                <div class="mb-3"> 
                <b><label>Room Name</label></b> 
                <select class="form-select" aria-label="Default select example" id="nama_bilik" name="nama_bilik"> 
                    <option selected><?php echo $row['nama_bilik']; ?></option> 
                    <option>Meeting Room 1</option> 
                    <option>Meeting Room 2</option> 
                </select> 
                </div> 
                <div class="mb-3"> 
                <b><label>Department</label></b> 
                <select class="form-select" aria-label="Default select example" id="department" name="department"> 
                    <option selected><?php echo $row['department']; ?></option> 
                    <option value="Bahagian Teknologi Perisian (Pembangunan Aplikasi Web)">Bahagian Teknologi Perisian (Pembangunan Aplikasi Web)</option>
					<option value="Bahagian Teknologi Komputer (Sistem)">Bahagian Teknologi Komputer (Sistem)</option>
					<option value="Bahagian Teknologi Komputer (Rangkaian)">Bahagian Teknologi Komputer (Rangkaian)</option>
					<option value="Bahagian Teknologi Minyak & Gas (Lukisan Perpaipan)">Bahagian Teknologi Minyak & Gas (Lukisan Perpaipan)</option>
					<option value="Bahagian Teknologi Rekabentuk Produk Industri">Bahagian Teknologi Rekabentuk Produk Industri</option>	
					<option value="Bahagian Pengajian Akademik">Bahagian Pengajian Akademik</option>	
					<option value="Bahagian Pengurusan Pelajar dan Latihan">Bahagian Pengurusan Pelajar dan Latihan</option>	
					<option value="Bahagian Kawalan Kualiti Latihan">Bahagian Kawalan Kualiti Latihan</option>	
					<option value="Bahagian Pembangunan & Pengurusan Aset">Bahagian Pembangunan & Pengurusan Aset</option>	
					<option value="Bahagian Pusat Sumber & Multimedia">Bahagian Pusat Sumber & Multimedia</option>
					<option value="Bahagian Khidmat Pengurusan">Bahagian Khidmat Pengurusan</option>
					<option value="Bahagian Community Employment Support Services">Bahagian Community Employment Support Services</option> 
                </select> 
                </div> 
                <div class="mb-3"> 
                  <b><label>Date Time Start</label></b>
                    <input type="datetime-local" class="form-control"  name="masa_mula" value="<?php echo $row['masa_mula']; ?>"> 
                </div> 
                <div class="mb-3"> 
                  <b><label>Date Time End</label></b> 
                    <input type="datetime-local" class="form-control"  name="masa_tamat" value="<?php echo $row['masa_tamat']; ?>"> 
                </div> 
                <div class="mb-3"> 
                <b><label>Status</label></b> 
                <select class="form-select" aria-label="Default select example" id="status" name="status"> 
           
                    <option selected><?php echo $row['status']; ?></option> 
                    <option value="Approved">Approved</option>
					<option value="Rejected">Rejected</option>
                </select> 
                </div>
                <div class="mb-3"> 
                  <b><label>Phone Number</label></b> 
                    <input type="tel" class="form-control" name="no_telefon" value="<?php echo $row['no_telefon']; ?>"> 
                </div> 
                <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-primary" name="edit">Update Data</button> 
            </div> 
                </form> 
    </div> 
            </div> 
            </div> 
            </div> 
            </div> 
</div>
 
 
<body> 
     <!-- Modal Delete--> 
     <div class="modal fade" id="delete_<?php echo $row['id_staf']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
            <div class="modal-dialog modal-dialog-scrollable"> 
            <div class="modal-content"> 
            <div class="modal-header"> 
                <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete <?php echo $row['nama_staf']; ?></h1> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div> 
            <div class="modal-body"> 
                <p>Are you really want to delete <b><?php echo $row['nama_staf']; ?><b>?</p> 
            </div> 
 
                <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button> 
                <a href="delete.php?id_staf=<?php echo $row['id_staf']; ?>" class="btn btn-danger">Yes</a> 
            </div> 
                
        </div> 
    </div> 
</div> 
           
</body> 
</html>