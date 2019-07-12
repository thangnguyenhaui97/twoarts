<ol class="breadcrumb">
   <li class="breadcrumb-item">
      DEMO
   </li>
   <li class="breadcrumb-item active">Hãng</li>
   <li class="breadcrumb-item active">Thao Tác</li>
</ol>
<div class="col-md-12">
   <div class="panel panel-primary">
      <div class="panel-heading"></div>
      <div class="panel-body">
         <form method="post" action="<?php echo $form_action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Tên Hãng</div>
               <div class="col-md-10">
                  <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
               </div>
            </div>
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Đường Dẫn</div>
               <div class="col-md-10">
                  <input type="text" value="<?php echo isset($record->slug)?$record->slug:""; ?>" name="slug" class="form-control">
               </div>
            </div>
            <!-- end rows -->
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