<div class="sidebar-box-2">
<h2 class="heading">Loại Giày</h2>
<div class="fancy-collapse-panel">
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php 
         $type = db::get_all("select * from tbl_type order by type_id desc");
         foreach($type as $rows):
         ?>
      <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
               <a style="color: black;" href="giay-<?php echo $rows->type_id; ?>">Giày <?php echo $rows->name; ?>
               </a>
            </h4>
         </div>
      </div>
      <?php endforeach; ?>
   </div>
</div>
<br><br>