<div class="col-md-9 ftco-animate text-center">
   <p class="breadcrumbs"><span class="mr-2">Product</span> <span>Detail</span></p>
   <h1 class="mb-0 bread"><?php echo $record->name; ?></h1>
</div>
</div>
</div>
</div>
<section class="ftco-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mb-5 ftco-animate">
            <a href="Assets/Upload/Product/<?php echo $record->img; ?>" class="image-popup prod-img-bg"><img src="Assets/Upload/Product/<?php echo $record->img; ?>" class="img-fluid" alt="Colorlib Template"></a>
         </div>
         <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3><?php echo $record->name; ?></h3>
            <div class="rating d-flex">
               <p class="text-left mr-4">
                  <a href="#" class="mr-2">5.0</a>
                  <a href="#"><span class="ion-ios-star-outline"></span></a>
                  <a href="#"><span class="ion-ios-star-outline"></span></a>
                  <a href="#"><span class="ion-ios-star-outline"></span></a>
                  <a href="#"><span class="ion-ios-star-outline"></span></a>
                  <a href="#"><span class="ion-ios-star-outline"></span></a>
               </p>
               <p class="text-left mr-4">
                  <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
               </p>
               <p class="text-left">
                  <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
               </p>
            </div>
            <p class="price">Giá: <span><?php echo number_format($record->price); ?> VNĐ</span></p>
            <p class="type">Giày <span>
               <?php 
                  $type_id = $record->type_id;
                  //$category = db::get_one("select name from tbl_category where category_id=:id", array("id"=>$id));
                  $type = db::get_one("select * from tbl_type where type_id=$type_id");
                  ?>
               <?php echo $type->name; ?></span>
            </p>
            <p class="content"><span>Mô Tả: <?php echo $record->description; ?></span></p>
            <div class="row mt-4">
               <div class="col-md-6">
                  <div class="form-group d-flex">
                     <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                           <option value="">Size 38</option>
                           <option value="">Size 39</option>
                           <option value="">Size 40</option>
                           <option value="">Size 41</option>
                           <option value="">Size 42</option>
                           <option value="">Size 43</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="input-group col-md-6 d-flex mb-3">
                  <span class="input-group-btn mr-2">
                  <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                  <i class="ion-ios-remove"></i>
                  </button>
                  </span>
                  <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                  <span class="input-group-btn ml-2">
                  <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                  <i class="ion-ios-add"></i>
                  </button>
                  </span>
               </div>
               <div class="w-100"></div>
               <div class="col-md-12">
                  <p style="color: #000; font-weight: bold;"><?php if($record->quantity > 0): ?>
                     <?php echo 'Còn: ' . $record->quantity; ?> Sản phẩm.
                     <?php elseif($record->quantity <= 0): ?>
                     <?php echo 'Tạm thời hết hàng!'; ?>
                     <?php endif; ?>
                  </p>
               </div>
            </div>
            <p><a href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>" class="btn btn-black py-3 px-5 mr-2">Thêm Giỏ Hàng</a><a href="#" class="btn btn-primary py-3 px-5">Mua Ngay</a></p>
         </div>
      </div>
      <div class="row mt-5">
         <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Chi tiết sản phẩm</a>
               <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Nhà Sản Xuất</a>
               <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Reviews</a>
            </div>
         </div>
         <div class="col-md-12 tab-wrap">
            <div class="tab-content bg-light" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                  <div class="p-4">
                     <h3 class="mb-4"><?php echo $record->name; ?></h3>
                     <p><?php echo $record->description; ?></p>
                     <p><?php echo $record->content; ?></p>
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                  <div class="p-4">
                     <?php 
                        //lay bien ket noi csdl
                        $db = connection::getInstance(); //core/connection.php
                        //chuan bi truy van
                        $result = $db->prepare("select * from tbl_category where category_id=$record->category_id");
                        //set kieu lay du lieu
                        $result->setFetchMode(PDO::FETCH_OBJ);
                        //thuc thi truy van
                        $result->execute();
                        //duyet cac gia tri gan vao bien array
                        $arr = $result->fetchAll();
                        ?>
                     <?php foreach($arr as $rows): ?>
                     <h3 class="mb-4">Sản Xuất Bởi <?php if(isset($record->category_id) && $record->category_id == $rows->category_id): ?><?php endif; ?><?php echo $rows->name; ?>
                     </h3>
                     <?php endforeach; ?>
                     <!-- 	              	<p><?php echo $record->description ?></p> -->
                  </div>
               </div>
               <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                  <div class="row p-4">
                     <div class="col-md-7">
                        <h3 class="mb-4">23 Reviews</h3>
                        <div class="review">
                           <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                           <div class="desc">
                              <h4>
                                 <span class="text-left">Jacob Webb</span>
                                 <span class="text-right">14 March 2018</span>
                              </h4>
                              <p class="star">
                                 <span>
                                 <i class="ion-ios-star-outline"></i>
                                 <i class="ion-ios-star-outline"></i>
                                 <i class="ion-ios-star-outline"></i>
                                 <i class="ion-ios-star-outline"></i>
                                 <i class="ion-ios-star-outline"></i>
                                 </span>
                                 <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                              </p>
                              <p>Giày này đi vào rất cảm giác như Khá Bảnh =))</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="rating-wrap">
                           <h3 class="mb-4">Give a Review</h3>
                           <p class="star">
                              <span>
                              <i class="ion-ios-star-outline"></i>
                              <i class="ion-ios-star-outline"></i>
                              <i class="ion-ios-star-outline"></i>
                              <i class="ion-ios-star-outline"></i>
                              <i class="ion-ios-star-outline"></i>
                              (98%)
                              </span>
                              <span>20 Reviews</span>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>