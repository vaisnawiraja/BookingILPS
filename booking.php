<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
 
    <title>Sistem E-Booking Bilik Pentadbiran | ILPS</title> 
     
    <!-- Custom fonts for this template --> 
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet"> 
 
    <!-- Custom styles for this template --> 
    <link href="css/sb-admin-2.min.css" rel="stylesheet"> 
 
    <!-- Custom styles for this page --> 
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> 

</head> 
<style>
     h1 {
        color: #256D85;
        text-shadow: 2px 2px 4px #000000;
        font-family:'Lucida Handwriting';
        }
</style>
<body id="page-top">  
  
    <!-- Page Wrapper -->  
    <div id="wrapper">  
  
        <!-- Sidebar -->  
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">  
            <img src="img/logoselandar.png" class="rounded mx-auto d-block" height="50" width="100" alt="logo ilp" loading="lazy"/>
            <!-- Divider -->  
            <hr class="sidebar-divider my-0"> 
            <div class="sidebar-heading"></div> 
            <!-- Nav Item - New Booking -->  
            <li class="nav-item active">  
                <a class="nav-link" href="booking.php">  
                <i class="fa fa-home"></i>  
                <span>New Booking</span></a>  
            </li> 
              <!-- Nav Item - Status Booking-->  
              <li class="nav-item active">  
                <a class="nav-link" href="fpuser.php">  
                <i class="fa fa-home"></i>  
                <span>Status Booking</span></a>  
            </li> 
            <!-- logout -->  
            <li class="nav-item active">  
                <a class="nav-link" href="logout.php">  
                <i class="fa fa-home"></i>
                <span>Logout</span></a>  
            </li> 
            <!-- Divider --> 
            <hr class="sidebar-divider d-none d-md-block"> 
            <!-- Sidebar Toggler (Sidebar) --> 
            <div class="text-center d-none d-md-inline"> 
                <button class="rounded-circle border-0" id="sidebarToggle"></button> 
            </div>
        </ul> 
         
        <!-- Content Wrapper --> 
        <div id="content-wrapper" class="d-flex flex-column"> 
        <img src="img/banner.png">
            <!-- Main Content --> 
            <div id="content"> 
            <div class="container">
            <?php include('add_modal.php')?> 

            <!-- <header class="d-flex justify-content-center py-1">  -->
            <div class="table-responsive">
                <div class="container-sm">
                        <?php 
                        if(isset($_SESSION['success'])){ 
                            echo  
                                "<div class='alert alert-success alert-dismissible fade show' role='alert'> 
                                Data berjaya disimpan 
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> 
                                </div>"; 
                        } 
                        if(isset($_SESSION['error'])){ 
                            echo  
                                "<div class='alert alert-success alert-dismissible fade show' role='alert'> 
                                Data tidak berjaya disimpan 
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> 
                                </div>"; 
                        } 
                        ?>                
                </div>
        
            <!-- data trigger modal -->
            <br> 
            <center><h1>BOOKING MEETING ROOM</h1></center>
            <div class="container-md">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Booking</button> 
            <br><br>
            <!-- data table bootstrap5--> 
                <table id="example" class="table"> 
                    <thead> 
                        <tr> 
                            <th>Bil</th> 
                            <!-- <th>ID Staff</th>  -->
                            <th>Name Staf</th> 
                            <th>Date Time</th> 
                            <th>Number Phone</th>
                            <th>Action</th> 
                        </tr> 
                    </thead> 

                    <tbody>
                        <?php include ('conn.php'); 
                            $sql = "SELECT * FROM booking"; 
                            $query = $conn->query($sql); 
                            $i=1; 
                                while($row = $query->fetch_assoc()){ 
                                    echo 
                                    "<tr> 
                                        <td scope='row'>$i</td> 
                                        
                                        <td>".$row['nama_staf']."</td> 
                                        <td>".$row['masa_mula']."</td> 
                                        <td>".$row['no_telefon']."</td>
                                        <td> 
                                        <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#view_".$row['id_staf']."'><i class='bi bi-eye'></i></button>
                                        </td> 
                                    </tr>"; 
                                     
                                    include('view_modal.php');
                                    $i++; 
                                }     
                        ?> 
                    </tbody>
                </table>
            </div>  
 

        <!-- Bootsrtrap Javascript-->  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
        <!-- End Bootstrap Javascript--> 
         
        <!-- Jquery and datatable --> 
        <script type="text/javascript" language="javascript" src="jquery\jquery-3.6.1.js"></script> 
        <script type="text/javascript" language="javascript" src="DataTables\js\jquery.dataTables.min.js"></script> 
        <script type="text/javascript" language="javascript" src="DataTables\js\dataTables.bootstrap5.min.js"></script> 
        <script type="text/javascript" language="javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script> 
            
        <!-- datatable script --> 
        <script>$(document).ready(function () { 
        $('#example').DataTable(({ 
        order: [[0, 'asc']], 
        })); 
        });</script> 
        <!-- end datatable script --> 

             <!-- footer -->
             <footer>
                 <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="text-black">  Copyright © 2022 : E-BOOKING BILIK PENTADBIRAN SISTEM ILP SELANDAR</p>
            </div>
            </footer>
            <!-- End of Footer -->

            <!-- Scroll to Top Button--> 
            <a class="scroll-to-top rounded" href="#page-top"> 
                <i class="fas fa-angle-up"></i> 
            </a> 
        
            <!-- Bootstrap core JavaScript--> 
            <script src="vendor/jquery/jquery.min.js"></script> 
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
        
            <!-- Core plugin JavaScript--> 
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script> 
        
            <!-- Custom scripts for all pages--> 
            <script src="js/sb-admin-2.min.js"></script>
        
        </div>
    </div>    
</body>
</html>