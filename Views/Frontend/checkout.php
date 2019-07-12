    <?php   if (!isset($_SESSION['user_id']))
    {
        echo "<script>alert('Bạn phải đăng nhập mới được thực hiện chức năng này');location.href='dang-nhap'</script>";

    }
    if(!isset($_SESSION['cart'])||count($_SESSION['cart'])==0)
	{
		echo "<script>alert('Bạn chưa chọn mua sản phẩm nào!');location.href='trang-chu'</script>";
	}
	?>
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2">Demo</span> <span>shop</span></p>
            <h1 class="mb-0 bread">Thanh Toán</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form method="post" action="index.php?controller=checkout&action=bill" class="billing-form">
							<h3 class="mb-4 billing-heading">Chi Tiết Hóa Đơn</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Họ Và Tên</label>
	                  <input type="text" name="name" class="form-control" placeholder="" required="" style="color: black;">
	                </div>
	              </div>

                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Địa Chỉ</label>
	                  <input type="text" name="address" class="form-control" required="" placeholder="">
	                </div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Số Điện Thoại</label>
	                  <input type="number" name="phone" required="" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Địa Chỉ Email</label>
	                  <input type="email" name="email" required="" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<!-- <div class="form-group mt-4">
										<div class="radio">
										  <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
										  <label><input type="radio" name="optradio"> Ship to different address</label>
										</div>
									</div> -->
                </div>
	            </div>
	             <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">

	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Thông Tin Giỏ Hàng</h3>
	          			<p class="d-flex" >
		    						<span>Thành Tiền</span>
		    						<span style="text-align: right;"><?php echo number_format(cart::cart_total()); ?></span>
		    						<span>&nbsp;VNĐ</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Phí Vận Chuyển</span>
		    						<span style="text-align: right;">0</span>
		    						<span>&nbsp;VNĐ</span>
		    					</p>
		    					<!-- <p class="d-flex">
		    						<span>Giảm Giá</span>
		    						<span style="text-align: right;"><?php echo $product["discount"]; ?></span>
		    						<span>&nbsp;%</span>
		    					</p> -->
		    					<hr>
		    					<p class="d-flex">
		    						<span>Tổng Tiền</span>
		    						<span style="text-align: right;"><?php echo number_format(cart::cart_total() + 0); ?></span>
		    						<span>&nbsp;VNĐ</span>
		    					</p>
								</div>
	          	</div>

	          		          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Phương Thức Thanh Toán</h3>
							<!-- 		<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div> -->
									<div style="height: 150px;"></div>
									<div class="form-group" >
										<div class="col-md-12" >
											<div class="checkbox">
											   <label><input type="checkbox" value="" class="mr-2"> Tôi đồng ý với các điều khoản!</label>
											</div>
										</div>
										<div></div>
									</div>
									<p><input type="submit" value="Tiến Hành Đặt Hàng" class="btn btn-primary py-3 px-4"></p>
								</div>
	          	</div>
	          </form><!-- END -->



	         

	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->