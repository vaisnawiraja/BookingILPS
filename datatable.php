<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
 
    <title>SISTEM E-BOOKING PENTADBIRAN | ILPS</title> 
     
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
                <a class="nav-link" href="index.php">  
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
  <img src="img/banner2.png">
            <!-- Main Content --> 
            <div id="content"> 
            <div class="container">
            <?php include('add_modal.php')?>

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
         <center><h1> SHOW STATUS </h1></center>
         <div class="container-md">
         <a class='btn btn-warning' href='print_pdf.php' role='button'>Print</a>
        <br><br> 
        <div class="card-body">
            <table class="table" id="booking">
                <thead>
                    <tr> 
                        <th>Bil</th> 
                        <!-- <th>ID Staff</th>  -->
                        <th>Name Staf</th> 
                        <th>Date Time</th> 
                        <th>Number Phone</th>
                        <th>Status</th> 
                    </tr> 
                </thead>
                <tbody>
                    <?php
                        include('conn.php');
                        $query ="SELECT * FROM booking ";
                        $view = mysqli_query($conn,$query);

                        $i=1;

                        while($row = mysqli_fetch_assoc($view)){
                        
                        ?>

                        <tr>
                        <td><?php echo $i;?></td>
                        <td><?php  echo $row['nama_staf'];?></td>
                        <td><?php  echo $row['masa_mula'];?></td>
                        <td><?php  echo $row['no_telefon'];?></td>
                        <td><?php  echo $row['status'];?></td>
                        <!-- <td>                    
                        <center>
                        <a href='delete.php?delete=<?php echo ($row['id_staf']);?>'><i class="fa-solid fa-trash"></i></a>
                        <a href='read1.php?viewid=<?php echo ($row['id_staf']);?>'><i class="fa-solid fa-eye"></i></a></center>
                        </td> -->
                        </tr>

                        <?php
                            $i++;
                                }
                        ?>

                </table>
            </div>
        </div>  
             
                <!-- Bootsrtrap Javascript-->  
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>  
            <!-- End Bootstrap Javascript--> 
         
            <!-- Jquery and datatable --> 
            <script type="text/javascript" language="javascript" src="jquery\jquery-3.6.1.js"></script> 
            <script type="text/javascript" language="javascript" src="DataTables\js\jquery.dataTables.min.js"></script> 
            <script type="text/javascript" language="javascript" src="DataTables\js\dataTables.bootstrap5.min.js"></script> 
            <script type="text/javascript" language="javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script> 
            
            <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
            <script type="text/javascript" src="http://datatables.net/tn/3"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>

            <!-- datatable script --> 
            <script>
                $(document).ready(function () { 
                $('#example').DataTable(({ 
                    order: [[0, 'asc']], 
                })); 
                });

                $(document).ready(function() {
                $('#example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                    ]
                } );
            } );
             </script> 
             <!-- end datatable script --> 
     
             </div>
             <br>
             <footer>
                 <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="text-black">  Copyright © 2022 : E-BOOKING BILIK PENTADBIRAN SISTEM ILP SELANDAR</p>
            </div>
            </footer>

        </body>        
    </html>