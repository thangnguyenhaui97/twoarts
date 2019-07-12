<div class="col-md-4 col-lg-2">
<div class="sidebar">
<div class="sidebar-box-2">
   <h2 class="heading"><a href="tat-ca-san-pham">Tất Cả</a></h2>
</div>
<div class="sidebar-box-2">
<h2 class="heading">Hãng</h2>
<div class="fancy-collapse-panel">
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php 
         $category = db::get_all("select * from tbl_category order by category_id desc");
         foreach($category as $rows):
         ?>
      <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
               <a style="color: black;" href="giay-<?php echo $rows->slug; ?>-<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?>
               </a>
            </h4>
         </div>
      </div>
      <?php endforeach; ?>
   </div>
</div>