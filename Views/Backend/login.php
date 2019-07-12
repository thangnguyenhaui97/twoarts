<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>DEMO - Login</title>
      <!-- Custom fonts for this template-->
      <link href="Assets/Backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="Assets/Backend/css/sb-admin.css" rel="stylesheet">
   </head>
   <body class="bg-dark">
      <div class="container">
      <div class="card card-login mx-auto mt-5">
         <div class="card-header">Đăng nhập</div>
         <div class="card-body">
            <form method="post" action="index.php?area=admin&controller=login&action=doLogin">
               <div class="form-group">
                  <div class="form-label-group">
                     <input type="email" name="email" class="form-control" required="required" autofocus="autofocus">
                     <label for="inputEmail">Tài Khoản</label>
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-label-group">
                     <input type="password" name="password" class="form-control" required="required">
                     <label for="inputPassword">Mật Khẩu</label>
                  </div>
               </div>
               <div class="form-group">
                  <div class="checkbox">
                     <label>
                     <input type="checkbox" value="remember-me">
                     Nhớ mật khẩu
                     </label>
                  </div>
                  </div style="margin: auto; margin-left: 20px;">
                  <input type="submit" value="Đăng nhập" class="btn btn-primary" style="margin: auto; width: 100%;">
            </form>
            <!-- <div class="text-center">
               <a class="d-block small mt-3" href="register.html">Register an Account</a>
               <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
               </div> -->
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="Assets/Backend/vendor/jquery/jquery.min.js"></script>
      <script src="Assets/Backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="Assets/Backend/vendor/jquery-easing/jquery.easing.min.js"></script>
   </body>
</html>