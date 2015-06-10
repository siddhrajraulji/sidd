

<div style="width:210px;  float: left;padding: 10px;">
<div style="width:210px;float:left;margin-right:47px; border:1px solid #ccc; height:350px;">

  <div class="title" style="height:65px;">
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h3 align="center"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
 </div>
 
 <div style="
    padding-left: 50px;
">
 <?php print render ($content["field_image12"]); ?>
 </div> 
<h4 align="center"><?php print render ($content["product:commerce_price"]); ?></h4> 
 
 <div align="center"><?php print render ($content["field_product"]); ?></div>
 
  <div align="center" style="
    padding-left: 60px;
"><?php print render ($content["field_prorating"]); ?></div>
 
 
 
 </div>
</div>




