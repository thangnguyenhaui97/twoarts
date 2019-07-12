<ol class="breadcrumb">
   <li class="breadcrumb-item">
      DEMO
   </li>
   <li class="breadcrumb-item active">Admin</li>
   <li class="breadcrumb-item active">Thao Tác</li>
</ol>
<div class="col-md-12">
   <div class="panel panel-primary">
      <div class="panel-heading"></div>
      <br>
      <div class="panel-body">
         <form method="post" action="<?php echo $form_action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Họ Tên</div>
               <div class="col-md-10">
                  <input type="text" value="<?php echo isset($record->fullname)?$record->fullname:""; ?>" name="fullname" class="form-control" required>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Email</div>
               <div class="col-md-10">
                  <input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" name="email" class="form-control" required>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Mật Khẩu</div>
               <div class="col-md-10">
                  <input type="password" name="password" class="form-control" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
               </div>
            </div>
            <!-- end rows -->
            <br>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2"></div>
               <div class="col-md-10">
                  <input type="submit" value="Xử lý" class="btn btn-primary">
               </div>
            </div>
            <!-- end rows -->
         </form>
      </div>
   </div>
</div>