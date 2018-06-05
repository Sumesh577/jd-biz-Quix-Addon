<?php
	// content
	$text = $field['content'] ? $field['content'] : "Lorem ipsum dolor sit amet timeam deleniti mnesarchum ex sed alii hinc dolores ad cum." ;  
	$classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses);
	$animation_class = ($field['animation']) ? 'wow ' . $field['animation'] : '';
	// Hover animation
	$hover_animation = ($field['hover_animation']) ? " qx-hvr-{$field['hover_animation']}" : '' ;
	$animation_delay = (array_key_exists('animation_delay', $field)) ? $field['animation_delay'] : '';
?>
<div id="<?php echo $id; ?>" class="<?php echo $classes;?> <?php echo $animation_class . $hover_animation?>" <?php echo ($field['animation']) ? 'data-wow-delay="'. $animation_delay .'s"' : '';?>>
	<div class="jd-featured-image">
		<div class="image-box-wrapper">
			<img id="jd-featured-image" src="<?php echo $field['image']; ?>" 
				<?php echo ($field['alt_text']) ? 'alt="'.$field['alt_text'].'"': ''; ?>
				<?php echo ($field['title_text']) ? 'title="'.$field['title_text'].'"': ''; ?> />
		</div><!-- end image box-wrapper -->
		<div class="featured-box-wrapper">
			<div class="featured-box-body">
				<p class="box-info"><?php echo $text; ?></p>
			</div><!-- End featured box body -->
		</div><!-- end featured box wrapper -->
	</div>
</div>