  <?php
  
//print dpm($fields);
  
 
  

  
?>




<div style="width:220px;  float: left;padding: 10px;">
<div style="width:220px;float:left;margin-right:47px; border:1px solid #ccc; height:350px;  margin-bottom: 15px;">

  <div class="title" style="height:65px;">
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h3 align="center"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $fields["title"]->content; ?></a></h3>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
 </div>
 
 <div style="
    padding-left: 50px;
">
<?php print $fields["field_image12"]->content; ?>
 </div> 
<h4 align="center"><?php print $fields["commerce_price"]->content; ?><span>	<?php print $fields["field_product"]->content; ?></span></h4> 
 
 <div align="center">   <?php print $fields["field_product_1"]->content; ?>    </div>
 
  <div align="center" style="
    padding-left: 60px;
"><?php print $fields["field_prorating"]->content; ?> </div>
 
 
 
 </div>
</div>




	
            
            
           