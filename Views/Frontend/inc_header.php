<!-- <?php echo $_SESSION["user_id"]; ?> -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
   <a class="navbar-brand" href="trang-chu">DEMO</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="oi oi-menu"></span> Menu
   </button>
   <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
               <a class="dropdown-item" href="tat-ca-san-pham">Tất Cả Sản Phẩm</a>
               <a class="dropdown-item" href="giay-1">Giày Nam</a>
               <a class="dropdown-item" href="giay-2">Giày Nữ</a>
               <a class="dropdown-item" href="san-pham-ban-chay">Hot Shoes</a>
            </div>
         </li>
          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
            
         <?php if(isset($_SESSION['user_id'])):?>
         <li class="nav-item"><a href="don-hang" class="nav-link">Đơn Hàng</a></li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_name'] ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
               <a class="dropdown-item" href="thong-tin-ca-nhan">Thông Tin Cá Nhân</a>
               <a class="dropdown-item" href="doi-mat-khau">Đổi Mật Khẩu</a>
               <a class="dropdown-item" href="thanh-toan">Thanh Toán</a>
               <a class="dropdown-item" href="dang-xuat">Đăng Xuất</a>
            </div>
         </li>
         <?php else:?>
            <li class="nav-item"><a href="dang-ky" class="nav-link">Đăng Kí</a></li>
            <li class="nav-item"><a href="dang-nhap" class="nav-link">Đăng Nhập</a></li>
         <?php endif;?>
        
         <li class="nav-item dropdown"><a href="gio-hang" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo cart::cart_number(); ?> Sản Phẩm]</a>
         </li>
      </ul>
   </div>
</nav>