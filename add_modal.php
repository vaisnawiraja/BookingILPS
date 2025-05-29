<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sistem E-Booking Bilik Pentadbiran | ILPS</title> 
</head> 
<body> 
     <!-- Modal --> 
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
            <div class="modal-dialog modal-dialog-scrollable"> 
            <div class="modal-content"> 
            <div class="modal-header"> 
                <h1 class="modal-title fs-5" id="exampleModalLabel">New Data</h1> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div> 
            <div class="modal-body"> 
                <form method ="POST" action="add.php" class="was-validated"> 
                <div> 
                    <label for="validationTextarea" class="form-label">Staf ID</label> 
                    <input class="form-control" id="validationTextarea"  name="id_staf" placeholder="User id must not be blank" required></input> 
                    <div class="invalid-feedback"> 
                    </div> 
                </div> 
                <br>
                <div> 
                    <label>Staf Name</label> 
                    <input type="text" class="form-control" id="nama_staf" name="nama_staf"> 
                </div> 
                <br>
                <div> 
                    <label>Room Name</label> 
                    <select class="form-select" aria-label="Default select example" id="nama_bilik" name="nama_bilik"> 
                    <option selected></option> 
                    <option>Meeting Room Administrator</option> 
                    <option>Meeting Room Library</option> 
                    </select> 
                </div> 
                <br>
                <div> 
                <label>Department</label> 
                    <select class="form-select" aria-label="Default select example" id="department" name="department"> 
                    <option selected></option> 
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
                <br>
                <div> 
                    <label>Date Time Start</label> 
                    <input type="datetime-local" class="form-control" name="masa_mula"> 
                </div> 
                <br>
                <div> 
                    <label>Date Time End</label> 
                    <input type="datetime-local" class="form-control" name="masa_tamat"> 
                </div>
                <br>   
                <div> 
                    <label>Phone Number</label> 
                    <input type="tel" class="form-control" id="no_telefon" name="no_telefon"> 
                </div> 
                <br>
                <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-primary" name="submit">Save</button> 
            </div> 
                </form> 
        </div> 
        </div> 
                </div> 
            </div> 
            </div> 
</body> 
</html>