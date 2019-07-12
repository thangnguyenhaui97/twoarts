<?php if (isset($_SESSION['user_id'])) 
	{
	    echo "<script>alert('Bạn đã đăng nhập rồi!');location.href='trang-chu'</script>";
	} ?>
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2">Demo</span> <span>shop</span></p>
            <h1 class="mb-0 bread">Đăng nhập</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form method="post" action="index.php?controller=login&action=doLogin">
							<h3 class="mb-4 billing-heading">Thông Tin Đăng Nhập</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Tài Khoản</label>
	                  <input type="email" name="email" class="form-control" required="required" autofocus="autofocus" placeholder="abc123@mail.com">
	                </div>
	              </div>

                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Mật Khẩu</label>
	                  <input type="password" class="form-control" name="password" required="" placeholder="******">
	                </div>
		            </div>
	            </div>
	            					<div class="form-group">
						<div class="col-md-12">
							<div class="checkbox">
							   <label><input type="checkbox" value="remember-me" class="mr-2">Nhớ Mật Khẩu</label>
							</div>
						</div>
					</div>
					<input type="submit" value="Đăng nhập" class="btn btn-primary" style="margin: auto; width: 30%; height: 45px; float: right;">
<!-- 					<p style="float: right;"><a href="#"class="btn btn-primary py-3 px-4">Đăng Nhập</a></p>
					<p style="float: right;">&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<p style="float: right;"><a href="#"class="btn btn-primary py-3 px-4" style="width: 120px;"l>Đăng ký</a></p> -->
	          </form><!-- END -->



				</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->