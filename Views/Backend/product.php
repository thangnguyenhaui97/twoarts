<ol class="breadcrumb">
   <li class="breadcrumb-item">
      DEMO
   </li>
   <li class="breadcrumb-item active">Sản Phẩm</li>
</ol>
<div class="col-md-12">
          <div class="panel-heading" style="font-weight: bold;">Danh Sách Sản Phẩm</div>
      <br>
   <div style="margin-bottom:5px;">
      <a href="admin/list-product/them-moi" class="btn btn-primary">Thêm Mới</a>
   </div>
   <div class="panel panel-primary">

      <div class="panel-body">
         <table class="table table-bordered table-hover">
            <tr>
               <th style="width: 100px; text-align: center;">Ảnh</th>
               <th style="width: 100px; text-align: center;">Tên Sản Phẩm</th>
               <th style="width: 100px; text-align: center;">Đường Dẫn</th>
               <th style="width: 50px; text-align: center;">Hãng</th>
               <th style="width: 50px; text-align: center;">Loại Giày</th>
               <th style="width: 50px; text-align: center;">Giá</th>
               <th style="width: 50px; text-align: center;">Giảm Giá</th>
               <th style="width: 100px; text-align: center;">Mô Tả</th>
               <th style="width: 150px; text-align: center;">Chi Tiết</th>
               <th style="width: 50px; text-align: center;">Hot</th>
               <th style="width: 100px; text-align: center;">Thao Tác</th>
            </tr>
            <?php foreach($list_record as $rows): ?>
            <tr>
               <td style="text-align: center;">
                  <?php if($rows->img != "" && file_exists("Assets/Upload/product/".$rows->img)): ?>
                  <img src="Assets/Upload/product/<?php echo $rows->img; ?>" style="width: 100px;">
                  <?php endif; ?>
               </td>
               <td style="text-align: center;"><?php echo $rows->name; ?></td>
               <td style="text-align: center;"><?php echo $rows->slug; ?></td>
               <td style="text-align: center;">
                  <?php 
                     //lay doi tuong ket noi
                     $db = connection::getInstance();
                     //------
                     //PDO
                     //truy van de lay ve mot ban ghi trong table tbl_category
                     //chuan bi truy van
                     $query = $db->prepare("select name from tbl_category where category_id=:id");
                     //set kieu duyet phan tu
                     $query->setFetchMode(PDO::FETCH_OBJ);
                     //thuc thi truy van -> truyen tham so vao
                     $query->execute(array("id"=>$rows->category_id));
                     //lay mot ban ghi
                     $category = $query->fetch();
                     //------
                     echo isset($category->name)?$category->name:"";
                     ?>
               </td>
               <td style="text-align: center;">
                  <?php 
                     //lay doi tuong ket noi
                     $db = connection::getInstance();
                     //------
                     //PDO
                     //truy van de lay ve mot ban ghi trong table tbl_category
                     //chuan bi truy van
                     $query = $db->prepare("select name from tbl_type where type_id=:id");
                     //set kieu duyet phan tu
                     $query->setFetchMode(PDO::FETCH_OBJ);
                     //thuc thi truy van -> truyen tham so vao
                     $query->execute(array("id"=>$rows->type_id));
                     //lay mot ban ghi
                     $type = $query->fetch();
                     //------
                     echo isset($type->name)?$type->name:"";
                     ?>
               </td>
               <td style="text-align: center;"><?php echo number_format($rows->price); ?> VNĐ</td>
               <td style="text-align: center;"><?php echo $rows->discount; ?></td>
               <td style="text-align: center;"><?php echo $rows->description; ?></td>
               <td style="text-align: center;"><?php echo $rows->content; ?></td>
               <td style="text-align: center;">
                  <?php if($rows->hotproduct == 1): ?>
                  <i class="fa fa-check"></i>
                  <?php endif; ?>
               </td>
               <td style="text-align:center;">
                  <a href="admin/list-product/sua/<?php echo $rows->id; ?>">Sửa</a>&nbsp;
                  <a href="index.php?area=admin&controller=product&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
               </td>
            </tr>
            <?php endforeach; ?>
         </table>
         <style type="text/css">
            .pagination{padding:0px; margin:0px;}
         </style>
         <ul class="pagination" style="float: right;">
            <li class="page-item disabled"><a class="page-link" href="#">Trang</a></li>
            <?php for($i = 1; $i <= $num_page; $i++): ?>
            <li class="page-item"><a class="page-link" href="admin/list-product/trang/<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
         </ul>
      </div>
   </div>
</div>