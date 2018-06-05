<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']} qx-flex", $visibilityClasses, [
    "wow {$field['animation']}" => $field['animation'],
    "qx-hvr-{$field['hover_animation']}" => $field['hover_animation']
  ]);
  // Animation delay
  $animation_delay = '';
  if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
    $animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
  }
  
?>

<div id="<?php echo $id;?>" class="<?php echo $classes?> qx-pricing-table" <?php echo $animation_delay; ?>>
  <?php 
    foreach($field['pricing'] as $key => $item):
    // New icon system. Since @1.7
	$icon=json_decode($item['btn_icon']);
	//print_R($icon);
    //$icon = get_icon($item, 'btn_icon');
  ?>
    <div class="single-table <?php echo $item['featured'] == 'true' ? 'featured' : ''; ?>">
	  <?php if($item['header_image']):?>
	  <div class="header-image">
		<img alt="<?php echo $item['header_image_alt_text']?>" src="<?php echo $item['header_image']?>">
	  </div>
	  <?php endif;?>
      <div class="table-heading">
	   <?php if($item['package']):?>
          <div class="title">
            <?php echo $item['package']?>
          </div><!-- /.title -->
        <?php endif;?>
		</div><!--/.table-heading-->
	  
        <div class="cost">
		 <div class="curency-amount">
          <?php if($item['curency']):?>
            <span class="curency"><sup><?php echo $item['curency']?></sup></span><!-- /.curency -->
          <?php endif;?>

          <?php if($item['amount']):?>
            <span class="amount"><?php echo $item['amount']?></span><!-- /.amount -->
          <?php endif;?>
		  
		  <?php if($item['plantype']):?>
            <span class="plantype"> <?php echo $item['plantype']?></span><!-- /.plantype -->
          <?php endif;?>
		  </div>
        </div><!-- /.cost -->
		<div class="description-box">
		<?php if($item['description']):?>
		  <div class="description">
			<?php echo $item['description']?>
		  </div><!-- /.description -->
		<?php endif;?>
		</div>

      <div class="table-body">
        <?php echo $item['featurelist']; ?>
      </div><!--/.table-body-->
		
      <div class="table-footer">
        <a class="qx-btn qx-btn-<?php echo $item['btntype']?> <?php echo $item['btnstyle']?>" href="<?php echo $item['button']['url'] ?>" <?php echo ( $item['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
            <?php if( (!empty($icon->name))  AND ( $item['btn_icon_placement'] == 'left' ) ): ?>
				<i class="<?php echo $icon->name?>"></i>
            <?php endif; ?>
            <?php echo $item['button']['text'] ?>
            <?php if( (!empty($icon->name)) AND ( $item['btn_icon_placement'] == 'right' ) ): ?>
              <i class="<?php echo $icon->name?>"></i>
            <?php endif; ?>
        </a>
      </div><!-- /.table-footer -->
    </div><!--/.single-table-->
  <?php endforeach; ?>
</div>
<!-- qx-element-pricing -->

