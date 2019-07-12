<ol class="breadcrumb">
   <li class="breadcrumb-item">
      DEMO
   </li>
   <li class="breadcrumb-item active">Sản Phẩm</li>
   <li class="breadcrumb-item active">Thao Tác</li>
</ol>
<div class="col-md-12">
   <div class="panel panel-primary">
      <div class="panel-heading"></div>
      <div class="panel-body">
         <form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Tên Sản Phẩm</div>
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
               <div class="col-md-2">Hãng</div>
               <div class="col-md-10">
                  <select name="category_id" class="form-control" style="width: 300px;">
                     <?php 
                        //lay bien ket noi csdl
                        $db = connection::getInstance(); //core/connection.php
                        //chuan bi truy van
                        $result = $db->prepare("select * from tbl_category");
                        //set kieu lay du lieu
                        $result->setFetchMode(PDO::FETCH_OBJ);
                        //thuc thi truy van
                        $result->execute();
                        //duyet cac gia tri gan vao bien array
                        $arr = $result->fetchAll();
                        ?>
                     <?php foreach($arr as $rows): ?>
                     <option <?php if(isset($record->category_id) && $record->category_id == $rows->category_id): ?> selected <?php endif; ?> value="<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Loại</div>
               <div class="col-md-10">
                  <select name="type_id" class="form-control" style="width: 300px;">
                     <?php 
                        //lay bien ket noi csdl
                        $db = connection::getInstance(); //core/connection.php
                        //chuan bi truy van
                        $result = $db->prepare("select * from tbl_type");
                        //set kieu lay du lieu
                        $result->setFetchMode(PDO::FETCH_OBJ);
                        //thuc thi truy van
                        $result->execute();
                        //duyet cac gia tri gan vao bien array
                        $arr = $result->fetchAll();
                        ?>
                     <?php foreach($arr as $rows): ?>
                     <option <?php if(isset($record->type_id) && $record->type_id == $rows->type_id): ?> selected <?php endif; ?> value="<?php echo $rows->type_id; ?>">Giày <?php echo $rows->name; ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Giá</div>
               <div class="col-md-10">
                  <input type="number" value="<?php echo isset($record->price)?$record->price:""; ?>" name="price" id="price" class="form-control" required>
               </div>
            </div>
            <!-- end rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Số lượng</div>
               <div class="col-md-10">
                  <input type="number" value="<?php echo isset($record->quantity)?$record->quantity:""; ?>" name="quantity" id="quantity" class="form-control" required>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Giảm Giá</div>
               <div class="col-md-10">
                  <input type="number" value="<?php echo isset($record->discount)?$record->discount:""; ?>" name="discount" id="discount" class="form-control" required>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Mô tả</div>
               <div class="col-md-10">
                  <textarea name="description" id="description">
                        <?php echo isset($record->description)?$record->description:""; ?>
                    </textarea>
                  <script type="text/javascript">
                     CKEDITOR.replace("description");
                  </script>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Chi tiết sản phẩm</div>
               <div class="col-md-10">
                  <textarea name="content" id="content">
                        <?php echo isset($record->content)?$record->content:""; ?>
                    </textarea>
                  <script type="text/javascript">
                     CKEDITOR.replace("content");
                  </script>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2"></div>
               <div class="col-md-10">
                  <input type="checkbox" <?php if(isset($record->hotproduct) && $record->hotproduct == 1): ?> checked <?php endif; ?> name="hotproduct" id="hotproduct"> <label for="hotproduct">Hot product</label>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Upload Image (800x1200)</div>
               <div class="col-md-10">
                  <input type="file" name="img">
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