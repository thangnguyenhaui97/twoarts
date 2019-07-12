    <?php   if (!isset($_SESSION['user_id']))
    {
        echo "<script>alert('Bạn phải đăng nhập mới được thực hiện chức năng này');location.href='dang-nhap'</script>";

    }?>
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2">Demo</span> <span>shop</span></p>
            <h1 class="mb-0 bread">Thông Tin Tài Khoản</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form method="post" action="index.php?controller=user&action=doEdit" class="billing-form">
							<h3 class="mb-4 billing-heading">Thông Tin Cá Nhân</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="emailaddress">Email</label>
	                  <input type="email" name="email" required="" disabled="" value="<?php echo $record->email; ?>" class="form-control" placeholder="">
	                </div>
                </div>
                
	              <!-- <div class="w-100"></div>
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Nhập Lại Mật Khẩu</label>
	                  <input type="password" name="repassword" class="form-control" placeholder="" required="" style="color: black;">
	                </div>
	              </div> -->
	              <div class="w-100"></div>
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Họ Và Tên</label>
	                  <input type="text" name="fullname" class="form-control" value="<?php echo $record->fullname; ?>" required="">
	                </div>
	              </div>

                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Địa Chỉ</label>
	                  <input type="text" name="address" class="form-control" value="<?php echo $record->address; ?>" required="" placeholder="">
	                </div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-12">
	                <div class="form-group">
	                	<label for="phone">Số Điện Thoại</label>
	                  <input type="number" name="phone" required="" value="<?php echo $record->phone; ?>" class="form-control" placeholder="">
	                </div>
	              </div>
	              
                <div class="w-100"></div>
                <div class="col-md-12">

                </div>
	            </div>
	          		<div class="cart-detail bg-light p-3 p-md-4">

							
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   
											</div>
										</div>
									</div>
									<p><input type="submit" value="Cập nhật" class="btn btn-primary py-3 px-4"></p>
								</div>
	          	</div>
	          </form><!-- END -->



	         

	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->