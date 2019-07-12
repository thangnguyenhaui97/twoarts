<!-- 
   * File name: Views/Backend/category.php
   * Loai file: file view trong mo hinh MVC
   -->
<ol class="breadcrumb">
   <li class="breadcrumb-item">
      DEMO
   </li>
   <li class="breadcrumb-item active">Hãng</li>
</ol>
<div class="col-md-12">
	      <div class="panel-heading" style="font-weight: bold;">Danh Sách Hãng</div>
      <br>
   <div style="margin-bottom:5px;">
      <a href="admin/list-category/them-moi" class="btn btn-primary">Thêm Mới</a>
   </div>
   <div class="panel panel-primary">

      <div class="panel-body">
         <table class="table table-bordered table-hover">
            <tr>
               <th>Tên Hãng</th>
               <th>Đường dẫn</th>
               <th style="width:100px;">Thao Tác</th>
            </tr>
            <?php foreach($list_record as $rows): ?>
            <tr>
               <td><?php echo $rows->name; ?></td>
               <td><?php echo $rows->slug; ?></td>
               <td style="text-align:center;">
                  <a href="admin/list-category/sua/<?php echo $rows->category_id; ?>">Sửa</a>&nbsp;
                  <a href="index.php?area=admin&controller=category&action=delete&id=<?php echo $rows->category_id; ?>" onclick="return window.confirm('Are you sure?');">Xóa</a>
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
            <li class="page-item"><a class="page-link" href="admin/list-category/trang/<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
         </ul>
      </div>
   </div>
</div>