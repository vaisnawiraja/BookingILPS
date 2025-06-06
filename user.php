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
  session_start();
  if(isset($_POST['login'])){
    $id_staf=$_POST['id_staf'];
    $password=md5 ($_POST['password']);
    
     //Checking is user existing in the database or not
     $query = "SELECT * FROM users WHERE id_staf='{$id_staf}'and password='{$password}'";
     $result = mysqli_query($conn,$query);
     //semak@baca coding satu persatu baris
     $rows = mysqli_num_rows($result);
           if($rows==1){
         $_SESSION['id_staf'] = $id_staf;
         $_SESSION['nokp'] = $password;
               // Redirect user to index.php
         header("Location: booking.php");
            }else{
     echo "<div class='form'><h3>id_staf/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
    }
    }else
    ?>

<section class="background-radial-gradient overflow-hidden">
  <br><br><br><br><br>
<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
         
        <form method="post" action="" class="sign-in-form">
          <center><h2 class="title">LOGIN USER</h2></center>
          <br>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <label>Staf ID</label>
              <input type="text" id="form1Example13" class="form-control form-control-lg"  name="id_staf" placeholder="Enter Your ID"/>
            </div>

            <br>

            <!-- Password input -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <label>Password</label>
              <input type="password" id="form1Example23" class="form-control form-control-lg"  name="password"  placeholder="Enter Your Password"/>
            </div>

            <br>
            <center>
            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-lg" name='login'
                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                <?php  ?>
                <br><br>
                <a href="register.php"> <p>Register Here </p></a>
            </center>
          </form>
        </div>
      </div>
    </div>
<br><br><br><br><br><br><br><br>
</section>
<!-- Section: Design Block -->
</body>
</html>

