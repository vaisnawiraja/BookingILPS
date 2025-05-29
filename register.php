<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem E-Booking Bilik Pentadbiran | ILPS</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
<body>

<?php
  include "conn.php";
  //masukkan maklumat database
  if (isset($_POST['submit'])){
  $id_staf= $_POST['id_staf'];
  $nama_staf= $_POST['nama_staf'];
  $nokp = $_POST['nokp'];
  $no_telefon= $_POST['no_telefon'];
  $password= md5 ($_POST['password']);
    //echo $nokp."". $no_telefon."". $id_staf."";
    $sql = "INSERT INTO users (id_staf,nama_staf,nokp,no_telefon,password) VALUES ('{$id_staf}','{$nama_staf}','{$nokp}','{$no_telefon}','{$password}')";
    $rs=mysqli_query($conn, $sql);
    //displaying proper message fot the user to see wheteher the query excuted perfectly or not
    if (!$rs){
      echo "Something went wrong ". mysqli_error($conn);
    }
    else { echo "<script type'text/javascript'>alert('User added successfully!')</script>";
           echo "<script type'text/javascript'> document.location = 'user.php'; </script>";
    }
  }
  ?> 
<section class="background-radial-gradient overflow-hidden">
<br><br>
<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">


      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
         
        <form method="post" action="" class="sign-in-form">
          <center><h2 class="title">REGISTER</h2></center>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <label>Staf ID</label>
              <input type="text" id="form1Example13" class="form-control form-control-lg"  name="id_staf" placeholder="Enter Your ID"/>
            </div>
            <br>
            <!-- Password input -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <label>Staf Name</label>
              <input type="text" id="form1Example13" class="form-control form-control-lg"  name="nama_staf" placeholder="Enter Your Name"/>
            </div>
            <br>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <label>IC Passport</label>
              <input type="text" id="form1Example13" class="form-control form-control-lg"  name="nokp" placeholder="Enter Your IC"/>
            </div>
            <br>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <label>Phone Number</label>
              <input type="text" id="form1Example13" class="form-control form-control-lg"  name="no_telefon" placeholder="Enter Your Phone Number"/>
            </div>
            <br>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <label>Password</label>
              <input type="text" id="form1Example13" class="form-control form-control-lg"  name="password" placeholder="Enter Your Password"/>
            </div>
            <br>
            <center>
            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-lg" name='submit'
                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                <?php  ?>
                
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br>
</section>
<!-- Section: Design Block -->
</body>
</html>

