<div class="col-md-9 ftco-animate text-center">
   <p class="breadcrumbs"><span class="mr-2">DEMO</span> <span>SHOP</span></p>
   <h1 class="mb-0 bread">Giỏ Hàng</h1>
</div>
</div>
</div>
</div>
<?php 
   //kiem tra xem gio hang co ton tai khong, neu co thi hien thi len
   if(isset($_SESSION["cart"])):
   ?> 
<section class="ftco-section ftco-cart">
   <?php 
      //kiem tra neu co phan tu trong gio hang thi moi hien thi noi dung ben duoi
      if(cart::cart_number() > 0): 
      ?>
   <div class="container">
      <div class="row">
         <div class="col-md-12 ftco-animate">
            <div class="cart-list">
               <table class="table">
                  <thead class="thead-primary">
                     <tr class="text-center" style="font-size: 16px;">
                        <th>&nbsp;</th>
                        <th>Ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Giảm Giá</th>
                        <th>Số Lượng Mua</th>
                        <th>Tổng Tiền</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        //duyet cac phan tu trong sesion cart
                        foreach($_SESSION["cart"] as $key=>$product):
                        ?>   
                     <tr class="text-center">
                        <td class="product-remove"><a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"><span class="ion-ios-close"></span></a></td>
                        <td class="image-prod">
                           <div class="img" style="background-image:url(Assets/Upload/Product/<?php echo $product["img"]; ?>);"></div>
                        </td>
                        <td class="product-name">
                           <h3><?php echo $product["name"]; ?></h3>
                           <p><?php echo $product["description"]; ?></p>
                        </td>
                        <td class="price"><?php echo number_format($product["price"]); ?> VNĐ</td>
                        <td class="discount"><?php echo $product["discount"]; ?> %</td>
                        <td class="quantity">
                           <div class="input-group mb-3">
                              <input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $product["number"]; ?>" min="1" max="100">
                           </div>
                        </td>
                        <td class="total"><?php echo number_format($product["number"]*($product["price"]-$product["price"]*$product["discount"]/100)); ?> VNĐ</td>
                     </tr>
                     <?php endforeach; ?>
                     <!-- END TR-->
                  </tbody>
                  <tfoot>
                     <tr class="text-center">
                        <td colspan="12" class="product-remove-all">
                           <a href="index.php?controller=cart&action=destroy" class="btn btn-primary py-3 px-4" style="text-transform: uppercase; width: 200px; float: left;">Xóa Toàn Bộ Giỏ Hàng</a>
                           <a href="trang-chu" class="btn btn-primary py-3 px-4" style="text-transform: uppercase; width: 200px; float: right;">Tiếp tục mua hàng</a>
                           <!-- <input type="submit" class="btn btn-primary py-3 px-4" style="text-transform: uppercase; width: 200px; float: right;" value="Cập nhật"> -->
                        </td>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
      <?php elseif(cart::cart_number() <= 0): ?>
      <h2 class="text-center">Giỏ Hàng Trống!</h2>
      <p style="text-align: center;"><a href="trang-chu" class="btn btn-primary py-3 px-4">Quay Lại Trang Chủ</a></p>
      <?php endif; ?>
      <?php 
         //kiem tra neu co phan tu trong gio hang thi moi hien thi noi dung ben duoi
         if(cart::cart_number() > 0): 
         ?>
      <div class="row justify-content-start">
         <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
               <h3>Tổng Thanh Toán</h3>
               <p class="d-flex">
                  <span>Subtotal</span>
                  <span><?php echo number_format(cart::cart_total()); ?></span>
                  <span>VNĐ</span>
               </p>
               <p class="d-flex">
                  <span>Giao hàng</span>
                  <span>0</span>
                  <span>VNĐ</span>
               </p>
               <hr>
               <p class="d-flex total-price">
                  <span>Total</span>
                  <span><?php echo number_format(cart::cart_total() + 0); ?></span>
                  <span>VNĐ</span>
               </p>
            </div>
            <p class="text-center"><a href="thanh-toan" class="btn btn-primary py-3 px-4">Tiến Hành Thanh Toán</a></p>
         </div>
      </div>
      <?php endif; ?>
   </div>
</section>
<?php endif; ?>