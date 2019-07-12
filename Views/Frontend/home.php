<!--       <script language="javascript">
   if(confirm("Bạn muốn đăng kí nhận mã giảm giá ?")){
       function Redirect() {
           window.location="index.php?controller=nhanthuong";
       }
   setTimeout('Redirect()', 10);
   }else{
     
   }
   
   </script>  -->
<section id="home-section" class="hero">
   <div class="home-slider owl-carousel">
      <div class="slider-item js-fullheight">
         <div class="overlay"></div>
         <div class="container-fluid p-0">
            <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
               <img class="one-third order-md-last img-fluid" src="Assets/Frontend/images/bg_1.png" alt="">
               <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '60%' }">
                  <div class="text">
                     <span class="subheading">#Hàng Mới Về</span>
                     <div class="horizontal">
                        <h1 class="mb-4 mt-3">Độ Ta</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                        <p><a href="#" class="btn-custom">Khám Phá Ngay</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="slider-item js-fullheight">
         <div class="overlay"></div>
         <div class="container-fluid p-0">
            <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
               <img class="one-third order-md-last img-fluid" src="Assets/Frontend/images/bg_2.png" alt="">
               <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '60%' }">
                  <div class="text">
                     <span class="subheading">#Hàng Mới Về</span>
                     <div class="horizontal">
                        <h1 class="mb-4 mt-3">Không Độ Nàng</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                        <p><a href="#" class="btn-custom">Khám Phá Ngay</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
   <div class="container">
      <div class="row no-gutters ftco-services">
         <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
               <div class="icon d-flex justify-content-center align-items-center mb-4">
                  <span class="flaticon-bag"></span>
               </div>
               <div class="media-body">
                  <h3 class="heading">Miễn Phí Vận Chuyển</h3>
                  <p>
                     Phật ở trên kia cao quá <br>
                     Mãi mãi không độ tới nàng <br>
                     Vạn dặ.m tương tư vì ai <br>
                     Tiếng mõ vang lên phũ phàng.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
               <div class="icon d-flex justify-content-center align-items-center mb-4">
                  <span class="flaticon-customer-service"></span>
               </div>
               <div class="media-body">
                  <h3 class="heading">Hỗ Trợ Khách Hàng</h3>
                  <p>
                     Chùa này không thấy bóng nàng <br> 
                     Bồ đề chẳng muốn nở hoa <br> 
                     Dòng kinh còn lưu vạn chữ <br> 
                     Bỉ ngạn phủ lên mấy thu. 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
               <div class="icon d-flex justify-content-center align-items-center mb-4">
                  <span class="flaticon-payment-security"></span>
               </div>
               <div class="media-body">
                  <h3 class="heading">Thanh Toán An Toàn</h3>
                  <p>
                     Hồng trần hôm nay xa quá <br>
                     Ái ố không thể giãi bày <br>
                     Hỏi người ra đi vì đâu <br>
                     Chắc chắn không thể quay đầu. 
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  -->
<!--  -->
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
         <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">New Shoes</h2>
            <p>Mộng này tan theo bóng phật. Trả lại người áo cà sa. Vì sao độ ta không độ nàng. Vì người hoa rơi hữu ý. </p>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <?php 
            //lay toan bo du lieu
            $newproduct = db::get_all("select * from tbl_product order by id desc limit 0,8");
            ?>
         <?php foreach($newproduct as $rows): ?>
         <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
            <div class="product d-flex flex-column">
               <a href="product-<?php echo $rows->slug ?>-<?php echo $rows->id; ?>" class="img-prod">
                  <img class="img-fluid" src="Assets/Upload/Product/<?php echo $rows->img; ?>" alt="Colorlib Template">
                  <?php if($rows->discount > 0): ?>
                  <span class="status"><?php echo $rows->discount; ?> % Off</span>
                  <?php endif; ?>
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
                     <p class="price"><span>Giá: <?php echo number_format($rows->price); ?> VNĐ</span></p>
                  </div>
                  <p class="bottom-area d-flex px-3">
                     <a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>" class="add-to-cart text-center py-2 mr-1"><span>Thêm Vào Giỏ <i class="ion-ios-add ml-1"></i></span></a>
                     <a href="index.php?controller=cart&action=add_now&id=<?php echo $rows->id; ?>" class="buy-now text-center py-2">Mua Ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
                  </p>
               </div>
            </div>
         </div>
         <?php endforeach; ?>            
      </div>
   </div>
</section>
<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-lg-4">
            <div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(Assets/Frontend/images/choose-1.jpg);">
               <div class="text text-center text-white px-2">
                  <span class="subheading">Giày Nam</span>
                  <h2>Men's Collection</h2>
                  <p>
                     Khiến nước chảy càng vô tình <br>
                     Một thưở hoa niên hợp tan <br>
                     Tiếng mõ xưa rối loạn <br>
                     Bồ đề không nghe tiếng nàng.
                  </p>
                  <p><a href="giay-1" class="btn btn-black px-3 py-2">Xem Ngay</a></p>
               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="row no-gutters choose-wrap divider-two align-items-stretch">
               <div class="col-md-12">
                  <div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(Assets/Frontend/images/choose-2.jpg);">
                     <div class="col-md-7 d-flex align-items-center">
                        <div class="text text-white text-center px-5">
                           <span class="subheading">Giày Nữ</span>
                           <h2>Women's Collection</h2>
                           <p>
                              Hồng trần đã mấy độ hoa <br>
                              Mắt còn vương màu máu <br>
                              Hồng nhan chẳng trông thấy đâu? <br>
                              Lại một tay ta gõ mõ.
                           </p>
                           <p><a href="giay-2" class="btn btn-black px-3 py-2">Xem Ngay</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="row no-gutters">
                     <div class="col-md-6">
                        <div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
                           <div class="text text-center px-5">
                              <span class="subheading">Summer Sale</span>
                              <h2>Extra 50% Off</h2>
                              <p>
                                 Phá nát cương thường biến họa <br>
                                 Vài độ xuân thu vừa qua <br>
                                 Có lẽ không còn thấy nàng <br>
                                 Hỏi phật trong kiếp này. 
                              </p>
                              <p><a href="#" class="btn btn-black px-3 py-2">Xem Ngay</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(Assets/Frontend/images/choose-3.jpg);">
                           <div class="text text-center text-white px-5">
                              <span class="subheading">Hot Shoes</span>
                              <h2>Best Sellers</h2>
                              <p>
                                 Ngày ngày gõ mõ tụng kinh <br>
                                 Vì sao độ ta không độ nàng? <br>
                                 Vì người hoa rơi hữu ý <br>
                                 Khiến nước chảy càng vô tình. 
                              </p>
                              <p><a href="san-pham-ban-chay" class="btn btn-black px-3 py-2">Xem Ngay</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--     <section class="ftco-section ftco-deal bg-primary">
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <img src="Assets/Frontend/images/prod-1.png" class="img-fluid" alt="">
           </div>
           <div class="col-md-6">
               <div class="heading-section heading-section-white">
                   <span class="subheading">Deal of the month</span>
           <h2 class="mb-3">Deal of the month</h2>
         </div>
               <div id="timer" class="d-flex mb-4">
                     <div class="time" id="days"></div>
                     <div class="time pl-4" id="hours"></div>
                     <div class="time pl-4" id="minutes"></div>
                     <div class="time pl-4" id="seconds"></div>
                   </div>
                   <div class="text-deal">
                       <h2><a href="#">Nike Free RN 2019 iD</a></h2>
                       <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                       <ul class="thumb-deal d-flex mt-4">
                           <li class="img" style="background-image: url(Assets/Frontend/images/product-6.png);"></li>
                           <li class="img" style="background-image: url(Assets/Frontend/images/product-2.png);"></li>
                           <li class="img" style="background-image: url(Assets/Frontend/images/product-4.png);"></li>
                       </ul>
                   </div>
           </div>
       </div>
   </div>
   </section> -->
<section class="ftco-section testimony-section bg-light">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="services-flow">
               <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                     <span class="flaticon-bag"></span>
                  </div>
                  <div class="text">
                     <h3>Miễn Phí Vận Chuyển</h3>
                     <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                  </div>
               </div>
               <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                     <span class="flaticon-heart-box"></span>
                  </div>
                  <div class="text">
                     <h3>Quà Tặng Giá Trị</h3>
                     <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                  </div>
               </div>
               <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                     <span class="flaticon-payment-security"></span>
                  </div>
                  <div class="text">
                     <h3>Thanh Toán An Toàn</h3>
                     <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                  </div>
               </div>
               <div class="services-2 p-4 d-flex ftco-animate">
                  <div class="icon">
                     <span class="flaticon-customer-service"></span>
                  </div>
                  <div class="text">
                     <h3>Hỗ Trợ 24/7</h3>
                     <p class="mb-0">Separated they live in. A small river named Duden flows</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="heading-section ftco-animate mb-5">
               <h2 class="mb-4">Our satisfied customer says</h2>
               <p>
                  Một thuở hoa niên hợp tan <br>
                  Tiếng mõ xưa rối loạn <br>
                  Bồ đề không nghe tiếng nàng <br>
                  Hồng trần đã mấy độ hoa.
               </p>
            </div>
            <div class="carousel-testimony owl-carousel">
               <div class="item">
                  <div class="testimony-wrap">
                     <div class="user-img mb-4" style="background-image: url(Assets/Frontend/images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                     </div>
                     <div class="text">
                        <p class="mb-4 pl-4 line">
                           Mắt còn vương màu máu <br>
                           Hồng nhan chẳng trông thấy đâu? <br>
                           Lại một tay ta gõ mõ <br>
                           Phá nát cương thường biến họa.
                        </p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">Marketing Manager</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap">
                     <div class="user-img mb-4" style="background-image: url(Assets/Frontend/images/person_2.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                     </div>
                     <div class="text">
                        <p class="mb-4 pl-4 line">
                           Vài độ xuân thu vừa qua <br>
                           Có lẽ không còn thấy nàng <br>
                           Hỏi phật trong kiếp này <br>
                           Ngày ngày gõ mõ tụng kinh <br>
                           Vì sao độ ta không độ nàng?
                        </p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">Interface Designer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap">
                     <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                     </div>
                     <div class="text">
                        <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">UI Designer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap">
                     <div class="user-img mb-4" style="background-image: url(Assets/Frontend/images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                     </div>
                     <div class="text">
                        <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">Web Developer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap">
                     <div class="user-img mb-4" style="background-image: url(Assets/Frontend/images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                        <i class="icon-quote-left"></i>
                        </span>
                     </div>
                     <div class="text">
                        <p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">System Analyst</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-gallery">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4"><a href="https://www.instagram.com/vanthang_isme/">Follow Us On Instagram</a></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
         </div>
      </div>
   </div>
   <div class="container-fluid px-0">
      <div class="row no-gutters">
         <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="Assets/Frontend/images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Assets/Frontend/images/gallery-1.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="Assets/Frontend/images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Assets/Frontend/images/gallery-2.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="Assets/Frontend/images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Assets/Frontend/images/gallery-3.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="Assets/Frontend/images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Assets/Frontend/images/gallery-4.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="Assets/Frontend/images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Assets/Frontend/images/gallery-5.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
         <div class="col-md-4 col-lg-2 ftco-animate">
            <a href="Assets/Frontend/images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(Assets/Frontend/images/gallery-6.jpg);">
               <div class="icon mb-4 d-flex align-items-center justify-content-center">
                  <span class="icon-instagram"></span>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>