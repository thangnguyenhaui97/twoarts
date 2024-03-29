<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="http://localhost/twoarts/">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>DEMO - Admin</title>
      <!-- Custom fonts for this template-->
      <link href="Assets/Backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="Assets/Backend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="Assets/Backend/css/sb-admin.css" rel="stylesheet">
      <!--  -->
      <script type="text/javascript" src="Assets/backend/ckeditor/ckeditor.js"></script>
   </head>
   <body id="page-top">
    <?php   if (!isset($_SESSION['id']))
    {
        echo "<script>alert('Bạn phải đăng nhập mới được thực hiện chức năng này!'); location.href='login'</script>";
    } ?>
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
         <a class="navbar-brand mr-1" href="admin">DEMO</a>
         <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
         <i class="fas fa-bars"></i>
         </button>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                  <i class="fas fa-search"></i>
                  </button>
               </div>
            </div>
         </form>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bell fa-fw"></i>
               <span class="badge badge-danger">9+</span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-envelope fa-fw"></i>
               <span class="badge badge-danger"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
               </div>
            </li>
            <li class="nav-item dropdown no-arrow">
               <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user-circle fa-fw"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activity Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.php?area=admin&controller=login&action=logout" data-toggle="modal" data-target="#logoutModal">Đăng Xuất</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="admin">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Home</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-folder"></i>
               <span>Đơn Hàng</span>
               </a>
               <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                  <h6 class="dropdown-header"></h6>
                  <a class="dropdown-item" href="#">Đang Chờ Xử Lý</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header"></h6>
                  <a class="dropdown-item" href="#">Đã Xử Lý</a>
                  <a class="dropdown-item" href="#">Đã Hủy</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="admin/list-user">
               <i class="fas fa-fw fas fa-user"></i>
               <span>Khách Hàng</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="admin/list-admin">
               <i class="fas fa-fw fas fa-child"></i>
               <span>Admin</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="admin/list-category">
               <i class="fas fa-fw fas fa-book"></i>
               <span>Hãng</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="admin/list-product">
               <i class="fas fa-fw fas fa-shoe-prints"></i>
               <span>Sản Phẩm</span></a>
            </li>
         </ul>
         <div id="content-wrapper">
            <div class="container-fluid">
               <!-- Breadcrumbs-->
               <!-- Icon Cards-->
               <?php 
                  echo $this->view;
                  ?>

            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright © Your Website 2019</span>
                  </div>
               </div>
            </footer>
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cảnh Báo Đăng Xuất!</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Bạn Có Đồng Ý Đăng Xuất?</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="index.php?area=admin&controller=login&action=logout">Đăng Xuất</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="Assets/Backend/vendor/jquery/jquery.min.js"></script>
      <script src="Assets/Backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="Assets/Backend/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->
      <script src="Assets/Backend/vendor/chart.js/Chart.min.js"></script>
      <script src="Assets/Backend/vendor/datatables/jquery.dataTables.js"></script>
      <script src="Assets/Backend/vendor/datatables/dataTables.bootstrap4.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="Assets/Backend/js/sb-admin.min.js"></script>
      <!-- Demo scripts for this page-->
      <script src="Assets/Backend/js/demo/datatables-demo.js"></script>
      <script src="Assets/Backend/js/demo/chart-area-demo.js"></script>
   </body>
</html>