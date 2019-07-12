    <?php   if (!isset($_SESSION['user_id']))
    {
        echo "<script>alert('Bạn phải đăng nhập mới được thực hiện chức năng này');location.href='dang-nhap'</script>";

    }?>
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2">Demo</span> <span>shop</span></p>
            <h1 class="mb-0 bread">Cập Nhật Mật Khẩu</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form method="post" action="index.php?controller=user&action=doEdit1">
							<h3 class="mb-4 billing-heading">Thông tin</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="firstname">Mật Khẩu Mới</label>
	                  <input type="password" name="password-new" class="form-control" required="required" autofocus="autofocus" placeholder="******">
	                </div>
	              </div>

                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="streetaddress">Nhập Lại Mật Khẩu</label>
	                  <input type="password" class="form-control" name="re-password" required="" placeholder="******">
	                </div>
		            </div>
	            </div>
	            					<div class="form-group">
						<div class="col-md-12">

						</div>
					</div>
					<input type="submit" value="Cập Nhật" class="btn btn-primary" style="margin: auto; width: 30%; height: 45px; float: right;">
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