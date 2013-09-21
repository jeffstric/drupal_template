<?php //dpm($product_node);     ?>
<?php
$image_ary = isset($product_node['#node']->field_product_image['und'][0]) ? $product_node['#node']->field_product_image['und'][0] : array();
if (!isset($image_ary['uri']) || !$image_ary['uri']) {
  $image_ary['uri'] = 'public://begin/product/example_product.jpeg';
}
?>
<div class="product_grid pull-left">
  <div class="img_show">
    <a href="<?php echo$product_node['links']['node']['#links']['node-readmore']['href']; ?>">
      <img class="img-rounded" src="<?php echo file_create_url($image_ary['uri']); ?>"
          <?php if($image_ary['uri']['alt']):?> alt="<?php echo $image_ary['uri']['alt']; ?>"<?php endif;?>
          <?php if($image_ary['uri']['title']):?> title="<?php echo $image_ary['uri']['title']; ?>"/><?php endif;?>
    </a>
  </div>
  <div class="clearfix product_info">
    <div class="pull-left product_info_name" style="width: 76%;">
      <a href="<?php echo$product_node['links']['node']['#links']['node-readmore']['href']; ?>">
        <h5><?php echo drupal_substr($product_node['#node']->title, 0, 35); ?></h5>
      </a>
    </div>
    <div class="pull-right product_info_time muted mt10" style="width: 24%;">
      <?php echo date('Y-m-d', $product_node['#node']->created); ?>
    </div>

  </div>
</div>