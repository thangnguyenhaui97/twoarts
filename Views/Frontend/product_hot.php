<div class="col-md-9 ftco-animate text-center">
   <p class="breadcrumbs"><span class="mr-2">Bán</span> <span>Chạy</span></p>
   <h1 class="mb-0 bread">Hot Shoes</h1>
</div>
</div>
</div>
</div>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-lg-10 order-md-last">
            <div class="row">
               <?php 
                  $id = isset($_GET["id"])?$_GET["id"]:0;
                  $hotproduct = db::get_one("select * from tbl_product where hotproduct=$id");
                  ?>
               <?php foreach($list_record as $rows): ?>
               <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                  <div class="product d-flex flex-column">
                     <a href="product-<?php echo $rows->slug ?>-<?php echo $rows->id; ?>" class="img-prod">
                        <img class="img-fluid" src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="Colorlib Template">
                        <div class="overlay"></div>
                     </a>
                     <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                           <div class="cat">
                              <span>Lifestyle</span>
                           </div>
                           <div class="rating">
                              <p class="text-right mb-0">
                                 <a href="#"><span class="ion-ios-star-outline"></span></a>
                                 <a href="#"><span class="ion-ios-star-outline"></span></a>
                                 <a href="#"><span class="ion-ios-star-outline"></span></a>
                                 <a href="#"><span class="ion-ios-star-outline"></span></a>
                                 <a href="#"><span class="ion-ios-star-outline"></span></a>
                              </p>
                           </div>
                        </div>
                        <h3><a href="product-<?php echo $rows->slug ?>-<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                        <div class="pricing">
                           <p class="price">Giá: <?php echo number_format($rows->price); ?> VNĐ</span></p>
                        </div>
                        <p class="bottom-area d-flex px-3">
                           <a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>" class="add-to-cart text-center py-2 mr-1"><span>Thêm Vào Giỏ<i class="ion-ios-add ml-1"></i></span></a>
                           <a href="#" class="buy-now text-center py-2">Mua Ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
                        </p>
                     </div>
                  </div>
               </div>
               <?php endforeach; ?>
            </div>
            <!-- phân trang -->
            <!-- chỗ này sai ko phân trang đư-->
            <div class="row mt-5">
               <div class="col text-center">
                  <div class="block-27">
                     <ul>
                        <?php for($i = 1; $i <= $num_page; $i++): ?>
                        <li class="active">
                           <a href="san-pham-ban-chay-trang-<?php echo $i; ?>">
                           <span><?php echo $i; ?></span>
                           </a>
                        </li>
                        <?php endfor; ?>

                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end phân -->
         <?php include "Views/Frontend/inc_category.php"; ?>
      </div>
   </div>
   <?php include "Views/Frontend/inc_type.php"; ?>
   <?php include "Views/Frontend/inc_price.php"; ?>
   </form>
   </div>
   </div>
   </div>
   </div>
   </div>
</section>